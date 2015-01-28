<?php

abstract class FundAmerica {
  public static $apiKey;
  public static $apiURL;

  public static function APIKey($apiKey = null) {
    if (isset($apiKey)) {
      self::$apiKey = $apiKey;
    } else {
      return self::$apiKey;
    }
  }

  public static function APIURL($apiURL = null) {
    if (isset($apiURL)) {
      self::$apiURL = $apiURL;
    } else {
      // default API URL
      if (!isset(self::$apiURL)) {
        self::$apiURL = 'https://apps.fundamerica.com';
      }
      return self::$apiURL . '/api/';
    }
  }
}

require(dirname(__FILE__) . '/FundAmerica/APIResource.php');
require(dirname(__FILE__) . '/FundAmerica/ACHToken.php');
require(dirname(__FILE__) . '/FundAmerica/EscrowAgreement.php');
require(dirname(__FILE__) . '/FundAmerica/EscrowServiceApplication.php');
require(dirname(__FILE__) . '/FundAmerica/Offering.php');

?>
