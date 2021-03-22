<?php /* Dit is de connect file die de informatie uit form.php doorstuurd naar de database. */
    include("includes/databaselink.php");

        $Firstname = $_POST['firstname'];
        $Lastname = $_POST['lastname'];
        $mail = $_POST['mail'];
        $aanhef = $_POST['aanhef'];
        $Subject = $_POST['subject'];

        if(empty($Firstname) || empty($Lastname) || empty($mail) || empty($aanhef) || empty($Subject))
    {
        header('location:inschrijven.php?error');
    }
        else
    {}
    /* Hier komt de code om de data uit de formulier naar de database te sturen. */
    $sql = "INSERT INTO `user` (`id`, `firstname`, `lastname`, `mail` , `aanhef`, `subject`) VALUES (NULL, '$Firstname', '$Lastname', '$mail', '$aanhef', '$Subject') ";
    $result = $conn->query($sql);{

        header('location:form.php?Hetisgelukt');
    }
?>