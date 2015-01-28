<?php

class Offering extends APIResource {
  protected static $objectName = 'offerings';

  public function all() {
    return self::get_all();
  }

  public function create($options) {
    $postFields = array(
      'amount=' . $options['amount'],
      'description=' . $options['description'],
      'max_amount=' . $options['max_amount'],
      'min_amount=' . $options['min_amount'],
      'name=' . $options['name'],
      'entity[city]=' . $options['entity[city]'],
      'entity[country]=' . $options['entity[country]'],
      'entity[email]=' . $options['entity[email]'],
      'entity[executive_name]=' . $options['entity[executive_name]'],
      'entity[name]=' . $options['entity[name]'],
      'entity[phone]=' . $options['entity[phone]'],
      'entity[postal_code]=' . $options['entity[postal_code]'],
      'entity[region]=' . $options['entity[region]'],
      'entity[state_formed_in]=' . $options['entity[state_formed_in]'],
      'entity[street_address_1]=' . $options['entity[street_address_1]'],
      'entity[tax_id_number]=' . $options['entity[tax_id_number]'],
      'entity[type]=' . $options['entity[type]']
    );
    return self::post($postFields);
  }

  public function find($offering_id) {
    return self::get($offering_id);
  }

  public function update($id, $options) {
    $postFields = array();
    if (isset($options['amount']))
      $postFields[] = 'amount=' . $options['amount'];
    if (isset($options['description']))
      $postFields[] = 'description=' . $options['description'];
    if (isset($options['max_amount']))
      $postFields[] = 'max_amount=' . $options['max_amount'];
    if (isset($options['min_amount']))
      $postFields[] = 'min_amount=' . $options['min_amount'];
    if (isset($options['name']))
      $postFields[] = 'name=' . $options['name'];
    return self::patch($id, $postFields);
  }
}

?>
