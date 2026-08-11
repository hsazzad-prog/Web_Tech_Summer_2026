<?php
include "../model/db.php";
if (isset($_POST["login"])) {

    $mydb = new mydb();
    $conobj = $mydb->openConn();
    $result = $mydb->checkLogin($conobj, "user", $_POST["uname"]);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hased_password = $row["password"];
        }
        if (password_verify($_POST["password"], $hased_password)) {
            header("Location: ../view/profile.php");
        }


    } else {
        echo "user does not exists";
    }

}


?>