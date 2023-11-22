<?php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow\n";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Bark

$cat = new Cat();
$cat->makeSound(); // Output: Meow

class Logger {
    final public function writeLog($message) {
        echo "Log: $message\n";
    }
}

class FileLogger extends Logger {
    // Trying to override writeLog will result in an error
}

$fileLogger = new FileLogger();
$fileLogger->writeLog("This is a test log."); // Output: Log: This is a test log.

