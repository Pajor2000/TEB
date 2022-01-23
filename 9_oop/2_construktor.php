<?php
  class Person{
    public $name, $surname, $city;
    public function __construct($name=null, $surname=null, $city=null){
      $this->name=$name;
      $this->surname=$surname;
      $this->city=$city;
    }
    public function __destruct(){
      echo "Obiekt został usunięty!<br>";

    }
    public function showData(){
      return"<br>Imię i nazwisko: ".$this->name." ".$this->surname."<br>Miasto: ".$this->city;
    }
  }

  $nowak=new Person("Krystian");
  echo $nowak->showData();
  $kowal=new Person("Janusz","Kowal");
  echo $kowal->showData();
  $pawlak=new Person("Robert","Pawlak","Poznań");
  echo $pawlak->showData()."<br>";
 ?>
