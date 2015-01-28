<?php

class ACHToken extends APIResource {
  protected static $objectName = 'ach_tokens';
  protected static $postFields;

  public function create($entityId) {
    self::$postFields = 'entity_id=' . $entityId;
    return self::call();
  }
}

?>
