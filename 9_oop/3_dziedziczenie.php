<?php
  class Animal{
    public $name, $age;
    public function __construct($name){
      echo "Konstruktor ANIMAL<br>";
    }
    public function showData(){
      return "Imię i wiek: ".$this->name." ".$this->age."<br>";
    }
  }

  class Snake extends Animal{
    public $venomous="JADOWITY";
    public function __construct(){
      parent::__construct();
      echo "Konstruktor SNAKE<br>";
    }
      public function showData(){
      return "Czy wąż jest jadowity: ".$this->venomous."<br>";
    }
  }

  $pies=new Animal("TEST");
  $pies->name="Fafik ";
  $pies->age=5;
  //$pies->vanomous=false;
  echo $pies->showData();

  $waz=new Snake("TEST");
  echo $waz->showData();
 ?>
