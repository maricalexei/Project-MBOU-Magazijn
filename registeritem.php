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

<body>




    <!-- Modal voor additem -->
    <div class="modal fade" id="additem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voeg een item toe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- hier begint de body van de form waarvan een modul gemaakt is-->
                <div class="modal-body">
                    <!-- form waar email word ingevuld -->
                    <h6>Bent een student of leraar</h6>
                    <form>
                        <input type="radio" id="teacher" name="fav_language" value="teacher">
                        <label for="teacher">Leraar</label><br>
                        <input type="radio" id="student" name="fav_language" value="teacher">
                        <label for="student">Student</label><br>
                    </form>
                    <br>
                    <h6>Uw naam</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Uw naam">
                    </div>
                    <br>
                    <h6>Hoe heet het item wat u wilt toevoegen in het magazijn</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Naam item">
                    </div>
                    <br>
                    <form>
                        <label for="quantity">Hoeveel items wilt u toevoegen:</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="999999">
                    </form>
                    <br>
                    <h6>Wanneer komt het item aan in het magazijn</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="date" class="form-control" id="floatingInput" placeholder="Aankomst in magazijn">
                    </div>
                    <br>
                    <h6>Tot wanneer blijft het item in het magazijn</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="date" class="form-control" id="floatingInput"
                            placeholder="Tot wanneer blijft het in het magazijn">
                    </div>
                    <!-- hier is de footer van de modal waar je de knop namen of functie  registreer en login kunt gebruiken -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit-login">Add item</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- einde modal login en form -->
    </div>
    </div>
    </div>
    <!-- einde modal register -->
    <!-- begin van de container-->
    <div class="container">
        <!-- de additem button -->
        <div class="row">
            <div class="col-md-9 "></div>
            <div class="col-md-2 text-right">
                <button class="btn btn-info badge-pill" data-toggle="modal" data-target="#additem" style="width:90px;">
                    Add item
                </button>
            </div>
        </div>
        <!-- einde container -->






















    </div>
</body>

</html>