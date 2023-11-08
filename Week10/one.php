<?php

class Book{
    private $title;
    private $author;
    private $isbn;

    const HARD_COVER=1;
    const SOFT_COVER=2;
    // echo "Book Cover type: " . Book::HARD_COVER;
    // https://github.com/sojoudian/comp1230Fall23


    public function __construct($title, $author, $isbn){
        self::$count++;
        $this-> title = $title;
        $this-> author = $author;
        $this -> isbn = $isbn;

        
    }

    public function getTitle(){
        return $this->$title;
    }
    public function setTitle($title){
        if(is_string($title) && !empty($title)){
            $this->title=$title;
        }
    }

    public static function getCount(){
        return self::$count;
        //echo "Total books: " . Book::getCount();
        //9:15-9:20
        //CTL7

    }
    public function __set($name, $value){
        if(method_exists($this, $name)){
            $this->$method($value)
        }
    }

    public function __get($name){
        if(method_exists($this, $method)){
            return $this->$method();
        }
        return null;
    }

    // use case: outside of the class
    //$book->title = "Harry Potter";
    //echo $book->title;

}

echo "Total books: " . Book::getCount();
?>
