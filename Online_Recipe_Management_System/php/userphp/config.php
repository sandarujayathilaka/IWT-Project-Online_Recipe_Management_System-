<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="iwt";




$con = new mysqli($servername, $username, $password,$db);



if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}



?>