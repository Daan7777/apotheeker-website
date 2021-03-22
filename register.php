<?php
    include("includes/databaselink.php");
    /* Als formulier verzonden. */
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
    /* Controleer wachtwoord. */
    if ($gebruikers[$_POST['username']] == $_POST['password']) {
        $cookie['username'] = $_POST['username'];
        $cookie['password'] = $_POST['password'];
        /* Zet cookie. */
        setcookie('login', serialize($cookie), time() + 60*60*24*7*2, '/');
        /* Login is gelukt. */
        $login_correct = TRUE;
    }
    /* Wachtwoord niet correct. */
    else {
        $login_error = TRUE;
    }
    }
?> 
<!DOCTYPE HTML> <!-- Dit is allemaal voor het register. -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Login</title>
</head>
    <body>
        <?php  
            if ($login_correct === TRUE) {   
        ?>
        <h1>Login gelukt!</h1>
        <p>Welkom in het beveiligde gedeelte van deze website!</p>
        <?php } else { ?>
        <h1>Login</h1>
        <p>Vul gebruikersnaam en wachtwoord in om toegang te krijgen tot het beveiligde gedeelte van deze website</p>
        <?php
        if ($login_error === TRUE) {
            echo '<p class="error">De gebruikersnaam/wachtwoord combinatie bestaat niet.</p>';
        }
        ?>
        <form method="post">
        <table>
            <tr><td>Gebruikersnaam:</td><td><input type="text" name="username"></td></tr>
            <tr><td>Wachtwoord:</td><td><input type="password" name="password"></td></tr>
            <tr><td></td><td><input type="submit" value="Login"></td></tr>
        </table>
        </form>
        <?php } ?>
    </body>
</html> 