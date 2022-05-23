<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../html/UserProfileHTML/Login.html');
	exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODOVEN</title>
    <link rel="stylesheet" href="../../css/Admin/admin.css">
    <link rel="stylesheet" href="../../css/Admin/recipe.css">
   
</head>
<body>

<nav>


<div id="logbtn">
<p id="note">Administrator : <?=$_SESSION['name']?></p>
<a href="logout.php"><button class="log">Logout</button></a>
</div>

</nav>

<div id="verticalnav">

<div id="adminbanner">
<img id="logo" src="../../images/adminlogo.png">
</div>

<ul>
<li class="list"><a href="./dashboard.php"><img id="img1" src="../../images/12.png"> Dashboard</a></li>                             
     <li class="list"><a href="./admUser.php"><img id="img1" src="../../images/user.png"> Users</a></li>
     <li class="list"><a href="./admrecipe.php"><img id="img1" src="../../images/recipe.png"> Categories</a></li>
     <li class="list"><a href="./admNutri.php"><img id="img1" src="../../images/medi1.png"> Nutritionists</a></li>
     <li class="list"><a href="./admOfficer.php"><img id="img1" src="../../images/officer.png"> Ad Officers</a></li>
     <li class="list"><a href="./admcontact.php"><img id="img1" src="../../images/contact.png"> Contacts</a></li>
     <li class="list"><a href="./adminAcc.php"><img id="img1" src="../../images/admin.png"> Administrators</a></li>

</ul>

</div>

<form id="recipe" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div id="formdiv">

    <?php

require "config.php";

$sql= "SELECT ID,UserName FROM adminacc";
$result=$con->query($sql);

echo ("<label class='formele'>"."User Name :"."</label>"."<br>"."<br>");
echo("<select name='select1' id='selectmenu'>");

if($result->num_rows>0){

   while($row=$result->fetch_assoc()){

   echo("<option value=".$row['UserName'].">".$row['UserName']."</option>");
 
   }


}

echo("</select>");


?>

<br><br><label class="formele">Category Name :</label><br><br>
    <input type="text" class="formele" id="title" name="title" required><br><br>

    <input type="submit" id="submit" name="submit" value="submit">

</div>
</form>

</body>

<?php

require "config.php";

if(isset($_POST["submit"])){

    $title=$_POST["title"];
    $select=$_POST["select1"];
   
     $sql= "INSERT INTO recipe(UserName,Category) VALUES('$select','$title')"; 

                if($con->query($sql))
                echo '<script>  alert("Category Name is inserted.");</script>';

                else
                    echo "Error :". $con->error;

                header("Location:./admrecipe.php");
                exit();    

        }

        else {
            echo "Error while uploading your file.";
        }




?>



</html>