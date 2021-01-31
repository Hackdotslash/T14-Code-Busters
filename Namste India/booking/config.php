<?php 

$server = "localhost";
$user = "Prince";
$pass = "Prince@1234";
$database = "login_register";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>