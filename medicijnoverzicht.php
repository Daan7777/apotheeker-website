<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/commonstyle.css">
</head>
<body> 
<h2>menu</h2>
    <div class="nav">
    <a href="index.php">Home</a>
        <a href="voorlichting.php">Voorlichting</a>
        <a href="inlogscherm.php">Inloggen</a>
        <a href="service.php">Service</a>
    </div>
        </body>
    <div class="mid">
        </h2>
    </div>

    <?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "apotheek";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
        $sql = "SELECT medicineid, medicinename  FROM medicines";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<br> id: ". $row["medicineid"]. " - Name: ". $row["medicinename"]. "<br>";
            }
        } else {
            echo "BIG FAT error";
        }

        {
            $conn -> close();
            }

    ?>