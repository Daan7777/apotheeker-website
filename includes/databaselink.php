<?php /* Dit is de include voor de database link. */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "apotheek";

/* Connectie aanmaken. */
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
/* Connectie controleren. */
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>