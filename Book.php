<?php
// include "Author.php";
class Book{

    public $title;
    public $price;
    public ?Author $author;

    /**
     * Book Constructor
     * 
     * @param string $title
     * @param float $price
     * @param string $author
     */
    public function __construct($title, $price, \Author $author= null) {

        $this->title= $title;
        $this->price= $price;
        $this->author= $author;
    }

    /**
     * @return string  
     */
    public function getTitle(){
        return $this->title;
    }
     /**
     * @param string  $title 
     */
    public function setTitle($title ){
      $this->title= $title;
    }

    /**
     * @return string  
     */
    public function getPrice(){
        return $this->price;
    }
     /**
     * @param string  $title 
     */
    public function setPrice($price ){
      $this->price= $price;
    }

     /**
     * @return string  
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }
     /**
     * @param string  $title 
     */
    public function setAuthor(Author $author){
      $this->author= $author;
    }
}

// $b = new Book("The Golden Blue", 499, "Resmos");

