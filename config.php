<?php 
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "ecole_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connexion Echouée: " . mysqli_connect_error());
}
?>