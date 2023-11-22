<?php
// Modified Vehicle class with constructor
class Vehicle {
    public $vehicleType;

    public function __construct($vehicleType) {
        $this->vehicleType = $vehicleType;
        echo "Vehicle of type $this->vehicleType created\n";
    }
}

// Subclass Car with its own constructor
class Car extends Vehicle {
    public function __construct() {
        parent::__construct("Car");
        // Additional initialization specific to Car
        echo "Car-specific initialization\n";
    }
}

// Subclass Motorcycle with its own constructor
class Motorcycle extends Vehicle {
    public function __construct() {
        parent::__construct("Motorcycle");
        // Additional initialization specific to Motorcycle
        echo "Motorcycle-specific initialization\n";
    }
}

// Creating an instance of Car
$car = new Car(); 
// Output:
// Vehicle of type Car created
// Car-specific initialization

// Creating an instance of Motorcycle
$motorcycle = new Motorcycle();
// Output:
// Vehicle of type Motorcycle created
// Motorcycle-specific initialization
?>
