<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "website_login_register_kalp";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>