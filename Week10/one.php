<?php
class Book {
    private $title;    
    private $author;
    private $isbn;

    const HARD_COVER=1;
    const SOFT_COVER=2;
    //echo "Book cover type: " . Book::HARD_COVER;
    //echo "Book cover type: " . Book::SOFT_COVER;

    //ex3
    private static $count =0;
    public static function getCount(){
        return self::$count;
    }

    public function __construct($title, $author, $isbn){
        self::$count++; //ex3
        $this->title=$title;
        $this->author=$author;
        $this->isbn=$isbn;
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
            $this->$property=$value; // Implement validation if necessary
        }
    }
    public function __get($property){
        if(property_exists($this, $property)){
            return $this-> $property;
        }
    }


    
}

echo "Book cover type: " . Book::HARD_COVER;

?>