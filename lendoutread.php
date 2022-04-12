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
                <td> " . $record["role"] . "</td>
                <td>" . $record["naam"] . "</td>
                <td>" . $record["achternaam"] ."</td/>
                <td>" . $record["studentnummer"] ."</td/>   
                <td>" . $record["mobielnummer"] ."</td/>
                <td>" . $record["leendatum"] ."</td/>
                <td>" . $record["terugdatum"] ."</td/>

                
                <td>
                    <a href='./lendoutinfodelete.php?id=" . $record["id"]  . "'>
                        <img src='img\b_drop.png' alt='cross'>
                    </a>
                </td>
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
    <main class="container">
    <div class="row">
        <div class="col-8">
            <br>
    <a href="/Project-MBOU-Magazijn/index.php?content=lendoutoverview" type="button" class="btn btn-warning badge-pill btn-lg btn-block">Ga terug naar product overview</a>
        </div>
      <div class="col-5">
      <?php include_once("./lendoutproduct.php");?>
      </div>
    </div>
        <div class="row">
        <div class="col-12">
        
        <!-- op deze plek komt de tabel -->
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">product</th>
      <th scope="col">rol</th>
      <th scope="col">naam</th>
      <th scope="col">achternaam</th>
      <th scope="col">studentnummer</th>
      <th scope="col">mobielnummer</th>
      <th scope="col">leendatum</th>
      <th scope="col">terugdatum</th>



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
        <div class="row">
            <div class="col-12">
            <p> 
            </p>
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