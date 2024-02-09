/**
 * Import function triggers from their respective submodules:
 *
 * const {onCall} = require("firebase-functions/v2/https");
 * const {onDocumentWritten} = require("firebase-functions/v2/firestore");
 *
 * See a full list of supported triggers at https://firebase.google.com/docs/functions
 */

const {onRequest} = require("firebase-functions/v2/https");
const logger = require("firebase-functions/logger");

// Create and deploy your first functions
// https://firebase.google.com/docs/functions/get-started

// exports.helloWorld = onRequest((request, response) => {
//   logger.info("Hello logs!", {structuredData: true});
//   response.send("Hello from Firebase!");
// });
// Import necessary Firebase and WooCommerce SDKs
const functions = require('firebase-functions');
const admin = require('firebase-admin');
const WooCommerceAPI = require('woocommerce-api');

// Initialize Firebase Admin SDK
admin.initializeApp();

// Initialize WooCommerce API with your WooCommerce credentials
const WooCommerce = new WooCommerceAPI({
  url: 'https://test.mazayamahir.com/', // e.g., 'https://example.com'
  consumerKey: 'ck_5bc381dafbb4f01de78138ef0438e812982a5653a',
  consumerSecret: 'cs_d01af41214f2c1bb2ad1bf573603c28a123fd281c7a',
  wpAPI: true,
  version: 'wc/v3'
});

// Firebase Cloud Function to retrieve daily sales data and send summary emails
exports.sendDailySalesSummary = functions.pubsub.schedule('every 24 hours').onRun(async (context) => {
  try {
    // Get current timestamp and timestamp for 24 hours ago
    const currentTime = admin.firestore.Timestamp.now();
    const yesterdayTime = new Date(currentTime.toMillis() - 24 * 60 * 60 * 1000);

    // Query WooCommerce for orders placed in the last 24 hours
    const ordersResponse = await WooCommerce.getAsync('orders', { 
      date_min: yesterdayTime.toISOString(), 
      date_max: currentTime.toDate().toISOString(), 
      per_page: 100, // Adjust per_page as needed
      page: 1 
    });

    const orders = JSON.parse(ordersResponse.toJSON().body);

    // Calculate total sales revenue and other metrics
    let totalRevenue = 0;
    let totalOrders = orders.length;
    let topSellingProducts = {};

    orders.forEach(order => {
      totalRevenue += parseFloat(order.total);
      order.line_items.forEach(item => {
        if (topSellingProducts[item.name]) {
          topSellingProducts[item.name] += item.quantity;
        } else {
          topSellingProducts[item.name] = item.quantity;
        }
      });
    });

    // Format summary email content
    const summaryEmailContent = `
      Daily Sales Summary:
      Total Revenue: $${totalRevenue.toFixed(2)}
      Total Orders: ${totalOrders}
      Top Selling Products: ${JSON.stringify(topSellingProducts)}
    `;

    // Send summary email using Firebase email functionality or SendGrid
    await admin
      .firestore()
      .collection('emails')
      .add({
        to: 'dkkworld6@hotmail.com', // Change to recipient email
        message: {
          subject: 'Daily Sales Summary',
          text: summaryEmailContent
        }
      });

    console.log('Daily sales summary email sent successfully.');
  } catch (error) {
    console.error('Error sending daily sales summary email:', error);
  }
});

