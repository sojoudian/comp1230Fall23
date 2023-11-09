<?php

class Publisher{
    public $name;
    public $address;

    public function __construct($name, $address){
        $this-> name = $name;
        $this-> address = $address;
    }
}

class Book {
    private $title;    
    private $author;
    private $isbn;

    //for exercise 7
    private $publisher; // this is an object of class Publisher

    const HARD_COVER=1;
    const SOFT_COVER=2;
    //echo "Book cover type: " . Book::HARD_COVER;
    //echo "Book cover type: " . Book::SOFT_COVER;

    //ex3
    private static $count =0;
    public static function getCount(){
        return self::$count;
    }

    public function __construct($title, $author, $isbn, Publisher $publisher){
        self::$count++; //ex3
        $this->title=$title;
        $this->author=$author;
        $this->isbn=$isbn;

        // ex7
        $this->publisher=$publisher;
    }
    //ex7
    public function __clone(){
        // perform a deep copy of the publisher object
        $this->publisher= clone $this->publisher;
    }
    
    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        if(is_string($title) && !empty($title)){
            $this->title=$title;
        }
    }

    //EX5
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property=$value;
        }
    }
    public function __get($property){
        if(property_exists($this, $property)){
            return $this-> $property;
        }
    }

    public function __destruct(){
        echo $this->title . " is being destroyed.\n";
    }    

}

$book = new Book('1984', 'George Orwell', '1234567890');
$cloneBook = clone $book;
unset($book); // this will trigger the destructor for $book


echo "Book cover type: " . Book::HARD_COVER;




//ex7
//Usage example
$publisher = new Publisher('Penguin', '123 Penguin Road, Antarctica');
$bookTwo = new Book('harry potter and the philosophers stone', '
J. K. Rowling', '1234567890');

//Clone the book
$cloneBookTwo = clone $bookTwo;
?>