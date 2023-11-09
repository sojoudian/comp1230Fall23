<?php
class Book {
    private $title;    
    private $author;
    private $isbn;

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
}
?>