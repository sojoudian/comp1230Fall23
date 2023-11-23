<?php
// Base class Vehicle
class Vehicle {
    public function startEngine() {
        echo "Vehicle engine started\n";
    }
}

// Subclass Car inheriting from Vehicle
class Car extends Vehicle {
    public function startEngine() {
        echo "Car engine started\n";
    }
}

// Subclass Motorcycle inheriting from Vehicle
class Motorcycle extends Vehicle {
    public function startEngine() {
        echo "Motorcycle engine started\n";
    }
}

// Creating an instance of Car and calling startEngine
$car = new Car();
$car->startEngine(); // Output: Car engine started

// Creating an instance of Motorcycle and calling startEngine
$motorcycle = new Motorcycle();
$motorcycle->startEngine(); // Output: Motorcycle engine started
?>