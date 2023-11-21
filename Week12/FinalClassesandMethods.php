<?php
class PaymentProcessor {
    final public function processPayment($amount){
        // Payment processing logic
    }
}
class CustomPaymentProcessor extends PaymentProcessor {
    // Cannot override processPayment
    }
    
?>