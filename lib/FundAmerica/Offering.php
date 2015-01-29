<?php

class Offering extends APIResource {
  protected static $objectName = 'offerings';

  public function create($options) {
    $allowedFields = array(
      'amount',
      'description',
      'max_amount',
      'min_amount',
      'name',
      'entity_id',
      'entity[city]',
      'entity[country]',
      'entity[email]',
      'entity[executive_name]',
      'entity[name]',
      'entity[phone]',
      'entity[postal_code]',
      'entity[region]',
      'entity[state_formed_in]',
      'entity[street_address_1]',
      'entity[tax_id_number]',
      'entity[type]'
    );
    $postFields = self::formatPostFields($allowedFields, $options);

    return self::post($postFields);
  }

  public function update($id, $options) {
    $allowedFields = array(
      'amount',
      'description',
      'max_amount',
      'min_amount',
      'name'
    );
    $postFields = self::formatPostFields($allowedFields, $options);

    return self::patch($id, $postFields);
  }
}

?>
