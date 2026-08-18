<?php
include "../model/db.php";
session_start();
if(!empty($_SESSION["uname"])){
header("Location: ../view/profile.php") ;
}


if (isset($_POST["login"])) {

    $mydb = new mydb();
    $conobj = $mydb->openConn();
    $result = $mydb->checkLogin($conobj, "user", $_POST["uname"]);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hased_password = $row["password"];
        }
        if (password_verify($_POST["password"], $hased_password)) {
$_SESSION["uname"]=$_POST["uname"];
            header("Location: ../view/profile.php");
        }


    } else {
        echo "user does not exists";
    }

}


?>