<?php 

require 'config.php';  //Linking the configuration file

?>
<!DOCTYPE html>
<html>
<head>
	<title>Recipe User</title>
	<link rel="stylesheet"  href="../../css/appoinment/userapp.css" type="text/css">

	 <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	
		<nav>	  

		<ul> 		
		
			<li><a href="userapp.php">Book Appoinment</a></li>
			<li><a href="viewnutritionist.php">View Nutrisionist</a></li>
		    <li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="../../html/home/index.html">Back to Home</a></li>
			

		</ul>

		<div id="banner"><img src="../../images/appoinment/logo.png" class="img0"></div>

		</nav>




 </header>
 <body>

		<div class="headerA">
	      <h2>Make Appoinment</h2>
        </div>

<form method="post" action="userapp.php">  <!--User appoinment form -->

	 <?php include ('errors.php'); ?> 

	<div class="input-groupA">
		<label>Appoinment ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>description</label>
		<input type="text" name="adddesc" >


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="addEmail">

	</div>


    <div class="input-groupA">
		<label>Date</label>
		<input type="Date" name="adddate">

	</div>

	<div class="input-groupA">
		<label>Time</label>
		<input type="Time" name="addtime">
	</div>
	

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Book</button>
	</div>


	




</form>
<br><br><br>




	<div class="headerAD">
	<h2>Cancel Booking</h2>
</div>

<form method="post" action="userapp.php" class="delete">

	<div class="input-groupA">
		<label>Appoinment ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>






</body>
</html>