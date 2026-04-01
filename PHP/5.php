<?php
class Book {
    public $title;
    public $author;

    // Constructor 
    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    // Method to display
    public function displayBookInfo() {
        return "<b>Title:</b> {$this->title} | <b>Author:</b> {$this->author}<br>";
    }
}

// Creating objects
$book1 = new Book("The Alchemist", "Paulo Coelho");
$book2 = new Book("1984", "George Orwell");

// Displaying attributes
echo "<h3>Book Information</h3>";
echo $book1->displayBookInfo();
echo $book2->displayBookInfo();

?>
