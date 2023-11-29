<?php
// 2. Custom Exception Class


class DataValidationException extends Exception {
    private $invalidField;

    public function __construct($message, $field, $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
        $this->invalidField = $field;
    }

    public function getDetailedMessage() {
        return "Error in field '{$this->invalidField}': {$this->getMessage()}";
    }
}
?> 