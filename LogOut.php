<?php 
	session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>LogOut</title>
 </head>
 <body>
 	<!--<?php
 		$current_page='logOut';
 		include 'Nav';

 	?>
-->
 	<!--<p>Confermi di volere uscire?</p>
 	<button type="buttom" formaction="Home.php">SI</button>
 	<button type="buttom" formaction="new_page.php">NO</button>
		-->
 	<?php
 		session_unset();
 		session_destroy();
 		setcookie(session_name() , '', time() - 42000);
 		header('Location: Home.php');
 	?>


 </body>
 </html>