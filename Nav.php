<!DOCTYPE html>
<html>
<head>
	<title>Nav</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<nav>
		<ul >
			<?php
				if ($current_page==='Home') {
					echo "<li><a href='registration_page.php'>SignIn</a> </li>
						  <li><a href='Login.php'>LogIn</a> </li>";
				}

				elseif ($current_page==='registration' | $current_page==='gest_reg') {
					echo "<li><a href='Home.php'>Home</a> </li>";
				}

				elseif ($current_page==='Login') {
					echo "<li><a href='Home.php'>Home</a> </li>";
				}

				else if ($current_page==='new_page') {
					echo "<li><a href='LogOut.php'>LogOut</a> </li>
						  <li><a href='#'>Profile</a> </li>";
				}
			?>
			
 		</ul>
	</nav>
</body>
</html>