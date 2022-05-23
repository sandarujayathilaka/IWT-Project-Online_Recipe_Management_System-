<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../html/UserProfileHTML/Login.html');
	exit;
}
?>

<?php

include "config.php";

$sql=" SELECT COUNT(ID) AS 'acount' FROM adminacc";
$result=$con->query($sql);

if($result->num_rows>0){

    $row1=$result->fetch_assoc();
    
    
}

$sql=" SELECT COUNT(ID) AS 'ncount' FROM nutriacc";
$result=$con->query($sql);

if($result->num_rows>0){

    $row2=$result->fetch_assoc();

}

$sql=" SELECT COUNT(ID) AS 'ocount' FROM officeracc";
$result=$con->query($sql);

if($result->num_rows>0){

    $row3=$result->fetch_assoc();

}

$sql=" SELECT COUNT(ID) AS 'ucount' FROM user";
$result=$con->query($sql);

if($result->num_rows>0){

    $row4=$result->fetch_assoc();

}

$sql=" SELECT COUNT(ID) AS 'ucontact' FROM contacts";
$result=$con->query($sql);

if($result->num_rows>0){

    $row5=$result->fetch_assoc();

}


$sql=" SELECT COUNT(ID) AS 'ucat' FROM Recipe";
$result=$con->query($sql);

if($result->num_rows>0){

    $row6=$result->fetch_assoc();

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

<div id="dash">

<div id ="admincount"><h2 class="dashhead">Admins</h2><img class="dashimg" src="../../images/dashadmin.png"><br><h2 class="dashcount"><?php echo $row1['acount'] ?></h2></div>
<div id="usercount"><h2 class="dashhead">Users</h2><img class="dashimg" src="../../images/dashuser.png"><br><h2 class="dashcount"> <?php echo $row4['ucount'] ?></h2></div>
<div id="nutricount"><h2 class="dashhead">Nutritionists</h2><img id="dashimg1" src="../../images/adminmed.png"><br><h2 class="dashcount"> <?php echo $row2['ncount'] ?></h2 ></div>
<div id="officercount"><h2 class="dashhead">Officers</h2><img class="dashimg" src="../../images/dashof.png"><br><h2 class="dashcount"> <?php echo $row3['ocount'] ?></h2></div>
<div id="contacts"><h2 class="dashhead">Inquiries</h2><img id="dashcon" src="../../images/dashcon.png"><br><h2 class="dashcount"> <?php echo $row5['ucontact'] ?></h2></div>
<div id="cat"><h2 class="dashhead">Categories</h2><img id="catimg" src="../../images/cat.png"><br><h2 class="dashcount"> <?php echo $row6['ucat'] ?></h2></div>
</div>

   
</body>

</html>

