<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODOVEN</title>
    <link rel="stylesheet" href="../../css/addedit.css">
</head>
<body>
 
    <nav>
     
    <ul>
         <li><a href="main.php">Add Advertisement</a></li>
		  <li><a href="addeditview_advertisement.php">View Existing</a></li>
        
         <li> <a href="index.html">Logout</a></li>

     </ul>
	 
	 
	
	 
   

     <div id="banner">
         <img src="../../Images/logo.png"  class="logo1">
     </div>
      
</nav>
     <br>
	 <br>
	  <?php
	 
	require "config.php";
	 
	 $sql='SELECT *FROM addedit';
	 $result =$con->query($sql);
	 echo "<div id=addall>";
	 
	 if($result->num_rows>0)
	 {
	    while($row=$result->fetch_assoc())
        {
		
          echo "<ul>";
        echo"<br/>";
		echo ("<li >"."Advertiesment Id :".$row["Adid"]."</li><br>");
		echo ("<li >"."Related : ".$row["rel"]."</li><br>");
		echo ("<li >"."Contact Number : ".$row["number"]."</li><br>");
		echo ("<li >"."e-mail : ".$row["mail"]."</li><br>");
		echo ("<li >"."Details : ".$row["deta"]."</li><br>");
		echo ("<li >"."Date : ".$row["dates"]."</li><br>");
		
        
		
		
		}
	 }
		
          echo("</ul>");
		 echo "</div>";
		 ?>
		 <br/>
		 <br/>

		  <button class="button" onclick="location.href='delete1.php';">Delete and Update</button>
    
	  
	 
    <footer id="footer">

        <div id="fbanner">
         <h2>#FOODOVEN</h2>
     </div>
     <div id="social">
         <h5>Follow us on :</h5>
     </div>
     <div id="icon">
         
         <div id="fb"><a href="https://www.facebook.com/" target="_blank"><img src="../../Images/facebook.png" class="img1"></a></div>
         <div id="tweet"><a href="https://twitter.com/" target="_blank"><img src="../../Images/twitter.png" class="img2"></a></div>
         <div id="insta"><a href="https://www.instagram.com/" target="_blank"><img src="../../Images/instragram.png" class="img3"></a></div>
        
     </div>

     <div id="links">
         <h5 id="linkh5"><u>Quick Links</u></h5>
         <ul>
             <li><a href="../../html/aboutus.html">About Us</a></li>
             <li><a href="#">Contact Us</a></li>
             <li><a href="#">Help</a></li>
         </ul>
		 
		 
     </div>
     <div id="copy">
         <p>Copyright &copy; 2022 FoodOven.<br>All Rights Reserved.</p>
     </div>

    </footer>


</body>

</html>