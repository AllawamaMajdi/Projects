<?php


$name=$_POST['name'];
$author=$_POST['author'];
$dis=$_POST['dis'];
$img=$_POST['img'];
$pdf=$_POST['pdf'];
$cat=$_POST['cat'];



		$server="localhost";
        $username="root";
        $password="55555555";
        $db_name="secdata";
		
		

        $connect=new mysqli($server,$username,$password,$db_name);
		
		$sql="INSERT INTO bb (namebook,author,disc,img,pdf,catId) VALUES ('$name','$author','$dis','$img','$pdf','$cat')";
          $result= $connect -> query($sql) ;
		  $connect -> close ;
 
 header("location:http://localhost/booke/admin.php");



?>