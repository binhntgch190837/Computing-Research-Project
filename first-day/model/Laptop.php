<?php 
class Laptop {
   //attributes
   public $name;
   public $brand;
   public $price;
   public $color;
   public $year;

   //constructor
   public function __construct ($name, $brand, $price, $color, $year) {
      $this->name = $name;
      $this->brand = $brand;
      $this->price = $price;
      $this->color = $color;
      $this->year = $year;
   }
}
?>