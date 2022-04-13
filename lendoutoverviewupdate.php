<?php
// maak contact met de mysqlserver en database
 include ("./connect_db.php");
    
  $id = $_POST["id"];
  $item = $_POST["item"];
  $amount = $_POST["amount"];

  $sql = "UPDATE `additem` 
             SET `item` = '$item',
                 `amount` = '$amount', 
           WHERE `id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./registeritem.php ")
?>