

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODOVEN</title>
    <link rel="stylesheet" href="../Css/admin.css">
    <link rel="stylesheet" href="../Css/recipe.css">
   
</head>
<body>

<nav>

<div id="banner">
    <h1>#FOODOVEN</h1>
</div>

<div id="logbtn">
<a href="#"><button class="log">Logout</button></a>
</div>

</nav>

<div id="verticalnav">

<div id="adminbanner">
    <h2>ADMIN PANNEL</h2>

</div>
<hr>
<ul>
<li class="list"><a href="#">Users</a></li><hr>
<li class="list"><a href="#">Recipes</a></li><hr>
<li class="list"><a href="#">Categories</a></li><hr>
<li class="list"><a href="#">Admins</a></li><hr>
<li class="list"><a href="#">Contacts</a></li><hr>

</ul>

</div>

<form id="recipe" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div id="formdiv">

    <label class="formele">Category :</label><br><br>
    <select name="select" id="selectmenu" >
    <option value="NS" <?php echo ($cat == 'Not Select' ? 'selected':""); ?> >Not Select</option>
     <option value="Vegetarian" <?php echo ($cat == 'Vegetarian' ? 'selected':""); ?> >Vegetarian</option>
     <option value="Desert" <?php echo ($cat == 'Desert' ? 'selected':""); ?>>Desert</option>
     <option value="Chineese" <?php echo ($cat == 'Chineese' ? 'selected':""); ?>>Chineese</option>
     <option value="Indian" <?php echo ($cat == 'Indian' ? 'selected':""); ?>>Indian</option>            
</select>
    <br><br>

    <input type="hidden" name="id" value=<?php echo $ID?> >

    <label class="formele">Title :</label><br><br>
    <input type="text" class="formele"  name="title" required value= "<?php echo $title ?>"><br><br>

    <label class="formele">Main Ingredient</label><br><br>
    <textarea  name="area1" id="mainarea" cols=70 rows=20 required> <?php echo $ing ?> </textarea><br><br>

    <label class="formele">Cooking Time :</label><br><br>
    <input type="text" class="formele" id="title" name="time" required value="<?php echo $time ?>"><br><br>

    <label class="formele">Description :</label><br><br>
    <textarea  name="area2" id="disarea" cols=70 rows=35 required > <?php echo $des ?> </textarea><br><br>

    <img src="<?php echo $url ?>" alt="<?php echo $url ?>"><br><br>
    <input type="file" id="img" name="file" required><br><br>

    <input type="submit" id="submit" name="submit" value="Update">


</div>
</form>

</body>

<?php


if(isset($_POST["submit"])){
    $ID = $_POST["id"];
     $title=$_POST["title"];
    $select=$_POST["select"];
    $area1=$_POST["area1"];
    $time=$_POST["time"];
    $area2=$_POST["area2"];
   
 $fileName = $_FILES['file']['name'];
 $fileTempName = $_FILES['file']['tmp_name'];
 $fileSize = $_FILES['file']['size'];
 $fileError = $_FILES['file']['size'];
 $fileType = $_FILES['file']['type'];


 <?php

require "config.php";
$ID = $_GET["id"];

?> 

<?php
if(isset($_GET["id"])){
    $ID = $_GET["id"];
    $sqls = "SELECT * FROM `recipe` WHERE `id` = $ID";
    $res = $con->query($sqls);
    if($res -> num_rows > 0)
    {   
        $row = $res->fetch_assoc();
        $title = $row['title'];
        $cat = $row['Category'];
        $ing = $row['Ingredient'];
        $time = $row['time'];
        $des = $row['Description'];
        $url = $row['url'];
        $con->close();
        
    }
    
    else{
        header("Location:./admrecipe.php");
    }

    
}
?>
 


    $allowed=array('png','jpg','jpeg');

                $sql1="UPDATE `recipe` SET `title`='$title',`Category`='$select',`Ingredient`='$area1',`time`='$time',`Description`='$area2', WHERE `id` = '$ID' ";

                if($con->query($sql1))
                header("Location:./admrecipe.php");
                

                else
                    echo "Error :". $con->error;

        }

        else {
            echo "Error while uploading your file.";
        }

    }
    else
    echo '<script>  alert("Wrong file type.Please re-enter details and upload again file");</script>';

 }

 else{

 echo "File not available";
 }

}





?>

</html>