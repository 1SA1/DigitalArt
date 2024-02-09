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

class GoogleAnalyticsLink extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Model
{
  /**
   * @var AttributionSettings
   */
  public $attributionSettings;
  protected $attributionSettingsType = AttributionSettings::class;
  protected $attributionSettingsDataType = '';
  /**
   * @var string
   */
  public $propertyId;
  /**
   * @var string
   */
  public $propertyName;

  /**
   * @param AttributionSettings
   */
  public function setAttributionSettings(AttributionSettings $attributionSettings)
  {
    $this->attributionSettings = $attributionSettings;
  }
  /**
   * @return AttributionSettings
   */
  public function getAttributionSettings()
  {
    return $this->attributionSettings;
  }
  /**
   * @param string
   */
  public function setPropertyId($propertyId)
  {
    $this->propertyId = $propertyId;
  }
  /**
   * @return string
   */
  public function getPropertyId()
  {
    return $this->propertyId;
  }
  /**
   * @param string
   */
  public function setPropertyName($propertyName)
  {
    $this->propertyName = $propertyName;
  }
  /**
   * @return string
   */
  public function getPropertyName()
  {
    return $this->propertyName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAnalyticsLink::class, 'Google_Service_ShoppingContent_GoogleAnalyticsLink');
