<?php
 $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
 $id = (isset($_GET["id"]))? $_GET["id"]: "";
 $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
 $email = (isset($_GET["email"]))? $_GET["email"]: "";



  
  switch($alert) {
    case "no-email" :
      echo '<div class="alert alert-info mt-5 w-50 mx-auto text-center" role="alert">
              U heeft geen e-mailadres ingevuld, probeer het opnieuw...
            </div>';
      header("Refresh: 3; ./index.php?content=register");
    break;
    case "emailexists" :
      echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
              Het door u ingevulde e-mailadres bestaat al, probeer het opnieuw met een ander e-mailadres...
            </div>';
      header("Refresh: 3; ./index.php?content=register");
    break;
    case "register-error" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Er is iets fout gegaan in het registratieproces... Probeer het nogmaals of neem contact op met admin@magazijn.nl
            </div>';
      header("Refresh: 3; ./index.php?content=register");
    break;
    case "credentials-empty" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              U heeft uw naamgegevens of telefoonnummer niet ingevuld... probeer het opnieuw
            </div>';
      header("Refresh: 3; ./index.php?content=activate&email=$email&pwh=$pwh");
    break;
    case "register-success" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              U bent succesvol geregistreerd. U ontvangt een e-mail van ons met daarin een activatielink.
            </div>';
      header("Refresh: 3; ./index.php?content=home");
    break;
    case "hacker-alert" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">U heeft geen rechten op deze pagina</div>';
      header("Refresh: 3; ./index.php?content=home");
    break;
    case "password-empty" :
      echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
              U heeft een van beide wachtwoordvelden niet ingevuld. Probeer het opnieuw
            </div>';
      header("Refresh: 3; ./index.php?content=activate&email=$email&pwh=$pwh");
    break;
    case "nomatch-password" :
      echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
              Uw ingevulde wachtwoorden zijn niet gelijk, probeer het opnieuw...
            </div>';
      header("Refresh: 3; ./index.php?content=activate&email=$email&pwh=$pwh");
    break;
    case "no-id-pwh-match" :
      echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
              U bent niet geregistreerd in de database, u wordt doorgestuurd naar de registratiepagina
            </div>';
      header("Refresh: 3; ./index.php?content=register");
    break;
    
    case "update-error" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Het registratieproces is niet gelukt, kies een nieuw wachtwoord
            </div>';
            header("Refresh: 3; ./index.php?content=activate&email=$email&pwh=$pwh");
    break;
   
    case "no-match-pwh" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Uw activatielinkgegevens zijn niet correct, registreer opnieuw
            </div>';
            header("Refresh: 3; ./index.php?content=register");
    break;
  
    default:
      header("Location: ./index.php?content=home");
    break;
  }


?>