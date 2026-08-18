<?php
include "../model/db.php";
session_start();
if (empty($_SESSION["uname"])) {
    header("Location: ../view/login.php");
}

$db = new mydb();
$conobj = $db->openConn();
$result = $db->findUserByUname("user", $_SESSION["uname"], $conobj);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $uname = $row["username"];
        $email = $row["email"];
        $filename = $row["filename"];
    }
}


?>