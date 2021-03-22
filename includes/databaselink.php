<?php /* Dit is de include voor de database link. */
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
?>