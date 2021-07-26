<?
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['pass'];

echo $name,$phone,$email,$pass;


		$server="localhost";
        $username="root";
        $password="55555555";
        $db_name="secdata";
		
		

        $connect=new mysqli($server,$username,$password,$db_name);
		
		$sql="INSERT INTO pi (name,phone,email,pass) VALUES ('$name','$phone','$email','$pass')";
          $result= $connect -> query($sql) ;
		  $connect -> close ;
 
 header("location:http://localhost/booke/admin.php");

 
 ?>