<?php

class EscrowServiceApplication extends APIResource {
  protected static $objectName = 'escrow_service_applications';
  protected static $postFields;

  public function create($options) {
    $postFields = array(
      'offering_id=' . $options['offering_id'],
      'escrow_agreement_id=' . $options['escrow_agreement_id'],
      'ppm_url=' . $options['ppm_url']
    );
    self::$postFields = join('&', $postFields);
    return self::call();
  }
}

?>
