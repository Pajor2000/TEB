<?php
if (!empty($_GET['deleteId'])) {
  require_once './connect.php';
  //$sql = "DELETE FROM `users` WHERE `users`.`'name'='Jan'";
  //$sql = "DELETE FROM `users` WHERE `users`.`'name'=-1";
  $sql = "DELETE FROM `users` WHERE `users`.`user_id` = $_GET[deleteId]";
  $connect->query($sql);
  if ($connect->affected_rows) {
    header("location: ../3_db_select_table_delete.php?countDelete=$connect->affected_rows");
  }else {
    header("location: ../3_db_select_table_delete.php?countDelete=$connect->affected_rows");
  }
  exit();
}
//header('location: ../3_db_select_table_delete.php');
header('location: ../4_db_select_table_delete_insert.php');
?>
