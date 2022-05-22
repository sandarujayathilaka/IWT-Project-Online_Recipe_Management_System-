<?php  

$errors=array();


$con = new mysqli("localhost","root","","iwt"); // connect to the database



if (isset($_POST['Add'])) {

   $addID 				= $_POST['addID'];  
   $adddesc 			= $_POST['adddesc'];
   $addAddress 		    = $_POST['addAddress'];
   $addContactNumber	= $_POST['addContactNumber'];
   $addEmail 			= $_POST['addEmail'];
   $addtime 			= $_POST['addtime'];
   $adddate			    = $_POST['adddate'];



   // Check Required details
	if (empty($addID)) {
	array_push($errors,"Appoinment ID is required");
	}

    if (empty($adddesc)) {
	array_push($errors,"Description is required");
	
    }


    if (empty($addAddress)) {
	array_push($errors,"Address is required");
	
    }

    if (empty($addContactNumber)) {
	array_push($errors,"Contact Number is required");
	
    }


    if (empty($addEmail)) {
	array_push($errors,"Email is required");
	
    }

    if (empty($adddate)) {
	array_push($errors,"Date is required");
	
    }

    if (empty($addtime)) {
	array_push($errors,"Time is required");
	
    }

         if(count($errors)==0){	

	          //insert records to the appoinment table
              $sqladd = "INSERT INTO  appoinment (appID, appDescription, address, contact, email, date, time) VALUES ('$addID','$adddesc', '$addAddress', '$addContactNumber', '$addEmail', '$adddate','$addtime') ";

             $con -> query($sqladd) ;

         }
	
}


  //cancel the appoinmnt 
 if (isset($_POST['Delete'])) {

		
          $deleteID = $_POST['deleteID']; 
  	        if (empty($deleteID)) {
             	array_push($errors,"Appoinment ID is required");
            }
                if (count($errors)==0) {   
 
 	                 //delete records from appoinment table 
 	                 $querydelete="DELETE FROM appoinment WHERE appID='$deleteID' ";
				}
    
 	                  if ($con -> query($querydelete)) {

 	 	                       if ($con->affected_rows==0) {  //check wrong ID
 	 		                             array_push($errors,"Wrong Appoinment ID");
		                       }
		
 	                   }
	 
   }

?>




