<?php
  class Car {
      // code..
      public $brand;
      public $color;

      function getBrand(){
        return $this->brand;
      }
      function getColor(){
        return $this->color;
      }

  }

  $mazda = new Car();
  $bmw = new Car();

  $mazda->brand ='RX-7';
  $bmw->brand = 'BMW-M4';
  $mazda->color ='Merah';
  $bmw->color = 'Hitam';
 
  echo $mazda->getBrand();
  echo $mazda->getColor();
  echo '<br>';
  echo $bmw->getBrand();
  echo $bmw->getColor();
  echo '<br>';
  
 
?>