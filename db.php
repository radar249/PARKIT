<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mail";

$conn = mysqli_connect($servername, $username, $password, $database);


if ($conn) {
     echo "";
 }

 else{die("Connection failed: ".mysqli_connect_error());
} 
?>