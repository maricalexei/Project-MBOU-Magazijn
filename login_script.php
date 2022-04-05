<?php
require_once ("./functions.php");
require_once ("./connect_db.php");

//Cleaning up the variables so no html injections can occur
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
//            Case for super user
            case '3':
                header("Location: ./index.php?content=s-home");
                break;
//                Case for warehouse admin;
            case '2':
                header("Location: ./index.php?content=w-home");
                break;
//                Case for financial admin
            case '1':
                header("Location: ./index.php?content=f-home");
                break;
//                Case for student
            case '0':
                header("Location: ./index.php?content=st-home");
                break;
        }
    }

}