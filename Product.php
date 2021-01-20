<?php


class Product {

    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    public function __construct($id, $title, $price, $availableQuantity){
        $this->id= $id;
        $this->title= $title;
        $this->price= $price;
        $this->availableQuantity= $availableQuantity;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getAvailableQuantity(){
        return $this->availableQuantity;
    }

    public function setAvailableQuantity($availableQuantity){
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * Add product $product into cart. If product already exists 
     * it must update the quantity
     * 
     * 
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     * @throws Exception
     */
    public function addToCart(Cart $cart, int $quantity){

        return $cart->addProduct($this, $quantity);
    }

    /**
     * Remove Product form cart
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart){
        
        return $cart->removeProduct($this);
    }
}