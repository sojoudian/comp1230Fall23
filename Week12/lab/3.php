<?php
    interface Chargeable {
        public function chargeBattery();
}

class ElectricCar implements Chargeable {
    public function chargeBattery() {
        echo "Charging car battery\n";
    }
}

class Smartphone implements Chargeable {
    public function chargeBattery() {
        echo "Charging smartphone battery\n";
    }
}

$car = new ElectricCar();
$car->chargeBattery(); // Output: Charging car battery

$phone = new Smartphone();
$phone->chargeBattery(); // Output: Charging smartphone battery
?>