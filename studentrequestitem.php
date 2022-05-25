<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "magazijnmboutrecht";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM items ORDER BY id ASC");
        $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
    
    $tableRows = "";
    foreach($stmt->fetchAll() as $key=>$value) {
        $tableRows .= "<tr>
                        <td>$value->id</td>
                        <td>$value->name</td>
                        <td>$value->brand</td>
                        <td>$value->amount</td>
                        <td>
                            <a href='/index.php?content=insertstudentrequestitem.php?id=$value->id'>
                            <i class='bi bi-arrow-up-short'></i>
                        </td>
                        </tr>";
    }

    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        body {
            background-color: rgb(249, 249, 249);
        }
    </style>
    <title>PDO read users</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-14">
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
                echo $tableRows;
                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>