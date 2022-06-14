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
                                "<td>" . $record["amount"] . "</td> " .
                                
                   "<td>
                   <a href='./accept.php?id=" . $record["id"] . "'>
                   <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-wrench' viewBox='0 0 16 16'>
                   <path d='M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z'/>
                 </svg>
                   </a>
                 </td> 
                 <td>
                 <a href='./deny.php?id=" . $record["id"] . "'>
                 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                 <path d='M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z'/>
                
               </svg> 
                 </a>
                 </tr>";
  

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
                            <th scope="col">accept</th>
                            <th scope="col">deny</th>
                            
                          
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
