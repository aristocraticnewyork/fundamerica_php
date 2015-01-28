<?php

abstract class APIResource
{
  public function call() {
    if (!isset(static::$objectName)) {
      throw new Exception('No object name provided.');
    }

    $ch = curl_init(FundAmerica::apiURL() . static::$objectName);
    $user = FundAmerica::apiKey() . ':';

    curl_setopt($ch, CURLOPT_USERPWD, $user);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, static::$postFields);

    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
  }

  abstract public function create($opts);
}

?>
