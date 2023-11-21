<?php
class PaymentProcessor {
    // Final method cannot be overridden by subclasses
    final public function processPayment($amount) {
        // Payment processing logic
        echo "Processing payment of $" . $amount . "\n";
        echo '<br>';
    }
}

class CustomPaymentProcessor extends PaymentProcessor {
    // Additional functionality specific to CustomPaymentProcessor
    public function additionalFunction() {
        echo "Additional functionality for custom payment processing.\n";
        echo '<br>';
    }

    // processPayment cannot be overridden due to being final in the parent class
}

// Usage example
$processor = new CustomPaymentProcessor();
$processor->processPayment(100); // Calls the inherited final method
$processor->additionalFunction(); // Calls the method specific to CustomPaymentProcessor
?>
