<?php

class EscrowServiceApplication extends APIResource {
  protected static $objectName = 'escrow_service_applications';

  public function create($options) {
    $allowedFields = array(
      'offering_id',
      'escrow_agreement_id',
      'ppm_url'
    );
    $postFields = self::formatPostFields($allowedFields, $options);
    return self::post($postFields);
  }

  public function delete() {
    throw new InvalidDeleteException();
  }
}

?>
