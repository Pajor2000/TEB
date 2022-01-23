<?php
class User {
  //właściwości
  public $name, $surname;
  public int $age;
  //metody
  public function showName(){
    echo "Imię: ".$this->name;
  }
  public function showData(){
    return "test";
  }
}
  $nowak = new User();
  $nowak->name="Janusz ";
  $nowak->surname="Nowak";
  //print_r($nowak);
  echo $nowak->name;
  echo $nowak->surname;
  echo "<br>";
  $nowak->age=20;
  $nowak->showName();
  echo $nowak->showData();

 ?>
