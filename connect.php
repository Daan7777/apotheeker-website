<?php 
    include("includes/databaselink.php");

    
       $Firstname = $_POST['firstname'];
       $Lastname = $_POST['lastname'];
       $mail = $_POST['mail'];
       $Country = $_POST['country'];
       $Subject = $_POST['subject'];

       if(empty($Firstname) || empty($Lastname) || empty($mail) || empty($Country) || empty($Subject))
       {
           header('location:inschrijven.php?error');
       }
       else
       {}
    // Hier komt de code om de data uit de formulier naar de database te sturen
    $sql = "INSERT INTO `user` (`id`, `firstname`, `lastname`, `mail` , `country`, `subject`) VALUES (NULL, '$Firstname', '$Lastname', '$mail', '$Country', '$Subject') ";
    $result = $conn->query($sql);{

        header('location:inschrijven.php?Hetisgelukt');
    
 
    
       }

?>