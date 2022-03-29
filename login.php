<?php
require_once ("./functions.php");
require_once ("./connect_db.php");
require_once ("./login_links.php");
?>
<body>

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
        <button class="btn btn-primary badge-pill" data-toggle="modal" data-target="#Register" style="width:90px;">
          Register </button>
      </div>
      <!-- einde register button -->
      <!-- einde login button-->
    </div>
    <!-- einde container -->
  </div>
</body>

