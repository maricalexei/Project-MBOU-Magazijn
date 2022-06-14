<?php
  // Maak contact met de mysql-server
  include("connect_db.php");

  $id = $_GET["id"];

  $sql = "DELETE FROM `items` WHERE `items`.`id` = $id";

  $result = mysqli_query($conn, $sql);

  if ($result)  {
     $success_or_fail = "Het is geweigerd";
  } else {
    $success_or_fail = "het weigering is niet gelukt";
  }

  header("Refresh:3; url=./w-home.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>MBO</title>
  </head>
  <body>
     <div class="alert alert-success" role="alert">
       <?php echo $success_or_fail; ?>
     </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   
  </body>
</html>