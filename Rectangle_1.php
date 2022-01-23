<?php
  class Rectangle{
    public float $sideA, $sideB;
    public function __construct($a, $b){
      $this->sideA=$a;
      $this->sideB=$b;
    }
    public function area(){
      return $this->sideA*$this->sideB;
    }
  }
 ?>
