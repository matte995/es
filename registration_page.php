<!DOCTYPE html>
<html lang="it">
<head>
    <title>Sign-up</title>
</head>

<body>
    <?php
        $current_page='registration';
        include 'Nav.php';
    ?>
    
    <form  action="gest_registration.php" method="POST" name="form">     
        <label for="fname">Nome:</label><br>
        <input type="text" id="fname" name="nome"><br>
        <label for="lname">Cognome:</label><br>
        <input type="text" id="lname" name="cognome"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="mail"><br>
        <label for="password">Pwd:</label><br>
        <input type="password" id="password" name="pass"><br><br>
        <label for="cpassword">Conferma Pwd:</label><br>
        <input type="password" id="cpassword" name="cpassword"><br><br>
        <input type="submit" value="Submit">
</form>



</body>
</html>