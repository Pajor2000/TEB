<?php
  session_start();
 if (!empty($_POST)) {
   foreach ($_POST as $key => $value) {
     if (empty($value)) {
       $_SESSION ["error"] = "Wypełnij wszystkie pola";
       header('location: ../5_1_function_form.php');
     }
     //echo "$key: ""$value, ";
     // print_r($_POST);
   }
   echo "Wypełniono wszystkie pola";
 }else {
   echo "<script>history.back()</script>";
   $_SESSION['error'] = "Wypełnij formularz";
   header('location: ../5_1_function_form.php');
 }

 ?>
