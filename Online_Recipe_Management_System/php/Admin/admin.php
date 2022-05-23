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
</head>

<body>

    <nav>

    <img id="logo" src="../../images/logo1.png">

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


   
</body>

</html>