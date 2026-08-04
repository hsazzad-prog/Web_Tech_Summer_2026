<?php
include "../control/reg_control.php";
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
Registration Page
<form action="" method="post" onsubmit="return myvalidation()" enctype="multipart/form-data">
    <label for="username">Username:</label>
    <input type="text" id="username" name="uname" ><?php echo $unameError; ?>
    <p id="username-error" ></p><br><br>
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" > <?php echo $emailError; ?><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" ><p id="password-error" ></p><br><br>
    <input type="file" name="myfile"><br>
    <input type="submit" name="mysubmit" value="Register">

</form>
</body>
</html>