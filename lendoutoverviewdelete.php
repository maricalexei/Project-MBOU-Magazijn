<?php
    // maak contact met de mysql-server 
    include("connect_db.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM `additem` WHERE `id` = $id";

    mysqli_query($conn, $sql);

    header("Location: ./index.php?content=lendoutoverview");
?>