<!DOCTYPE html>
<html>
<head>
	<title>gestione registrazione</title>
</head>
<body>
<?php  
        $current_page='gest_reg';
        include 'Nav.php';
	echo "<h1>";
        echo "Hello\n";
        echo $_POST['nome']." ".$_POST['cognome']." ";
        echo "your data have been registered.\n";
        echo "</h1>\n";

        $fp=fopen("reg.txt", "a+");
        //echo $_POST['nome'];
        fwrite($fp, htmlspecialchars($_POST['nome'], ENT_QUOTES)."|".htmlspecialchars($_POST['cognome'], ENT_QUOTES)."|".$_POST['mail']."|".password_hash($_POST['pass'], PASSWORD_DEFAULT)."|\n");
        fclose($fp);

        
    
?>
</body>
</html>