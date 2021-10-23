<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title></title>
  </head>
  <body>

<?php

if (isset($_SESSION['error'])) {
  echo "<dic class=\"\red\">".$_SESSION['error'];"</div>";
  unset($_SESSION['error']);
}
   ?>
  </body>
</html>
