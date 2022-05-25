<!DOCTYPE html>
<html lang="en">
<?php
// temp database connection
// include("./connect_db.php");

// names 
    if(isset($_POST['submit'])){
        $role = $_POST['role'];
        $name = $_POST['name'];
        $item = $_POST['item'];
        $amount = $_POST['amount'];
        $arrivaldate = $_POST['arrivaldate'];
        $untilldate = $_POST['untilldate'];
// sql query
if(mysqli_query($conn, "INSERT INTO `additem`   (`id`, `role`, `name`, `item`, `amount`, `arrivaldate`, `untilldate`) VALUES (NULL,   '$role', '$name', '$item', '$amount', '$arrivaldate', '$untilldate')")){
    // if succeeds
    header("Location: ./index.php?content=message&alert=additem-succes");

}else{
    // if failes
        header("Location: ./index.php?content=message&alert=additem-failed");
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
                <!-- role choose -->
                <div class="modal-body">
                    <h6>Bent een student of leraar</h6>
                    <select class="form-select" name="role" aria-label="Default select example">
                        <option value="teacher">teacher</option>
                        <option value="student">student</option>
                    </select>
                    <br>
                    <br>
                    <!-- name input -->
                    <h6>Uw naam</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="text" name="name" class="form-control" placeholder="Uw naam">
                    </div>
                    <br>
                    <!-- item name input -->
                    <h6>Hoe heet het item wat u wilt toevoegen in het magazijn</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="text" class="form-control" name="item" placeholder="Naam item">
                    </div>
                    <br>
                    <!-- amount input -->
                    <form>
                        <label for="quantity">Hoeveel items wilt u toevoegen:</label>
                        <input type="number" name="amount" name="amount" min="1" max="999999">
                    </form>
                    <br>
                    <br>
                    <!-- arrivaldate date chooser -->
                    <h6>Wanneer komt het item aan in het magazijn</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="date" class="form-control" name="arrivaldate" placeholder="Aankomst in magazijn">
                    </div>
                    <br>
                    <!-- how long does the item stay in the warehouse -->
                    <h6>Tot wanneer blijft het item in het magazijn</h6>
                    <div class="form-floating mb-3 sm-12">
                        <input type="date" class="form-control" name="untilldate"
                            placeholder="Tot wanneer blijft het in het magazijn">
                    </div>
                    <div class="modal-footer">
                        <!-- submit button -->
                    <button type="submit" name="submit" class="btn btn-secondary btn-lg btn-block">Add Item</button>
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
                <button class="btn btn-info badge-pill" data-toggle="modal" data-target="#additem" style="width:90px;">
                    Add item
                </button>
            </div>
        </div>
    </div>
</body>

</html>
