<?php 

require 'config.php';  //Linking the configuration file

?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Recipe User</title>
	<link rel="stylesheet"  href="../../css/appoinment/nutri.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>

		<nav>		
		<ul> 
			
		
		    
		    <li><a href="nutrionistapp.php">My Appointments</a></li> 
			<li><a href="searchuser.php">Get Recipe User contact details</a></li>			
		    <li><a href="../../html/home/index.html">Back to Home</a></li>
					

		</ul>

		<div id="banner"><img src="../../images/appoinment/logo.png" class="img0"></div>


        </nav>


</header>

<body>


	
<form method="post" action="searchuser.php" class="usersearch">

	<?php include ('errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Recipe User ID</label>
		<label style="font-weight: bold">*Recipe User Name</label>
		<input type="text" name="PID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Search</button>
	</div>

			
	</form>


	

		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" >Recipe User Information</caption>

		<tr>
		<th>Recipe UserID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Age</th>
   

		</tr> <?php  


		$PID =$_POST['PID'];

		$sqlP="SELECT  * FROM  user  WHERE 	UserID=('$PID') OR Name=('$PID') " ;
		$resultP=$con->query($sqlP);
		if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["UserID"]."</td><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>".$rowP['age']."</td></tr>";
			}


			echo "</table";
	


		  }
	}  
	?>
 </table>
			
    
	
	

</body>
</html>


