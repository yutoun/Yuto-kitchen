<?php
  class Menu{
    protected $name;
    protected $price;
    protected $image;
    protected $amount;
    public function __construct($name, $price, $image){
      $this->name=$name;
      $this->price = $price;
      $this->image = $image;
    }
    public function getName(){
      return $this->name;
    }
    public function getPrice(){
      return $this->price;
    }
    public function getImage(){
      return $this->image;
    }
    public function totalPrice(){
      return $this->amount*$this->price;
    }
    public function setAmount($amount) {
      $this->amount = $amount;
    }
    public function getTotalPrice(){
      return $this->amount*$this->price;
    }

  }


 ?>
