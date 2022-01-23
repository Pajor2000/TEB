<?php
  class Person{
    public $publiczna="publiczna ";
    protected $chroniona="chroniona ";
    private $prywatna="prywatna";
    public function getChroniona(){
      return $this->chroniona;
    }
    public function getPrywatna(){
      return $this->prywatna;
    }
    public function setChroniona($x){
      $this->chroniona=$x;
    }
    public function setPrywatna($x){
      $this->prywatna=$x;
    }
  }

  class Child extends Person{
    public function pokazChroniona(){
      echo $this->chroniona;
    }
  }

  //sprawdzic czy dziala getter dla prywatnych kladowych
  //dodac setteery do ustawiania dancyh

  $ob=new Person();
  echo $ob->publiczna;
  echo $ob->getChroniona();
  echo $ob->getPrywatna();
  //echo $ob->prywatna; fatal error
  $ob->setChroniona(" CHRONIONA");
  echo $ob->getChroniona();

  $ob->setPrywatna(" PRYWATNA");
  echo $ob->getPrywatna();

  $obChild=new Child();
  echo "<hr>Dziedziczenie:<br>";
  echo $obChild->publiczna;
  echo $obChild->pokazChroniona();
 ?>
