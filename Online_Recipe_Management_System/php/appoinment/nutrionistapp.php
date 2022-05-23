<?php 

require 'config.php'; //Linking the configuration file

?>

<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ..//Php/home.php');
	exit;
}
?>






<!DOCTYPE html>
<html>
<head>
	<title>My Appointments</title>
	<link rel="stylesheet"  href="../../css/appoinment/nutri.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>

		<nav>
		
		    <ul> 
			
		
			
			
			


		      
		      <li><a href="nutrionistapp.php">My Appointments</a></li> 
			  <li><a href="../../html/home/index.html">Back to Home</a></li>
						

		    </ul>

			<div id="banner"><img src="../../images/appoinment/logo.png" class="img0"></div>

		

	   </nav>




</header>

<body>


<p>Welcome back, <?=$_SESSION['name']?>!</p>
 
	
 
 
<h1 style="margin-left:40% ;margin-top:80px">My Appointments</h1>
<br>
	<table class="table2">
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

 
