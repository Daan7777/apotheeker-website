<?php /* Dit is de include voor de medicijnen op de medicijnen pagina. */
$sql = "SELECT * FROM `medicines` ORDER BY `medicines`.`medicinename` ASC ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
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