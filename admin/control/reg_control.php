
<?php
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




}
?>