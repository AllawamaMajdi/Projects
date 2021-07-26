<?php


$ServerName="localhost";
$UserName="root";
$Pass="55555555";
$db_name="secdata";


$conn = new mysqli ($ServerName,$UserName,$Pass,$db_name);

$sql=" SELECT * FROM catog  ";
    
	$result= $conn -> query($sql) ;
	
 $select="<select class='selectpicker'>";	
	while ( $row = $result -> fetch_assoc () )
	  {
		  $select=$select. "<option>" . $row["name"] . "</option>" ;
           }
		  $select=$select."</select>";


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EditBook</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">Book & Page <h3>Administration</h3></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="login.html.">Hello : Administration</a></li>
          <li><a href="edituser.php">Edit Users</a></li>
          <li><a href="editbook.php">Edit Books</a></li>
          
		  <li class="active"><a href="admin.php">Administration Home</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      

    </div>
  </header><!-- End Header -->
  
  
 

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <p><br><br></p>
		<h2><? echo $n ?></h2>
        <p></p>
      </div>
    </div><!-- End Breadcrumbs -->
	
	<div class="container">
  <h2>Add book </h2>
  <p>Enter book info :</p>
  <form action="upload1.php" method="post" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="usr">NameBook:</label>
	  
      <input type="text" class="form-control" id="usr" name="name">
	  
    </div>
   <div class="form-group">
      <label for="usr">Author:</label>
      <input type="text" class="form-control" id="usr" name="author">
    </div>
	<div class="form-group">
      <label for="usr">Disc:</label>
      <input type="text" class="form-control" id="usr" name="dis">
      </div>
    <div class="form-group">
      <label for="usr">Img Url:</label>
      <input type="text" class="form-control" id="usr" name="img">
      </div>
	  <div class="form-group">
      <label for="usr">Pdf Url:</label>
      <input type="text" class="form-control" id="usr" name="pdf">
      </div>
   <div class="form-group">
      <label for="usr">CatId:</label>
      <input type="number" class="form-control" id="usr" name="cat">
      </div>
   <div class="form-group">
       <? echo $select ; ?>
   </div>
  <div class="form-group">
  
   </div>
  
  
 <div class="form-group">
    Select Book to upload if you have a Book :
    <input type="file" name="fileToUpload" id="fileToUpload">
  
</div>
  
  
   <div align="center">
  <button type="submit" class="btn btn-success"  >Add Book</button>
  </div>
  
  </form>
</div>

<div class="container">
  <h2>Delete book </h2>
  <p>Enter book info to delete it :</p>
 <form action="deletebook.php" method="post" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="usr">NameBook:</label>
	  
      <input type="text" class="form-control" id="usr" name="delbook">
	  
    </div>

 <div align="center">
  <button type="submit" class="btn btn-success"  >Delete Book</button>
  </div>

</div>


</body>
</html>
	