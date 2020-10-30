<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>new_page</title>
</head>

<body>
	<?php
		$current_page='new_page';
		include 'Nav.php';
		
		if(!isset($_SESSION["login"])){
			echo "Non hai ancora fatto il Login.";
			header("Location: Login.php");
			//return 0;
			exit();
			
		}
		
		//header("Location: new_page.html");
	?>

	<img src="images.jpg" alt="cocktail in spiaggia"/>

	<!--<?php
 //echo "SID: " . session_id();
?>-->
</body>
</html>