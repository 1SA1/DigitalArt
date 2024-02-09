// Initialize Firebase
const firebaseConfig = {
  apiKey: "AIzaSyATZOrFCFEYG1XPan9ex47iqz6GnCqLSzo",
  authDomain: "woocommerce-f77b8.firebaseapp.com",
  databaseURL: "https://woocommerce-f77b8-default-rtdb.firebaseio.com",
  projectId: "woocommerce-f77b8",
  storageBucket: "woocommerce-f77b8.appspot.com",
  messagingSenderId: "290898260816",
  appId: "1:290898260816:web:85a00a7df7d3919152f255",
  measurementId: "G-B9XHV2Z6QR"
};
console.log(firebaseConfig)
firebase.initializeApp(firebaseConfig);

// Function to send purchase data to Firebase
function sendPurchaseData(orderId, products) {
  // Get a reference to the Firebase database
  var database = firebase.database();

  // Push purchase data to Firebase
  database.ref('purchases/' + orderId).set({
    products: products,
    timestamp: firebase.database.ServerValue.TIMESTAMP
  });
}

// Function to extract product data from the order received page
function extractProductDataFromPage() {
  var products = [];
  // Modify these selectors to match the actual DOM structure of the order received page
  jQuery('.wc-block-order-confirmation-summary-list-item').each(function() {
    var productName = jQuery(this).find('.wc-block-order-confirmation-summary-list-item__key').text().trim();
    var productPrice = jQuery(this).find('.wc-block-order-confirmation-summary-list-item__value').text().trim();
    
    // Assuming productId is not directly available in the DOM, you may need to extract it from productName or elsewhere
    var productId = ''; // You'll need to update this part based on how the productId is structured in the DOM

    var product = {
      productId: productId,
      productName: productName,
      price: productPrice
    };
    console.log(product); // Log the product information for debugging
    products.push(product);
  });
  return products;
}


jQuery.noConflict();
jQuery(document).ready(function($) {
  // Check if we're on the order received page
  if (window.location.href.includes('/order-received/')) {
    // Extract order ID from the page URL
    var orderId = window.location.href.split('/').pop().split('?')[0];
console.log(orderId);
    // Extract product data from the page
    var products = extractProductDataFromPage();

    // Send purchase data to Firebase
    sendPurchaseData(orderId, products);
  }
});

