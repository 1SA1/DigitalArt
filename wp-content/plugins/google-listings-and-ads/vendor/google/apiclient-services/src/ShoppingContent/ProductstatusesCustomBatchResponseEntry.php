<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class ProductstatusesCustomBatchResponseEntry extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Model
{
  /**
   * @var string
   */
  public $batchId;
  /**
   * @var Errors
   */
  public $errors;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /**
   * @var string
   */
  public $kind;
  /**
   * @var ProductStatus
   */
  public $productStatus;
  protected $productStatusType = ProductStatus::class;
  protected $productStatusDataType = '';

  /**
   * @param string
   */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /**
   * @return string
   */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /**
   * @param Errors
   */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Errors
   */
  public function getErrors()
  {
    return $this->errors;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param ProductStatus
   */
  public function setProductStatus(ProductStatus $productStatus)
  {
    $this->productStatus = $productStatus;
  }
  /**
   * @return ProductStatus
   */
  public function getProductStatus()
  {
    return $this->productStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductstatusesCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_ProductstatusesCustomBatchResponseEntry');
