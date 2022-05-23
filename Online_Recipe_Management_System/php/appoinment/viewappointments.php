<?php 

require 'config.php'; //Linking the configuration file

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Appoinments</title>
	<link rel="stylesheet"  href="../../css/appoinment/userapp.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>

		<nav>		
		<ul> 
			
		
		
		    <li><a href="userapp.php">Book Appoinment</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="../../html/home/home.html">Back to Home</a></li>
	
			

		</ul>

		<div id="banner"><img src="../../images/appoinment/logo.png" class="img0"></div>

		



	  </nav>




</header>

<body>
	<h1 style="margin-left:40% ;margin-top:80px"> Appointments </h1>
	<table class="table4">
		<tr>
		<th>Appointment ID</th>
		<th>Appoinment Description</th>
		<th>Recipe User Address</th>
		<th>Contact number</th>
		<th>Email</th>
		<th>Date</th>
		<th>Time</th>
		
		

		</tr>

		<?php $sql3="SELECT  * FROM  appoinment " ;
		$result3=$con->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["appID"]."</td><td>".$row3["appDescription"]."</td> <td>".$row3["address"]."</td> <td>".$row3["contact"]."</td> <td>".$row3["email"]."</td> <td>".$row3["date"]."</td> <td>".$row3['time']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
	 
    
    
    
</body>
</html>