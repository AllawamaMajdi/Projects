<?php

$P_Id = $_POST['Id'] ;


$ServerName="localhost";
$UserName="root";
$Pass="55555555";
$db_name="secdata";


$conn = new mysqli ($ServerName,$UserName,$Pass,$db_name);
$sql=" SELECT * FROM bb WHERE Id='$P_Id'"; 
$result= $conn -> query($sql) ;
 while ( $row = $result -> fetch_assoc () )
	  {
		$row["Id"] ;
		$n=$row["namebook"] ;
		$m=$row["img"] ;
		$c=$row["coll"] ;
		$a=$row["author"] ;
		$p=$row["pdf"] ;
        $d=$row["disc"] ;		  
	  ;} 
$conn -> close ;


 
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Book Details</title>
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

      <h1 class="logo mr-auto"><a href="index.php">Book & Page</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="courses.php">Books</a></li>
          <li class="drop-down"><a href="#">Collections</a>
            <ul>
              <li><a href="1.php">Children's books</a></li>
              <li><a href="2.php">scientific books</a></li>
			  <li><a href="3.php">Novels</a></li>
			  <li><a href="4.php">Political books</a></li>
			  <li><a href="5.php">Literary books</a></li>
              <li><a href="6.php">Others</a></li>
			</ul>
          </li>
          <li><a href="trainers.html">Team</a></li>
		  <li><a href="contact.php">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="courses.php" class="get-started-btn">Get Started</a>

    </div>
  
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Book Details</h2>
        <p>________________ </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="<? echo $m ;?>" class="img-fluid" alt="">
            <h3><? echo $n ?></h3>
            <p>
               <? echo $d ?>
            </p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Book name</h5>
              <p><? echo $n ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Author</h5>
              <p><? echo $a ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Collection</h5>
              <p><? echo $c ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
             
              <a href="<? echo $p ?>";><h5>Read now</h5></a>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Book & Page</h3>
            <p>
                      
              Amman<br>
              Jordan <br><br>
              <strong>Phone:</strong> +962 775 677 465<br>
              <strong>Email:</strong> prog_lawama@outlook.com <br>
            </p>
          </div>

          

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

        <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="courses.php">Books</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trainers.html">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Book & Page </span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://www.facebook.com/profile.php?id=100003484730025">programmer Majdi Al-lawama </a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
      
        <a href="https://www.facebook.com/profile.php?id=100003484730025" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/lawama_majdi?igshid=1ae62ged9lzo7" class="instagram"><i class="bx bxl-instagram"></i></a>
      
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>