<?php

  

  include("./connect_db.php");
  include("./functions.php");

  // var_dump($_POST);exit();

 
  $id = sanitize($_POST["id"]);
  $pwh = sanitize($_POST["pwh"]);
  $password = sanitize($_POST["password"]);
  $passwordCheck = sanitize($_POST["passwordCheck"]);
  $name = sanitize($_POST["name"]);
  $mobile = sanitize($_POST["mobile"]);
  


  

  
  if (empty($_POST["password"]) || empty($_POST["passwordCheck"])) {
    header("Location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
  } elseif (strcmp($password, $passwordCheck)) {
    header("Location: ./index.php?content=message&alert=nomatch-password&id=$id&pwh=$pwh");
  } else {
    $sql = "SELECT * FROM `register` WHERE `id` = $id";
    
    $result = mysqli_query($conn, $sql);

    if  (mysqli_num_rows($result)) {

      $record = mysqli_fetch_assoc($result);
      if ($record["activated"]) {
        header("Location: ./index.php?content=message&alert=already-active");
      } else {

        if ( !strcmp($record["password"], $pwh)) {
          // maak een passwordhash voor het niewe gekozen wachtwoord 
          $password_hash = password_hash($password, PASSWORD_BCRYPT);
          // ga het record updaten met het nieuw gekozen gehasht wachtwoord 
             $sql = "UPDATE `register` 
                     SET    `password` = '$password_hash',
                            `activated`= 1
                     WHERE  `id` = $id
                     AND    `password` = '$pwh'";
                    
            if (mysqli_query($conn, $sql)) {
              // succes
              header("Location: ./index.php?content=message&alert=update-success");
            } else {
              // error
              header("Location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
            }

        } else {
   
          header("Location: ./index.php?content=message&alert=no-match-pwh");
        }

        
      }
      
      

     // GEEF DE GEBRUIKER FEEEDBACK MET EEN ALERT DAt het updaten is gelukt of niet en stuur dan door naar een andere pagina
    
    } else {
      // foutmeldin
      header("Location: ./index.php?content=message&alert=no-id-pwh-match");
    }
  }
?>
