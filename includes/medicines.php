<?php
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