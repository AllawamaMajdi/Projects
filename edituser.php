<?php



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EditUser</title>
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
  <h2>Add New User</h2>
  <p>Enter user info :</p>
  <form action="upload2.php" method="post" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="usr">User Name:</label>
      <input type="text" class="form-control" id="usr" name="name">
    </div>
   <div class="form-group">
      <label for="usr">Phone:</label>
      <input type="text" class="form-control" id="usr" name="phone">
    </div>
	<div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" id="usr" name="email">
      </div>
    <div class="form-group">
      <label for="usr">Pass:</label>
      <input type="password" class="form-control" id="usr" name="pass">
      </div>
   </div>
  
  
   <div align="center">
  <button type="submit" class="btn btn-success"  >Add User</button>
  </div>
  
  </form>
</div>

<div class="container">
  <h2>Delete User </h2>
  <p>Enter username to delete it :</p>
 <form action="deleteuser.php" method="post" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="usr">Name:</label>
	  
      <input type="text" class="form-control" id="usr" name="deluser">
	  
    </div>

 <div align="center">
  <button type="submit" class="btn btn-success"  >Delete User</button>
  </div>

</div>


</body>
</html>
	