<?php
/*
  Utwórz klasę abstrakcyjną o nazwie figura geometryczna
  Zdefiniuj w tej klasie licznik utworzonych figur (static)
  Dodaj w niej konstruktor i destruktor
  Dodaj interfejsy: pole, obwód, rysuj

  Dodaj klasę dziedziczącą po klasie figura geometryczna
  Wywołaj metodę unset, która usunie obiekt

  Zaokrąglenie pola do 2 miejsc po przecinku i danie możliwości wyboru użytkownikowi
*/

  interface calculations{
    public function area():float;
    public function circuit():float;
  }

  abstract class Figure implements calculations{
    private static $countOfFigures=0;
    public static function getNrOfFigures(){
      return self::$countOfFigures;

    }
    public function __construct(){
      self::$countOfFigures++;
      echo "<br>Utworzono nowy obiekt klasy: ".get_class($this)."<br> Ilość obiektów: ".self::$countOfFigures."<br>";
    }
    public function __destruct(){
      self::$countOfFigures--;
      echo "<br><br>Usunięto obiekt klasy: ".get_class($this)."<br> Ilość obiektów: ".self::$countOfFigures."<br>";
    }
}

  class Rectangle extends Figure{
  protected $width, $height;
  public function __construct($width, $height){
    parent::__construct();
    $this->width=$width;
    $this->height=$height;
  }
    public function area():float{
      return $this->width * $this->height;
    }
    public function circuit():float{
      return 2 * $this->width + 2 * $this->height;
    }
  }
  class Circle extends Figure{
    protected $ray;
    public function __construct($ray){
      parent::__construct();
      $this->ray=$ray;
    }
    public function area():float{
      return M_PI*$this->ray*$this->ray;
    }
    public function circuit():float{
      return 2*M_PI*$this->ray;
    }
  }

  $prostokat=new Rectangle(2, 4);
  echo Figure::getNrOfFigures();
  echo "<br>".$prostokat->area();
  echo "<br>".$prostokat->circuit();

  $decimalPlaces=3;
  $kolo=new Circle(3);
  echo "<br>".number_format($kolo->area(), $decimalPlaces)."cm<sup>2</sup><br>";
  echo "<br>".number_format($kolo->circuit(), $decimalPlaces)."cm<br>";
  unset($kolo);
 ?>
