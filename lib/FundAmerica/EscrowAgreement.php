<?php

class EscrowAgreement extends APIResource {
  protected static $objectName = 'escrow_agreements';
  protected static $postFields;

  public function create($offering_id) {
    self::$postFields = 'offering_id=' . $offering_id;
    return self::call();
  }
}

?>
