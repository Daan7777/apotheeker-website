<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/commonstyle.css">
</head>
<body> 
<img class="logo" src="pictures/banner.jpg">
    <div class="menu">    <h2>menu</h2> </div> 
        <div class="nav">
        <a href="index.php">Home</a>
        <a href="voorlichting.php">Voorlichting</a>
        <a href="inlogscherm.php">Account</a>
        <a href="service.php">Service</a>
    </div> <br>
        
    <div class="mid">
        </div>
    <div class="border2">
    </body>
        <?php

include("includes/databaselink.php");
        $sql = "SELECT * FROM `medicines` ORDER BY `medicines`.`medicinename` ASC ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br> > ". $row["medicinename"]. "<br>";
                
            }
        } else {
            echo "BIG FAT error";
        }

        {
            $conn -> close();
            }

    ?>
    </div>
