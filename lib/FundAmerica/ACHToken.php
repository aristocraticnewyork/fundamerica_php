<?php

class ACHToken extends APIResource {
  protected static $objectName = 'ach_tokens';

  public function all() {
    throw new InvalidAllException();
  }

  public function create($entityId) {
    $postFields = 'entity_id=' . $entityId;
    return self::post($postFields);
  }

  public function delete() {
    throw new InvalidDeleteException();
  }

  public function find() {
    throw new InvalidFindException();
  }
}

?>
