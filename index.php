<?php

require_once "Book.php";
require_once "Library.php";


$library = new Library();

$a = $library->addAuthor("Robort Kiyosaki");
$a->addBook("Rich Dad Poor Dad",199.99);
$a->addBook("Cashflow Quadrant", 199);

$library->addBooksForAuthor("Jack London", new Book("A Son of the Sun", 125));

$author2= $library->addAuthor("Boilsted");
$author2->addBook("Electronics Made Easy", 655);
$author2->addBook("Luck by chance", 120);

$book = $library->search('Luck by chance');

// $author3= $book->getAuthor();
// echo $author3->getName().PHP_EOL;
// 

$library->print();