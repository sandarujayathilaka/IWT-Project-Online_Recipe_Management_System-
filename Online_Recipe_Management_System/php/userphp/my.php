
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODOVEN</title>
    <link rel="stylesheet" href="../../css/user/my_recipe.css">
	
</head>
<body>
    <nav>

    <ul>
         <li><a href="../../html/home/home.html">Home</a></li>
         <li><a href="../../php/userphp/my.php">My Recipes</a></li>
         <li><a href="../../php/appoinment/userapp.php">Appointment</a></li>
         <li><a href="../../php/UserProfilePHP/profile.php">My Profile</a></li>
         <li><a href="../Admin/contact.php">Contact Us</a></li>
       
     </ul>

     <div id="banner">
         <img src ="../../images/Untitled-4.png" width ="63px" length="63px">
     </div>
   
</nav>



<br></br>

<a href="../../php/userphp/addrec.php"><button class = "con">Add recipes></button></a>

<div class="titl"><center>
<h1>-Recipes-</h1>
</center></div></br>

<center>
<?php
 $con=new mysqli('localhost','root','','iwt');
 if($con->connect_error){
	 die("connection field".$con->connect_error);
	 
 }
 
 $sql="select* from add_recipe";
 
 $take=$con->query($sql);
 
 
	 echo ("<table id='table1' cellpadding='1' border='5'>");
	 echo ("<tr>");
	  echo ("<th>"."Recipe ID"."</th>");
	 echo ("<th>"."Category"."</th>");
	 echo ("<th>"."user_name"."</th>");
	 echo ("<th>"."Titlte"."</th>");
	 echo ("<th>"."Time"."</th>");
	 echo ("<th>"."Ingredients"."</th>");
	  echo ("<th>"."Description"."</th>");
	  echo ("<th>"."Action"."</th>");
	 if($take->num_rows>0){
	 while($row=$take->fetch_assoc()){
		 
		 
		 echo("<tr>");
		 echo("<td>".$row['Recipe_ID']."</td>");
		 echo("<td>".$row['category']."</td>");
		 echo("<td>".$row['user_name']."</td>");
		 echo("<td>".$row['Title']."</td>");
		  echo("<td>".$row['Time']."</td>");
		 echo("<td>".$row['Ingredients']."</td>");
		 echo("<td>".$row['Description']."</td>");
		 echo("<td>"."<a id='deletelink' href=./recipedelete.php?id=".$row['Recipe_ID'].">"."Delete or"."</a>"."<a id='editlink' href=./editrecipe.php?id=".$row['Recipe_ID'].">"." update"."</a>"."</td>");
		  
		 
	 }
	 echo "</table>";
 }
 ?>
</center> 
<footer id="footer">

        <div id="fbanner">
         <h2>#FOODOVEN</h2>
     </div>
     <div id="social">
         <h5>Follow us on :</h5>
     </div>
     <div id="icon">
         
         <div id="fb"><a href="https://www.facebook.com/" target="_blank"><img src="../../images/facebook.png" class="img1"></a></div>
         <div id="tweet"><a href="https://twitter.com/" target="_blank"><img src="../../images/twitter.png" class="img2"></a></div>
         <div id="insta"><a href="https://www.instagram.com/" target="_blank"><img src="../../images/instragram.png" class="img3"></a></div>
        
     </div>

     <div id="links">
         <h5 id="linkh5"><u>Quick Links</u></h5>
         <ul>
             <li><a href="../../html/aboutus.html">About Us</a></li>
             <li><a href="../Admin/contact.php">Contact Us</a></li>
             <li><a href="../../html/userhtml/new 1.html">Help</a></li>
         </ul>
     </div>
     <div id="copy">
         <p>Copyright &copy; 2022 FoodOven.<br>All Rights Reserved.</p>
     </div>

    </footer-->

 
 
 
</body>
</html>