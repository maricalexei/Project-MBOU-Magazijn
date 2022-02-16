
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- benodigde links voor de form modul-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- einde van de links-->
</head>
<body>




<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <input type="email" class="form-control" id="floatingInput" placeholder="Vul hier uw email in">
      </div>
      <!-- einde email form-->
      <br>
      <!-- form waar wachtwoord word ingevuld -->
        <div class="form-floating mb-3 sm-12">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Vul hier uw wachtwoord in">
          <br>
          <label style="10px" for="floatingPassword">Deel uw wachtwoord niet met anderen!
      </div>
      <!-- einde wachtwoord form-->
      </div>
      <br>
      <br>
      <br>  
      <!-- hier is de footer van de modal waar je de knop namen of functie  registreer en login kunt gebruiken --> 
      <div class="modal-footer">
      <button type="submit" class="btn btn-success" name="submit-login">Login</button>
        <button type="submit" class="btn btn-info" name="submit-register">Registreer</button>
      </div>
    </div>
  </div>
</div>
<!-- einde modal en form -->
  <div class="container">
<div class="row">
  <div class="col-md-12 text-right">
    <button class="btn btn-info badge-pill" data-toggle="modal" data-target="#login" style="width:90px;"> Login </button>
  </div>
</div>






















</div>
</body>
</html>