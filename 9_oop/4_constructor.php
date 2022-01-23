<?php
  class A{
    public function __construct(){
      echo "Konstruktor z klasy bazowej A<br>";
    }
  }
  class B{
    public function __construct(){
      echo "Konstruktor z klasy potomnej B<br>";
    }
  }
  $objA = new A();
  $objB = new B();
 ?>
