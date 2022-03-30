<!DOCTYPE html>
<html lang="en">

<head>
  <!-- benodigde links voor de form modul-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <!-- einde van de links-->
</head>
<?php include_once("./functions.php"); ?>
<body>

  <?php
  define("SERVERNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DBNAME", "magazijnmboutrecht");

  $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

  if(isset($_POST["submit-login"])){
  $email = sanitize($_POST["email"]);
  $password = sanitize($_POST["password"]);

  $sql = "SELECT * FROM `user` WHERE `email` = '$email'";

  $result = mysqli_query($conn, $sql);
  }
?>




  <!-- Modal voor login -->
  <form action="" method="POST">
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Log hier in met uw account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- hier begint de body van de form waarvan een modul gemaakt is-->
          <div class="modal-body">
            <br>
            <!-- form waar email word ingevuld -->
            <div class="form-floating mb-3 sm-12">
              <input name="email" type="email" class="form-control" id="floatingInput"
                placeholder="Vul hier uw email in">
            </div>
            <!-- einde email form-->
            <br>
            <!-- form waar wachtwoord word ingevuld -->
            <div class="form-floating mb-3 sm-12">
              <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Vul hier uw wachtwoord in">
              <br>
              <label style="10px" for="floatingPassword">Deel uw wachtwoord niet met anderen!
                <br>
                <img src="img/mbologo.png">
            </div>
            <!-- einde wachtwoord form-->
          </div>
          <br>
          <br>
          <br>
          <!-- hier is de footer van de modal waar je de knop namen of functie  registreer en login kunt gebruiken -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="submit-login">Login</button>
          </div>
        </div>
      </div>
    </div>
    <!-- einde modal login en form -->
    <!-- begin modal register -->
    <div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registreer hier !</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- hier begint de body van de form waarvan een modul gemaakt is-->
          <div class="modal-body">
            <br>
            <!-- form waar email word ingevuld -->
            <div class="form-floating mb-3 sm-12">
              <input type="email" class="form-control" id="floatingInput" placeholder="Vul hier uw email in">
              <br>
            </div>
            <img src="img/mbologo.png">
            <!-- einde email form-->
            <br>

          </div>
          <br>
          <br>
          <br>
          <!-- hier is de footer van de modal waar je de knop namen of functie  registreer en login kunt gebruiken -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-info" name="submit-register">Registreer</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- einde modal register -->
  <!-- begin van de container-->
  <div class="container">
    <!-- de login button -->
    <div class="row">
      <div class="col-md-9 "></div>
      <div class="col-md-2 text-right">
        <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#login" style="width:90px;"> Login
        </button>
      </div>
      <!-- register button -->
      <div class="col-md-1 text-right">
        <a href="register.php"> <button class="btn btn-primary badge-pill" data-toggle="" data-target="#Register"  style="width:90px;">
          Register </button></a> 
      </div>
      <!-- einde register button -->
      <!-- einde login button-->
    </div>
    <!-- einde container -->






















  </div>
</body>

</html>