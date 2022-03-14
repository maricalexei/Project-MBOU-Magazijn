<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!--begin van navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <!-- dit is de mbo logo -->
  <a class="navbar-brand" href="#">
      <img src="./img/mbologo.png" alt="" width="100" height="70" class="d-inline-block align-text-top">
    </a>
    <!-- einde mbo logo -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home.php">test</a>
        <a class="nav-link" href="#">test
        </a>
        <a class="nav-link" href="#">test</a>
        <!-- include van loginphp zodat deze in de navbar zit -->
      </div>
      <?php include_once("./login.php");?>
    </div>
    <!-- einde van include loginphp -->
  </div>
</nav>
<!-- einde navigation -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>