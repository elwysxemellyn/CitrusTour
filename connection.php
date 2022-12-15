<!-- <?php



$databaseHost = 'localhost';

$databaseName = 'crud';

$databaseUsername = 'root';

$databasePassword = '';



$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?> -->

<?php
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "";
// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// mysqli_close($mysqli);
?>