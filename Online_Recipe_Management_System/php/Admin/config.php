<?php

$con=new mysqli("localhost","root","","iwt");
if($con->connect_error){
die("Connection failed: " . $con->connect_error);
}

?>