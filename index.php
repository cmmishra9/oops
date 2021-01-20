<?php

   error_reporting(E_ALL);

   require_once "Product.php";
   require_once "Cart.php";
   require_once "CartItem.php";

$product1 = new Product(1, "JaiPhone 12", 2500, 100);
$product2 = new Product(2, "M2 SSD", 400, 10);
$product3 = new Product(3, "Samsung Galaxy S20", 3200, 10);

$cart = new Cart();

$cartitem1 = $cart->addProduct($product1, 1);
$cartitem2 = $cart->addProduct($product2, 1);

echo "Number of Items int Cart: :".PHP_EOL;

echo $cart->getTotalQuantity().PHP_EOL; // this must print 2

echo "Total Sum : ".PHP_EOL;

echo $cart->getTotalSum(). PHP_EOL;

$cartitem2->increaseQuantity();
$cartitem2->decreaseQuantity();


$cart->removeProduct($product1);
echo "Number of Items int Cart: :".PHP_EOL;

echo $cart->getTotalQuantity().PHP_EOL; // this must print 2

echo "Total Sum : ".PHP_EOL;

echo $cart->getTotalSum(). PHP_EOL;