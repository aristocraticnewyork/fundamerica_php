<?php

class ACHToken extends APIResource {
  protected static $objectName = 'ach_tokens';

  public function create($entityId) {
    $postFields = 'entity_id=' . $entityId;
    return self::post($postFields);
  }
}

?>
