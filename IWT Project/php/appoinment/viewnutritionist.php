<?php 

require 'config.php';  //Linking the configuration file
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Viewe Nutrisionist</title>
	<link rel="stylesheet"  href="../../css/appoinment/userapp.css">

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
	<h1 style="margin-left:35% ;margin-top:80px">Nutrisionist Information</h1>
	<table class="table4">
		<tr>
		<th>Nutrisionist ID</th>
		<th>Nutrisionist Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact Number</th>
		
		<th>Specialization</th>

		</tr>

		<?php
		 $sql3="SELECT  * FROM  nutritionist " ;
		$result3=$con->query($sql3);
		if(mysqli_num_rows($result3)>=1){             
			while ($row3=$result3->fetch_assoc()) {    

				echo "<tr><td>".$row3["nutritionistID"]."</td><td>".$row3["nutritionistname"]."</td><td>".$row3["email"]."</td><td>".$row3["Address"]."</td><td>".$row3['ContactNumber']."</td><td>".$row3["categorey"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>