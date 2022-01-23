<?php
  abstract class Vehicle{
    public string $brand, $model;
    protected string $ower="";
    public function setOwner($owner){
      $this->owner=$owner;
    }
    public function getOwner(){
      return $this->owner;
  }
}

  // $pojazd = new Vehicle();
  // $pojazd->brand="Fiat";
  // echo $pojazd->brand;
  class Bike extends Vehicle{
    public float $chainLength;
    public function showData(){
      return " Marka: ".$this->brand." Model: ".$this->model." Właściciel: ".$this->owner;
    }
  }

  $rower=new Bike();
  $rower->brand="Romet, ";
  $rower->model="123, ";
  $rower->owner="Kowalski, ";
  echo $rower->brand;
  $rower->chainLength=80;
  echo $rower->chainLength;
  echo $rower->showData();
  echo $rower->getOwner("Janusz");

  echo "<hr>Metody obiektu roweru:<br><ul>";
  foreach (get_class_methods($rower) as $method) {
    echo "<li>$method</li>";
  }
  echo "</ul>";
 ?>
