<?php
class Content { 
    protected $title; protected $body;
    public function save() {
    // Save content to database
    }
    
    public function display(){
        // Display content
    }
}
class Article extends Content {
    private $author;

    public function setAuthor($author) {
    $this->author = $author; }
    // Additional methods specific to Article
}
?>