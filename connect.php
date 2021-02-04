<?php 
    include("includes/databaselink.php");

    
       $Firstname = $_POST['firstname'];
       $Lastname = $_POST['lastname'];
       $Country = $_POST['country'];
       $Subject = $_POST['subject'];

       if(empty($Firstname) || empty($Lastname) || empty($Country) || empty($Subject))
       {
           header('location:inschrijven.php?error');
       }
       else
       {}
    // Hier komt de code om de data uit de formulier naar de database te sturen
    $sql = "INSERT INTO `user` (`id`, `firstname`, `lastname`, `country`, `subject`) VALUES (NULL, '$Firstname', '$Lastname', '$Country', '$Subject') ";
    $result = $conn->query($sql);{

        header('location:inschrijven.php?Hetisgelukt');
    
 
    
       }

?>