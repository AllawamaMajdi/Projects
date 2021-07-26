<?php



$email=$_POST['email'];
$pass=$_POST['pass'];
 
session_start();
$_SESSION["s"] = "$email" ;

$ServerName="localhost";
$UserName="root";
$Pass="55555555";
$db_name="secdata";


$conn = new mysqli ($ServerName,$UserName,$Pass,$db_name);


	$sql=" SELECT * FROM pi  WHERE email = '$email' AND pass = '$pass'";
	
	$result= $conn -> query($sql) ;
	 
	if ($email="admin_1@gmail.com" && $pass=="admin1") {
	 header("location:http://localhost/booke/admin.php");
	}else if ($result->num_rows > 0) {
		  
		 
		 header("location:http://localhost/booke/index2.php");
		  	
			   
	 }else{ header("location:http://localhost/booke/login.html");
	 }

   
   
$conn -> close ;
	 


	 
?>