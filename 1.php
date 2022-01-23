 <!DOCTYPE html>
 <html lang="pl" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Pole prostokąta</title>
   </head>
   <body>
     <h3>Pole prostokąta</h3>
     <form method="post">
       <input type="text" name="a" placeholder="Pole a" ><br><br>
       <input type="text" name="b" placeholder="Pole b"><br><br>
       <input type="submit" name="submit" value="Oblicz pole"><br><br>
     </form>
     <?php
     if (isset($_POST['button'])){
       $error=0;
       foreach ($_POST as $value){
         if ($key == "button"){
           continue;
         }

         if(empty($value)){
           $error==1;
           continue;
         }else {
           $_POST[$key]=preg_replace('/,/','.',$value);
         }
         if(!is_numeric($_POST[$key])){
           $error==2;
         }
         if ($error=1) {
           echo "Nie jest liczbą całkowitą";

         }
         //echo gettype($value);
       }
       if ($error==1) {
         echo "Wypełnij wszystkie pola!";
         exit();
       }
       //echo "???";
       require_once('./class/Rectangle.php');
       $rectangle=new Rectangle();
       echo "Pole prostokąta o bokach:<br>Bok a:".$rectangle->sideA."<br>".
        "Bok b".$rectangle->sideB."<br>"."<br>Pole prostokąta wynosi: "
       $rectangle->area($_POST['a'], $_POST['b'])."cm<sup>2</sup>";
     }
      ?>
   </body>
 </html>
