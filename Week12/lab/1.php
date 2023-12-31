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
