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



       $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>