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
}
?>