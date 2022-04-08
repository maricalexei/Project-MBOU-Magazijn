<!DOCTYPE html>
<html lang="en">
<?php
// temp database connection
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "magazijnmboutrecht");

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
// names 
    if(isset($_POST['submit'])){
        //echo "Hoi";exit();
        $role = $_POST['role'];
        $naam = $_POST['uitleennaam'];
        $achternaam = $_POST['uitleenachternaam'];
        $studentnummer = $_POST['studentnummer'];
        $mobielnummer = $_POST['telefoonnummer'];
        $leendatum = $_POST['leendatum'];
        $terugdatum = $_POST['terugdatum'];

if (empty($naam)){
    echo '<script> alert("U heeft de naam niet ingevuld"); </script>';
    exit;
}
else if (empty($achternaam)){
    echo '<script> alert("U heeft de achternaam niet ingevuld"); </script>';
    exit;
}
else if (empty($studentnummer)){
    echo '<script> alert("U heeft de studentennummer niet ingevuld"); </script>';
    exit;
}
else if (empty($mobielnummer)){
    echo '<script> alert("U heeft de mobiele nummer niet ingevuld"); </script>';
    exit;
}
else if (empty($leendatum)){
    echo '<script> alert("U heeft niet ingevuld wanneer het word uitgeleend"); </script>';
    exit;
}
else if (empty($terugdatum)){
    echo '<script> alert("U heeft niet ingevuld wanneer het product terug gebracht word"); </script>';
    exit;
}
        
// sql query
$sql = "INSERT INTO `lendoutinfo` (`id`, 
                                   `role`, 
                                   `naam`, 
                                   `achternaam`, 
                                   `studentnummer`, 
                                   `mobielnummer`, 
                                   `leendatum`, 
                                   `terugdatum`) 
                           VALUES (NULL,   
                                   '$role', 
                                   '$naam', 
                                   '$achternaam', 
                                   '$studentnummer', 
                                   '$mobielnummer', 
                                   '$leendatum', 
                                   '$terugdatum')";
// echo $sql;exit();
if(mysqli_query($conn, $sql)){
    // if succeeds
    header("Location: ./index.php?content=message&alert=lendoutinfo-succes");

//}else{
    
    // if failes
        //header("Location: ./index.php?content=message&alert=lendoutinfo-failed");
    }
}
?>
<!-- links -->
<head>
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
</head>

<body>


<!-- form start -->
<form method="POST" action="">
    <div class="modal fade" id="lendoutinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voer hier de gegevens in!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- role choose -->
                <div class="modal-body">
                    <h6>Aan wie word het uitgeleend</h6>
                    <select class="form-select" name="role" aria-label="Default select example">
                        <option value="teacher">Docent</option>
                        <option value="student">Student</option>
                    </select>
                    <br>
                    <br>
                    <!-- name input -->
                    <h6>Naam student/docent</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="text" name="uitleennaam" class="form-control" placeholder="Naam">
                    </div>
                    <h6>Achternaam student/docent</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="text" name="uitleenachternaam" class="form-control" placeholder="Achternaam">
                    </div>
                    <h6>Studenten nummer(voor studenten)</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="text" name="studentnummer" class="form-control" placeholder="voorbeeld: 000000">
                    </div>
                    <!-- item name input -->
                    <h6>Mobiele nummer</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="text" class="form-control" name="telefoonnummer" placeholder="06123456789  ">
                    </div>
                    <!-- arrivaldate date chooser -->
                    <h6>Wanneer word de artikel uitgeleend</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="date" class="form-control" name="leendatum" placeholder="wanneer word het uitgeleend">
                    </div>
                    <br>
                    <!-- how long does the item stay in the warehouse -->
                    <h6>Tot wanneer word het uitgeleend</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="date" class="form-control" name="terugdatum"
                            placeholder="Tot wanneer word het uitgeleend">
                    </div>
                    <div class="modal-footer">
                        <!-- submit button -->
                    <button type="submit" name="submit" class="btn btn-success   btn-lg btn-block">Gegevens opslaan</button>
                    </form>     
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- modal -->
    <div class="container">
        <div class="row">
            <div class="col-md-9 "></div>
            <div class="col-md-2 text-right">
                <button class="btn btn-info badge-pill" data-toggle="modal" data-target="#lendoutinfo" style="width:150px;">
                    Gegevens invoeren
                </button>
            </div>
        </div>
    </div>
</body>

</html>
