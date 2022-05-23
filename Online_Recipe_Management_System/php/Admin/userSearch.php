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
    <link rel="stylesheet" href="../../css/Admin/search.css">
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

<div id="search">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div id="simg">
<img src="../../images/search.png" id="searchimg">
</div>
<input type="text" name="uname" id="bar" placeholder="Enter the full name">
<button id="sub" value="Search" name="btnsub">Search</button>

</form>

</div>

</div>

</body>

<?php

include "config.php";

echo("<table cellpadding='1' class='stable' border ='1'>");
    echo("<tr>");
    echo("<th>"."ID"."</th>");
    echo("<th>"."Name"."</th>");
    echo("<th>"."Mobile"."</th>");
    echo("<th>"."Email"."</th>");
    echo("<th>"."Password"."</th>");
    echo("<th>"."Action"."</th>");
    echo("</tr>");

if(isset($_POST["btnsub"])){

    $uname = $_POST["uname"];
    
    $sql= "SELECT * FROM user where FullName LIKE '%$uname%'";
    
    if($result=$con->query($sql)){

    if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

    echo ("<tr>");
    echo ("<td>". $row["ID"]. "</td>");
    echo ("<td>" .$row["FullName"] . "</td>");
    echo ("<td>" .$row["Tel"] . "</td>");
    echo ("<td>" . $row["Email"] . "</td>");
    echo ("<td>" . $row["Password"] . "</td>");
    echo("<td>"."<a id='deletelink' href=./deleteUser.php?id=".$row['ID'].">"."Delete"."</a>"."<a id='editlink' href=./editUser.php?id=".$row['ID'].">"."Edit"."</a>"."</td>");
    
    echo ("<tr>");

    }

    echo ("</table>");

    }
    
    else{
    echo '<div id="mbox"><h3 id="message"> No Result </h3></div>';
    }
    
    }

    }
    
    
?>

</html>