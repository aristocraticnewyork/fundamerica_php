<?php

class EscrowAgreement extends APIResource {
  protected static $objectName = 'escrow_agreements';

  public function create($offering_id) {
    $postFields = 'offering_id=' . $offering_id;
    return self::post($postFields);
  }

  public function delete() {
    throw new InvalidDeleteException();
  }
}

?>
