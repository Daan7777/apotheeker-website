<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/commonstyle.css">
</head>
<body> 
    <?php
Include ("includes/menu.php");
    ?>
     <br>
   <div class="mid"> 
         </div>
    <div class="border1">
        <?php

include("includes/databaselink.php");
        $sql = "SELECT * FROM `voorlichting`  ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "". $row["information"]. "<br>";
                
            }
        } else {
            echo "BIG FAT error";
        }

        {
            $conn -> close();
            }

    ?>
    </div>
    </body>
    </html>