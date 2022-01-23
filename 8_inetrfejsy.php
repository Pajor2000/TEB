<?php
  interface PersonalInterface{
    public function getName():string;
    public function setName($name);
    public function getSurname():string;
    public function setSurname($name);
    public function getAdress():string;
    public function setAdress($name);
  }

  interface UserIneterface{
    public function getLogin():string;
    public function setLogin($login);
  }

  class Person implements PersonalInterface{
    public string $name="", $surname="", $adres="", $login="";
    public function getName():string{
      return $this->name;
    }
    public function setName($name){
      $this->name=$name;
    }


    public function getSurname():string{
      return $this->name;
    }
    public function setSurname($surname){
      $this->surname=$surname;
    }


    public function getAdress():string{
      return $this->name;
    }
    public function setAdress($adres){
      $this->adres=$adres;
    }


    public function getLogin(){
      return $this->login;
    }
    public function setLogin($login){
      $this->login=$login;
    }
  }
  $nowak=new Person();
  $nowak->name="Janusz ";
  echo $nowak->getName();
  $nowak->setLogin('Tajny');
  echo $nowak->getLogin();
 ?>
