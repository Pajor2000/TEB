<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Funkcja strzałkowa</title>
  </head>
  <body>

<?php
if (isset($_SESSION)) {

}

 ?>

<h3>Dane użytkownika</h3>

<form action="./scripts/scripts.php" method="post">
  <input type="text" name="name" placeholder="Podaj Imię"><br><br>
  <input type="text" name="surname" placeholder="Podaj Nazwisko"><br><br>
  <input type="date" name="birthday">  Data urodzenia<br><br>
  <input type="submit" name="button" value="Zatwierdź">
</form>

  </body>
</html>
