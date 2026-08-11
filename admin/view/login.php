<?php
include "../control/login_control.php";
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
Login Page
<form action="" method="post" >
    <label for="username">Username:</label>
    <input type="text" id="username" name="uname" >
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" ><br><br>
    <input type="submit" name="login" value="Login">
</form>
</body>
</html>