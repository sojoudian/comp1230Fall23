<?php
class Book {
    private $title;    
    private $author;
    private $isbn;
    
    public function __construct($title, $author, $isbn){
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