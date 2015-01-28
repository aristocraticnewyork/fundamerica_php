<?php

class InvalidAllException extends Exception {
  public function __construct($code = 0, Exception $previous = null) {
    $message = 'This object does not allow all.';
    parent::__construct($message, $code, $previous);
  }
}

class InvalidFindException extends Exception {
  public function __construct($code = 0, Exception $previous = null) {
    $message = 'This object does not allow find.';
    parent::__construct($message, $code, $previous);
  }
}
