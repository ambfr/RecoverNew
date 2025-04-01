<?php
$servername = "dpg-cvlp37h5pdvs73fappd0-a";
$username = "sigunup_user";  // Change if necessary
$password = "XDu8nJTHwBbvn6dmNFCe75tHbctn9uwb";      // Change if necessary
$dbname = "sigunup";  // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

