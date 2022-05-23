<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../html/UserProfileHTML/Login.html');
	exit;
}
?>

<?php
 if(isset($_GET['msg'])) {
    echo '<script> alert ("Successfully Updated") </script>';
    //echo $_GET['msg'];
 }

 else if(isset($_GET['msg1'])) {
    echo '<script>  alert("Your Username is Already Exist.Please refill the form with unique User Name.");</script>';
    //echo $_GET['msg1'];
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

<div class= "topic">

<h3>AD Officer Accounts</h3><hr>

</div>
<a  id="new_recipe_btn" href="./insertOfficer.php">Add Officer</a>
</body>

<?php

include "config.php";


$sql="SELECT * From officeracc";
$result=$con->query($sql);


    echo("<table cellpadding='1' class='admintable' border ='1'>");
    echo("<tr>");
    echo("<th>"."ID"."</th>");
    echo("<th>"."Name"."</th>");
    echo("<th>"."NIC"."</th>");
    echo("<th>"."User Name"."</th>");
    echo("<th>"."Password"."</th>");
    echo("<th>"."Action"."</th>");
    echo("</tr>");
    
    if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      
        echo("<tr>");
        echo("<td>".$row["ID"]."</td>");
        echo("<td>".$row["Officer_Name"]."</td>");
        echo("<td>".$row["NIC"]."</td>");
        echo("<td>".$row["UserName"]."</td>");
        echo("<td>".$row["Pword"]."</td>");
        echo("<td>"."<a id='deletelink' href=./deleteOfficer.php?id=".$row['ID'].">"."Delete"."</a>"."<a id='editlink' href=./editOfficer.php?id=".$row['ID'].">"."Edit"."</a>"."</td>");
    
      
        echo("</tr>");
    }
    
    echo("</table>");
}

$con->close();

?>

</html>