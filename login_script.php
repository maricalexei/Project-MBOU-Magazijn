<?php
require_once ("./functions.php");
require_once ("./connect_db.php");
require_once ("./login_links.php");

$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);
//submit-login
if(empty($email) || empty($password)){
    header("Location: ./index.php?content=message&alert=loginform-empty");
} else {
//    The sql quere to search for the email in the database
    $sql = "SELECT * FROM `users` WHERE `email` = `$email`";
    $result = mysqli_query($conn, $sql);
//    Email is unknown
    if(!mysqli_num_rows($result)){
        header("Location: ./index.php?content=message&alert=email-unknown");
    } else {
        $record = mysqli_fetch_assoc($result);

        $_SESSION["email"] = $record["email"];
        $_SESSION["password"] = $record["password"];
        $_SESSION["userrole"] = $record["role"];

        switch ($record["role"]){
            case 'super_admin':
                header("Location: ./index.php?content=s-home");
                break;
            case 'warehouse_admin':
                header("Location: ./index.php?content=w-home");
                break;
            case 'financial_admin':
                header("Location: ./index.php?content=f-home");
                break;
            case 'student':
                header("Location: ./index.php?content=st-home");
                break;
        }
    }

}