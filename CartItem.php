<?php

class CartItem{

    private Product $product;
    private int $quantity;

    public function __construct(Product $product, int $quantity) {
       
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

     /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


    public function increaseQuantity($amount=1){
        
        if($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity() ){

            throw new Exception("Product quantity cam not be more than ".$this->getProduct()->getAvailableQuantity());
        }
        $this->quantity += $amount;
    }

    public function decreaseQuantity($amount=1){

        if($this->getQuantity() - $amount < 1){

            Throw new Exception("Product Quantity Cannot be Less than 1");
        }
        $this->quantity -= $amount; 
    }

}