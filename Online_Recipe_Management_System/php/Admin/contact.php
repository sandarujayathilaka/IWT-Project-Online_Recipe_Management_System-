<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODOVEN</title>
    <link rel="stylesheet" href="../../css/Admin/contact.css">
    <link rel="stylesheet" href="../../css/Admin/index.css">
   
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

     <img id="logo" src="../../images/logo.png">
   
   </div>
</nav>

<div id="label1">
<h1>Contact Us</h1>
<p>If you have any issue regarding this system,
    please let us know via the email address,phone numbers or queries.We look forward to helping you.</p>
</div>
<div id="img">
    <img src="../../images/contact-us.png" width="650px" alt="vector image">
</div>

<div id="details">
    <h3>#FOODOVEN</h3><br>
    <p>E-mail : contactus@foodoven.com<br><br>Tel : +9411-1234560</p>
</div>

<form id="contact" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div id="formdiv">

    <label class="formele">Your Name :</label><br><br>
    <input type="text" class="formele" id="fname" name="fname" required><br><br>

    <label class="formele">Your Email :</label><br><br>
    <input type="email" class="formele" id="email" name="email" required><br><br>

    <label class="formele">Phone :</label><br><br>
    <input type="tel" class="formele" id="tp" name="tp" required><br><br>

    <label class="formele">Subject :</label><br><br>
    <input type="text" class="formele" id="sub" name="sub" required><br><br>

    <label class="formele">Gender :</label><br><br>
    <label class="formele">Male : <input type="radio" id="gender" name="gender"></label>

    <label>Female : <input type="radio" id="gender" name="gender"></label><br><br>
    <input type="submit" id="submit" name="submit" value="submit">

</div>
</form>
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
         <li><a href="../../php/Admin/contact.php">Contact Us</a></li>
         <li><a href="../../html/userhtml/new 1.html">Help</a></li>
     </ul>
 </div>
 <div id="copy">
     <p>Copyright &copy; 2022 FoodOven.<br>All Rights Reserved.</p>
 </div>

</footer>

</body>

<?php

require "config.php";

if(isset($_POST["submit"])){

    $name=$_POST["fname"];
    $mail=$_POST["email"];
    $tp=$_POST["tp"];
    $sub=$_POST["sub"];
   


$sql= "INSERT INTO contacts(Name,Email,Phone,Subject) VALUES('$name','$mail','$tp','$sub')"; 
 

if($con->query($sql))
echo '<div id="mesbox"><h3 id="message">Successfully Submitted </h3></div>';

else
echo "Error :". $con->error;

}


$con->close();

?>

</html>