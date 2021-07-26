<?php
session_start();
$_SESSION["login"] ; 


$P_name = $_POST['username'] ;
$P_phone = $_POST['phone'] ;
$P_email = $_POST['email'] ;
$P_pass = $_POST['pass'] ;



$ServerName="localhost";
$UserName="root";
$Pass="55555555";
$db_name="secdata";

$conn = new mysqli ($ServerName,$UserName,$Pass,$db_name);

$sql ="INSERT INTO pi (name , phone , email ,pass) VALUES ('$P_name' ,'$P_phone' , '$P_email' , '$P_pass' )";

 $conn -> multi_query ($sql);
$conn -> close;
 header("location:http://localhost/booke/login.html");
 
 

?>

