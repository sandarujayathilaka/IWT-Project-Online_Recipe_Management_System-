<?php session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
    header('Location: profile.php');
	exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'iwt';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$profile=$_SESSION['name'];
			

$stmt = $con->prepare("SELECT * FROM user WHERE Email= '$profile'");


$stmt->execute();
//$stmt->bind_result($password, $fname,$lname,$email3,$ad,$mobile,$pw,$email8,$cat,$lastColumn);
$stmt->bind_result($idX, $fname,$lname,$fullNameX,$ad,$mobile,$emailxx,$pw,$image,$lastColumnX);
$stmt->fetch();
$stmt->close();
$profile=$_SESSION['name'];
	



?>




<!DOCTYPE html>
<html lang="en">              


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>

    <link rel="stylesheet" href="../../css/UserProfileCSS/header.css">

    <style>
        p{
            text-align: center;
            margin-top: 34px ;
        }

        input{
            color: rgb(204, 0, 204);
            border-radius: 14px;
            background-color: rgb(246, 246, 246);
            border: none;
            outline: none;
            box-shadow:24px aqua ;
            padding: 14px 12px;
            text-align: center;
            font-size: medium;
            font-weight: 40px;
            margin-left: 2%;
        }

        #up{
            margin-top: 12px;
            margin-left: 12px;
            background-color: mediumspringgreen;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
            height: 30px;
            border-radius: 4px;
            padding: 12px 14px;


        }

        
			form {
  border: 3px solid #f1f1f1;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  background-image: url(https://www.wallpapertip.com/wmimgs/3-36163_dark-blur.jpg);
  color: white;
  border-radius: 14px;
  box-shadow: 0 0 8px  #669999; 
  
}


#profile{
	border-radius: 100%;
	width: 250px;
	height: 250px;
}
    </style>
</head>
<body>
    
<nav>

    <ul>
         <li><a href="../../html/home/home.html">Home</a></li>
         <li><a href="../userphp/my.php">My Recipes</a></li>
         <li><a href="../../html/aboutus.html">About Us</a></li>
         <li><a href="../../php/Admin/contact.php">Contact Us</a></li>
         <li><a href="../../html/userhtml/new 1.html">Help</a></li>
     </ul>

     <div id="banner">
     
<img src="../../images/logo.png " width="60px" style="margin-top: -14px;" >


     </div>
   <div id="logbtn">
   <a href="../../php/UserProfilePHP/logout.php"><button class="logL">Logout</button></a>
   </div>
   <div id="regbtn">
      <a href="#"><H class="logN"><?=$_SESSION['name']?></H></a>
   </div>
</nav>


<div class="content" >
			

			<p id="up"><b></b>Your can update account detail below<br><?=$_SESSION['name']?></p>
			<div>

<form action="TheFinalUpdate.php" method="POST" enctype="multipart/form-data">

    <!-- <h3>Update Deatails</h3> -->

    
    <div class="tag">
    <p>Profile<br><img  id="profile"src="<?=$image?>"></p>
	
		
        <p>Profile Picture<br><input type="file" name="file" value ="<?php echo('$image')?>"></p>

<!-- <p>Image <br><input type="text" name="password" value="<?=$pw?>"></p> -->
	
	</div>

   

    <p> First Name <input type="text" name="fname" value="<?=$fname?>">&nbsp;&nbsp;&nbsp;
    Last Name <input type="text" name="lname" value="<?=$lname?>">
</p>



    <p>Address <br><input type="text" size="50px"  style="padding: 24px 5px;" name="address" value="<?=$ad?>" ></p>

    <p>Mobile<br> <input type="tel" name="tel" value="<?=$mobile?>"></p>

    <p>Email<br> <input type="email" name="email" value="<?=$_SESSION['name']?>"></p>

    <p>Password <br><input type="text" name="password" value="<?=$pw?>"></p>


    


    



    

    
   
    
<input type="submit" style="margin: 2% 50% 2% 47% ;background-color: mediumspringgreen;color: black;" name="update" title ="Update your Details"value="Update">


</form>

<footer id="footer">

        <div id="fbanner">
         <h2>#FOODOVEN</h2>
     </div>
     <div id="social">
         <h5>Follow us on :</h5>
     </div>
     <div id="icon">
         
         <div id="fb"><a href="https://www.facebook.com/" target="_blank"><img src="../../images/UserProfileIMAGES/facebook.png" class="img1"></a></div>
         <div id="tweet"><a href="https://twitter.com/" target="_blank"><img src="../../images/UserProfileIMAGES/twitter.png" class="img2"></a></div>
         <div id="insta"><a href="https://www.instagram.com/" target="_blank"><img src="../../images/UserProfileIMAGES/instragram.png" class="img3"></a></div>
        
     </div>

     <div id="links">
         <h5 id="linkh5"><u>Quick Links</u></h5>
         <ul>
             <li><a href="../../html/aboutus.html">About Us</a></li>
             <li><a href="../../php/Admin/contact.php">Contact Us</a></li>
             <li><a href="../../html/userhtml/new 1.html">Help</a></li>
         </ul>
     </div>
     <div id="copy">
         <p>Copyright &copy; 2022 FoodOven.<br>All Rights Reserved.</p>
     </div>

    </footer>

</body>
</html>












