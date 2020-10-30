<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Login</title>
</head>

<body>
	 <?php
	 	$current_page='Login';
        include 'Nav.php';
    ?>
	<body>
	<form action="gest_login.php" method="POST" name="form">
	<label for="email">Email:</label><br>
	<input type="email" id="email" name="email"><br>
	<label for="pwd">Password:</label><br>
	<input type="password" id="pass" name="pass"><br><br>
	<input type="submit" value="Submit">
</body>



</body>
</html>