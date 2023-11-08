<?php

class Book{
    private $title;
    private $author;
    private $isbn;

    const HARD_COVER=1;
    const SOFT_COVER=2;
    // echo "Book Cover type: " . Book::HARD_COVER;


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


}

echo "Total books: " . Book::getCount();
?>
