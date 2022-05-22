<?php
require "config.php";

$del =$_GET['addedit'];

if(isset($del)){

    $sql="DELETE FROM 'addedit'";
 

    if($con->query($sql)){
        echo 'Deleted Sucsessful';
    }

    else{
        echo "Error :".$con->error;
    }

    header("Location:main.php");
    exit();

}

?>