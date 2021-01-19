<?php

abstract class AbstractLibrary{

    protected $authors =[];

    public function addAuthorInstance($author){
        $this->authors[] = $author; 
    }

    public function findAuthor($authorName){
        
        foreach($this->authors as $author){
            if($author->getName() === $authorName){
                return $author;
            }
        }
        return null;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function setAuthors($authors){
        $this->authors = $authors;
    }


    abstract public function addAuthor(string $authorName): ?\Author;
    
    
    abstract public function addBooksForAuthor(string $authorName, Book $book);

    abstract public function search($bookName);

    abstract public function print();

}