<?php
require "config.php";

$ID =$_GET['id'];

if(isset($ID)){

    $sql="DELETE FROM `nutriacc` WHERE $ID=`ID`";
   

    if($con->query($sql)){
        echo 'Deleted Sucsessful';
    }

    else{
        echo "Error :".$con->error;
    }

    header("Location:./admNutri.php");
    exit();

}