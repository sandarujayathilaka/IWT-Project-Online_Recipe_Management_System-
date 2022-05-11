<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODOVEN</title>
    <link rel="stylesheet" href="../Css/admin.css">
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

<div class= "topic">

<h3>Recipes</h3><hr>

</div>
<a  id="new_recipe_btn" href="./insertrecipe.php">Add recipe</a>
</body>

<?php

include "config.php";


$sql="SELECT id,title,Category From recipe";
$result=$con->query($sql);


    echo("<table cellpadding='1' class='admintable' border ='1'>");
    echo("<tr>");
    echo("<th>"."ID"."</th>");
    echo("<th>"."Title"."</th>");
    echo("<th>"."Category"."</th>");
    echo("<th>"."Action"."</th>");
    echo("</tr>");
    
    echo("<td>".$row["id"]."</td>");
    echo("<td>".$row["title"]."</td>");
    echo("<td>".$row["Category"]."</td>");
    echo("<td>"."<a id='deletelink' href=./deleterecipe.php?id=".$row['id'].">"."Delete"."</a>"."<a id='editlink' href=./editrecipe.php?id=".$row['id'].">"."Edit"."</a>"."</td>");

    if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

        echo("<tr>");   echo("<table cellpadding='1' class='admintable' border ='1'>");
        echo("<tr>");
        echo("<th>"."ID"."</th>");
        echo("<th>"."Title"."</th>");
        echo("<th>"."Category"."</th>");
        echo("<th>"."Action"."</th>");
        echo("</tr>");
        
       
      
        echo("</tr>");
    }
    
    echo("</table>");
}

$con->close();

?>

</html>