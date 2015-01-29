<?php

abstract class APIResource
{
  private function call($curlopts = null) {
    if (!isset(static::$objectName)) {
      throw new Exception('No object name provided.');
    }

    $ch = curl_init();
    $url = FundAmerica::apiURL() . static::$objectName;
    $user = FundAmerica::apiKey() . ':';

    if (isset($curlopts['id'])) {
      $url = $url . '/' . $curlopts['id'];
      unset($curlopts['id']);
    }

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERPWD, $user);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if (isset($curlopts)) {
      foreach ($curlopts as $key => $value) {
        curl_setopt($ch, $key, $value);
      }
    }

    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
  }

  public function delete($id) {
    $curlopts = array(
      'id' => $id,
      CURLOPT_CUSTOMREQUEST => 'DELETE',
    );

    return self::call($curlopts);
  }

  public function find($id) {
    $curlopts = array(
      'id' => $id
    );
    return self::call($curlopts);
  }

  public function all() {
    return self::call();
  }

  protected function post($postFields) {
    if (is_array($postFields)) {
      $postFields = join('&', $postFields);
    }

    $curlopts = array(
      CURLOPT_POST => 1,
      CURLOPT_POSTFIELDS => $postFields
    );

    return self::call($curlopts);
  }

  protected function patch($id, $postFields) {
    if (is_array($postFields)) {
      $postFields = join('&', $postFields);
    }

    $curlopts = array(
      'id' => $id,
      CURLOPT_CUSTOMREQUEST => 'PATCH',
      CURLOPT_POSTFIELDS => $postFields
    );

    return self::call($curlopts);
  }

  protected function formatPostFields($allowedFields, $options) {
    $postFields = array();
    foreach ($allowedFields as $value) {
      if (isset($options[$value]))
        $postFields[] = $value . '=' . $options[$value];
    }
    return $postFields;
  }
}

?>
