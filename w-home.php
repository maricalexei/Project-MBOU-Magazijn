
<?php
   define("SERVERNAME", "localhost");
   define("USERNAME", "root");
   define("PASSWORD", "");
   define("DBNAME", "magazijnmboutrecht");
   
   $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
   // names 
       if(isset($_POST['submit'])){
           $name = $_POST['name'];
           $item = $_POST['brand'];
           $amount = $_POST['amount'];
   // sql query
   if(mysqli_query($conn, "INSERT INTO `items` (`id`,`name`, `brand`, `amount`) VALUES (NULL, '$name', '$brand', '$amount')")){
       // if succeeds
       header("Location: ./index.php?content=message&alert=succes");
   
   }else{
       // if failes
           header("Location: ./index.php?content=message&alert=failed");
       }
    }
   


    $sql = "SELECT * FROM `items`";

    $result = mysqli_query($conn, $sql);

    $records = "";

    while ($record = mysqli_fetch_assoc($result)) {
          $records .= "<tr><td>" . $record["id"] . "</td> " .
                                "<td>" . $record["name"] . "</td>" .
                                "<td>" . $record["brand"] . "</td> " .
                                "<td>" . $record["amount"] . "</td> "; 
                               
        // var_dump($record);
    }
  

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

<title>Magazijn MBO Utrecht</title>
  </head>
<body>
<main>
<!--    The first section used for the navigation-->

    <section>
                <?php include("./navigation.php");  ?>
    </section>
<!--    Second section used to include the content-->
    <h1>Warehouse admin page</h1>
    <section class="container">
        <div>
            <div class="col-12 px-0">
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">brand</th>
                            <th scope="col">amount</th>
                            
                          
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
    </section>
</main>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
=======
<!--Homepage for warehouse admin -->

