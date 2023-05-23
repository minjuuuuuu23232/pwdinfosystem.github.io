<?php
    
// kani nga code kay mao ni ang pang connect sa database para mo gana ang system : D 

session_start();

define('SITEURL', 'http://localhost/pwdinfosystem/');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwd_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}

?>