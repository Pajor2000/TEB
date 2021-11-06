<?php
function childName(){
return 'Franek';

}

print_r(childName());
echo "<br>";
var_dump(childName());
echo "<br>";

$childs = [
  ['id' => '1', 'name' => 'Franek'],
  ['id' => '2', 'name' => 'Jagoda'],
];


$validateChildNames = array_map(function($childs){
return $childs;
}, $childs);


echo"<pre>";
print_r($validateChildNames);
echo"</pre><hr>";

######################################################

$name=function(){
return 'Franek';
};
var_dump($name());
echo "<br><br>";
######################################################

$name=fn() => 'Franek';

var_dump($name());
echo "<br><br>";
######################################################

$multi=fn($a, $b) => $a * $b;

var_dump($multi(4, 5));
echo "<br><br>";
var_dump($multi(4.5, 5));
echo "<br><br>";
######################################################
$fruits = [
  ['name' => 'apple', 'prize' => 6],
  ['name' => 'lemon', 'prize' => 10.5]
];
$sale = array_map(fn($fruit) => $fruit['name'], $fruits);

print_r($sale);
echo "<br><hr>";

######################################################

$name='Franek';

$text=function($name){
return "Imię: ".$name;
};

var_dump($text($name));
echo "<br><br>";
######################################################

$name='agnieszka';
$split=str_split($name);

  $result=array_map(function($char){
    return ['char' => $char];
  }

  ,array_unique($split));

  echo"<pre>";
  print_r($result);
  echo"</pre>";
  echo"<br>";
######################################################

$name='agnieszka';
$split=str_split($name);

  $result=array_map(fn($char, $count) =>[

      'char' => $char,
      'occurs' => $count
    ]


  ,array_unique($split), array_count_values($split));

  echo"<pre>";
  print_r($result);
  echo"</pre>";
  echo"<br>";
######################################################

//$user=null;
$user = ['name' => 'Franek'];

$result = function() use ($user){
if (!$user) {
  return 'Brak Danych!';
}

return 'Witaj '.$user['name'];

};
print_r($result());
echo '<br><br>';
######################################################

//$user=null;
$user = ' ';
$user = trim($user);

$result = fn() => ($user ? $user['name'] : 'brak danych');

print_r($result());


 ?>
