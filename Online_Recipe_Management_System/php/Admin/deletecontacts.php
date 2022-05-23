<?php
require "config.php";

$ID =$_GET['id'];

if(isset($ID)){

    $sql2="DELETE FROM `contacts` WHERE $ID=`ID`";

    if($con->query($sql2)){
        echo 'Deleted Sucsessful';
    }

    else{
        echo "Error :".$con->error;
    }

    header("Location:./admcontact.php");
    exit();

}


