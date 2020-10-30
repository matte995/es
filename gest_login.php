<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>gestione login</title>
</head>
<body>
	<?php
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$fp=file("reg.txt");
	
	foreach ($fp as $key) {
		
		$info=explode("|", $key);

		if($info[2] === $email && password_verify($pass, $info[3])){
			$_SESSION["login"]=1;
			//echo "Accesso valido";
			header("Location: new_page.php");
			exit();
		}
	
	}
	
	
	header("Location: Login.php");
	exit();
	
?>
</body>
</html>