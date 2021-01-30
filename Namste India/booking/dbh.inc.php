<?php 

$server = "localhost";
$user = "Prince";
$pass = "Prince@1234";
$database = "namaste_bharat";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>