<?php


 $del=$_POST['delbook'];

        $server="localhost";
         $username="root";
         $password="55555555";
        $db_name="secdata";
		
		
	    $connect=new mysqli($server,$username,$password,$db_name);
		
        $sql="DELETE FROM bb WHERE namebook='$del' ";
        $result= $connect -> query($sql) ;
		$connect -> close ;

 
 header("location:http://localhost/booke/admin.php");

?>