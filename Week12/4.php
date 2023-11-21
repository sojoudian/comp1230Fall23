<?php
class Content {
    protected $title;
    protected $body;

    // Constructor to initialize title and body
    public function __construct($title, $body) {
        $this->title = $title;
        $this->body = $body;
    }

    public function save() {
        // Save content to a database or storage
        echo "Saving content: " . $this->title . "\n";
    }
    
    public function display() {
        // Display content
        echo "Title: " . $this->title . "\n";
        echo "Body: " . $this->body . "\n";
    }
}

class Article extends Content {
    private $author;

    // Constructor to initialize title, body, and author
    public function __construct($title, $body, $author) {
        parent::__construct($title, $body);
        $this->author = $author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function display() {
        // Display article with author information
        parent::display();
        echo "Author: " . $this->author . "\n";
    }

    // Additional methods specific to Article can be added here
}

// Creating instances of Article
$article1 = new Article("Article One", "This is the body of the first article.", "Author One");
$article2 = new Article("Article Two", "This is the body of the second article.", "Author Two");

// Display and save the first article
$article1->display();
$article1->save();

// Display and save the second article
$article2->display();
$article2->save();

// Change author of the first article and display again
$article1->setAuthor("New Author One");
$article1->display();
?>
