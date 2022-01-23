<?php
  class Animal{
    public $publiczna="publiczna ";
    public $weight, $age, $look, $breath;
    public function __construct($weight){
      echo "";
    }
    public function showData(){
      return "Waga: ".$this->weight."<br>";
    }
  }

  $ob=new Animal(40);
  echo $ob->publiczna;
 ?>
