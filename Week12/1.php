<?php
abstract class User {
    abstract public function login();
    abstract public function register();

    public function resetPassword() {
        echo "Password reset process initiated.\n";
        echo '<br>';
    }
}

class Admin extends User {
    public function login() {
        echo "Admin logged in.\n";
        echo '<br>';
    }
    
    public function register() {
        echo "Admin registration process.\n";
        echo '<br>';
    }
}

class Customer extends User {
    public function login() {
        echo "Customer logged in.\n";
        echo '<br>';
    }
    
    public function register() {
        echo "Customer registration process.\n";
        echo '<br>';
    }
}

// Creating instances and demonstrating methods
// Admin example
$admin = new Admin();
$admin->login();          // Output: Admin logged in.
$admin->register();       // Output: Admin registration process.
$admin->resetPassword();  // Output: Password reset process initiated.

// Customer example
$customer = new Customer();
$customer->login();          // Output: Customer logged in.
$customer->register();       // Output: Customer registration process.
$customer->resetPassword();  // Output: Password reset process initiated.
?>
