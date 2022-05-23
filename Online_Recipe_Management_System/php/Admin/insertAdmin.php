
<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../html/UserProfileHTML/Login.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODOVEN</title>
    <link rel="stylesheet" href="../../css/Admin/admin.css">
    <link rel="stylesheet" href="../../css/Admin/recipe.css">
   
</head>
<body>

<nav>



<div id="logbtn">
<p id="note">Administrator : <?=$_SESSION['name']?></p>
<a href="logout.php"><button class="log">Logout</button></a>
</div>

</nav>

<div id="verticalnav">

<div id="adminbanner">
<img id="logo" src="../../images/adminlogo.png">
</div>

<ul>
<li class="list"><a href="./dashboard.php"><img id="img1" src="../../images/12.png"> Dashboard</a></li>                             
     <li class="list"><a href="./admUser.php"><img id="img1" src="../../images/user.png"> Users</a></li>
     <li class="list"><a href="./admrecipe.php"><img id="img1" src="../../images/recipe.png"> Categories</a></li>
     <li class="list"><a href="./admNutri.php"><img id="img1" src="../../images/medi1.png"> Nutritionists</a></li>
     <li class="list"><a href="./admOfficer.php"><img id="img1" src="../../images/officer.png"> Ad Officers</a></li>
     <li class="list"><a href="./admcontact.php"><img id="img1" src="../../images/contact.png"> Contacts</a></li>
     <li class="list"><a href="./adminAcc.php"><img id="img1" src="../../images/admin.png"> Administrators</a></li>
</ul>

</div>

<form id="recipe" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div id="formdiv">

    <label class="formele">Name :</label><br><br>
    <input type="text" class="formele" id="name" name="name" required><br><br>

    <label class="formele">NIC :</label><br><br>
    <input type="text" class="formele" id="nic" name="nic" required><br><br>

    <label class="formele">User Name :</label><br><br>
    <input type="text" class="formele" id="username" name="username" required><br><br>

    <label class="formele">Password :</label><br><br>
    <input type="password" class="formele" id="password" name="password" required><br><br>

   Profile Picture : <input type="file" id="img" name="file" require><br><br>

    <input type="submit" id="submit" name="submit" value="submit">

</div>
</form>

</body>

<?php

require "config.php";

if(isset($_POST["submit"])){

    $name=$_POST["name"];
    $nic=$_POST["nic"];
    $uname=$_POST["username"];
    $pword=$_POST["password"];
    
   
 $fileName = $_FILES['file']['name'];
 $fileTempName = $_FILES['file']['tmp_name'];
 $fileSize = $_FILES['file']['size'];
 $fileError = $_FILES['file']['size'];
 $fileType = $_FILES['file']['type'];
 $fileExt= explode(".",$fileName);
 $realFile = strtolower($fileExt['1']);


 $target_dir = "../../images/";

 $target_file  =$target_dir . time()."-" . basename($_FILES["file"]["name"]);

 if(isset($_FILES["file"])) {

    $allowed=array('png','jpg','jpeg');

    if(in_array($realFile,$allowed)){

        if (move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)){

                echo "<script> alert(The file ". basename( $_FILES["file"]["name"]). " is uploaded.)</script>";

                $sql= "INSERT INTO adminacc(Admin_Name,NIC,UserName,Pword,Link) VALUES('$name','$nic','$uname','$pword','$target_file')"; 

                if($con->query($sql)){
                header("Location:./adminAcc.php");
                exit();}
                
                else{
                    echo '<script>  alert("Your Username is Already Exist.Please refill the form with unique User Name.");</script>';
                }

        }

        else {
            echo "Error while uploading your file.";
        }

    }
    else
    echo '<script>  alert("Wrong file type.Please re-enter details and upload again file");</script>';

 }

 else{

 echo "File not available";
 }

}





?>

</html>