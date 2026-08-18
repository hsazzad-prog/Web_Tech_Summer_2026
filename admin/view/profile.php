<?php
include "../control/profile_control.php";
?>

<html>

<body>
<h1>Profile: <?php echo $_SESSION["uname"] ?></h1>

Username:<h1><?php echo $uname; ?></h1>
Email:<h3><?php echo $email; ?></h3>
File: <img src="<?php echo $filename; ?>" width="100" height="100">



<a href="../control/logout.php">Logout</a>
</body>

</html>