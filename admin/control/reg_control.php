
<?php

include "../model/db.php";
//password_hash($password,PASSWORD_DEFAULT)
    $unameError="";
    $emailError="";
    $uname="";
    $hasError="";
if(isset($_REQUEST["mysubmit"])){

if(empty($_REQUEST["uname"]))
    {
        $unameError= "username must not be empty";
        $hasError="1";
    }
 
echo "<br>";
if( empty($_REQUEST["email"]))
    {
 $emailError="email must not be empty";
 $hasError="1";   
 }

echo $_FILES["myfile"]["name"];
echo $_FILES["myfile"]["size"];

if(move_uploaded_file($_FILES["myfile"]["tmp_name"],
"../uploads/".$_FILES["myfile"]["name"]))
{
    echo "uploaded";
}
else
    {
        echo "cant upload file";
        $hasError ="1";
    }

if($hasError=="")
    {
        $db= new mydb();
        $conobj=$db->openConn();
        $results=$db->insertData("user",$_REQUEST["uname"],$_REQUEST["email"],
    password_hash($_REQUEST["password"],PASSWORD_DEFAULT),"../uploads/".$_FILES["myfile"]["name"],$conobj);
if($results)
    {
        header("Location: ../view/submit.php");
    }
    else{
        echo $conobj->error;
    }

    }




}
?>