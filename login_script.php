<?php
require_once ("./functions.php");
require_once ("./connect_db.php");

$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);
//submit-login
if(empty($email) || empty($password)){
    header("Location: ./index.php?content=message&alert=loginform-empty");
} else {
//    The sql quere to search for the email in the database
    $sql = "SELECT * FROM `user` WHERE `email` = '$email'";
    var_dump($sql);
    var_dump($_POST);

    $result = mysqli_query($conn, $sql);
//    Email is unknown
    if(!mysqli_num_rows($result)){
        header("Location: ./index.php?content=message&alert=email-unknown");
    } else {
        $record = mysqli_fetch_assoc($result);

        $_SESSION["email"] = $record["email"];
        $_SESSION["password"] = $record["password"];
        $_SESSION["userrole"] = $record["userrole_id"];

        switch ($record["userrole_id"]){
            case '3':
                header("Location: ./index.php?content=s-home");
                break;
            case '2':
                header("Location: ./index.php?content=w-home");
                break;
            case '1':
                header("Location: ./index.php?content=f-home");
                break;
            case '0':
                header("Location: ./index.php?content=st-home");
                break;
        }
    }

}