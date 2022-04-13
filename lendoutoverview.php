<?php
include("./connect_db.php");





$sql = ("SELECT * FROM `lendoutinfo`");

// dit is de functie die de quary $sql via de verbinding $conn naar de database stuurt. 
$result =mysqli_query($conn, $sql);

$records = "";
// de while loop geeft alle gegevens weer uit de tabel users.
while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr>
                <th scope='row'>" . $record["id"] . "</th>
                <td>" . $record["product"] ."</td/>   
               </tr>"; }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
<br>
<div class="row">
  <div class="col-3">
      <a class="btn btn-warning badge-pill" href="/index.php?content=lendoutread" style="width:400px;">Uigeleende producten bekijken / Producten uitlenen</a>
  </div>
</div>
<br>

    <main class="container">
        <!-- op deze plek komt de tabel -->
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Producten</th>
    </tr>
  </thead>
  <tbody>
  <?php
    echo $records; 
    ?>
    </tbody>
    </table>
        </div>
        </div>
        </main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
  </body>
</html>