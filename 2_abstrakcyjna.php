<?php
abstract class Animal{
  public string $name, $class;
  protected string $owner="";
  public function setOwner($owner){
  }
}

  class Wolf extends Animal{
    public float $drapieznik;
    public function showData(){
      return "<br>Nazwa: ".$this->name." Klasa: ".$this->class."<br><br>";
    }
  }

    $wilk=new Wolf();
    $wilk->name="Wilk, ";
    $wilk->class="Zwierze, ";
    echo $wilk->name;
    echo $wilk->class;
    echo $wilk->showData() ;





      class Other extends Animal{
        public float $drapieznik;
        public function showData(){
          return "<br>Nazwa: ".$this->name." Klasa: ".$this->class."<br><br>";
        }
      }

        $wilk=new Other();
        $wilk->name="Inne, ";
        $wilk->class="Zwierze, ";
        echo $wilk->name;
        echo $wilk->class;
        echo $wilk->showData();





          class Fish extends Animal{
            public float $drapieznik;
            public function showData(){
              return "<br>Nazwa: ".$this->name." Klasa: ".$this->class."<br><br>";
            }
          }

            $wilk=new Fish();
            $wilk->name="Ryba, ";
            $wilk->class="Zwierze, ";
            echo $wilk->name;
            echo $wilk->class;
            echo $wilk->showData();



              class GoldFish extends Fish{
                public float $drapieznik;
                public function showData(){
                  return "<br>Nazwa: ".$this->name." Klasa: ".$this->class."<br><br>";
                }
              }

                $wilk=new GoldFish();
                $wilk->name="Złota Rybka, ";
                $wilk->class="Ryba, ";
                echo $wilk->name;
                echo $wilk->class;
                echo $wilk->showData();
 ?>
