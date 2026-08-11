<?php

class mydb{

function openConn(){
    return new mysqli("localhost","root","","WTS");
}

function insertData($table,$uname,$email,$password,$filename,$conn)
{
    $sql="INSERT INTO $table (username, email,password, filename) VALUES
    ('$uname', '$email', '$password','$filename')";
    return $conn->query($sql);
}
function checkLogin($conn, $table, $uname,)
{
    $sql="SELECT * FROM $table WHERE username='$uname'";
    return $conn->query($sql);
}


}




?>