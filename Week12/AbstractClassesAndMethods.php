<?php
    abstract class User {
    abstract public function login();
    abstract public function register();
    
    public function resetPassword() {
    // Common method for all types of users
    }
}

class Admin extends User {
    public function login(){
        // Login logic for admin
        }
        public function register(){
        // Registration logic for admin
        }
}

class Customer extends User {
    public function login() {
        // Login logic for customer
    }
    public function register(){
        // Registration logic for customer
    }
    
}

?>