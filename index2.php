
<?php

 session_start();
 $ema=$_SESSION["s"];
 
 
$ServerName="localhost";
$UserName="root";
$Pass="55555555";
$db_name="secdata";


$conn = new mysqli ($ServerName,$UserName,$Pass,$db_name);


	$sql=" SELECT name FROM pi  WHERE email = '$ema' ";
	$result= $conn -> query($sql) ;
	while ( $row = $result -> fetch_assoc () )
	  {
		  
		  $n=$row["name"] ;
	  }
  $conn -> close ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Book & Page</title>
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
           <li><a href="login.html.">Hello : <? echo $n ?></a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="courses.php" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Reading Today,<br>Leading Tomorrow</h1>
      <h2>Welcome , You can read and download every book you like in this website ...</h2>
      <a href="courses.php" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

       

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About this website </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Because reading is an important way to strengthen the mind.</h3>
            <p class="font-italic">
              I built my first website for interest in reading and increasing reading of books .
            </p>
            <p class="font-italic">
			On this website, you can :
			</p>
			
			<ul>
              <li><i class="icofont-check-circled"></i> View a book.</li>
              <li><i class="icofont-check-circled"></i> Read some book .</li>
              <li><i class="icofont-check-circled"></i> Download every book you like.</li>
            </ul>
            <p>
              Welcome 
            </p>
            <a href="about.html" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->







    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Benefits of Reading</h3>
              <h2>Why You Should Read Every Day ? </h2>
			  <hr><hr>
			  <p>
              Everything you read fills your head with new bits of information, 
			  and you never know when it might come in handy.
			  The more knowledge you have, the better-equipped you are to tackle any challenge you’ll ever face.
              </p>
             
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                   
                    <h4>Memory Improvement</h4>
                    <p>When you read a book, 
					you have to remember an assortment of characters,
					their backgrounds, ambitions, history, and nuances, That’s a fair bit to remember,
					but brains are marvellous things and can remember these things with relative ease.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    
                    <h4>Mental Stimulation</h4>
                    <p>Studies have shown that staying mentally stimulated can slow the progress of (or possibly even prevent) Alzheimer’s and Dementia ,
					since keeping your brain active and engaged prevents it from losing power.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                 
                    <h4>Improved Focus and Concentration</h4>
                    <p>When you read a book,
					all of your attention is focused on the story—the rest of the world just falls away, 
					and you can immerse yourself in every fine detail you’re absorbing.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

   




   


<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Aristotle</h3>
              <h4>philosopher</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                It was said to Aristotle: How do you judge a person? He replied: I ask him how many books he reads and what does he read?.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Abbas Mahmoud Al-Akkad</h3>
              <h4>Egyptian writer, thinker, journalist and poet</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                The guides tell you: Read what will benefit you, but I say: Rather, benefit from what you read.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Naguib Mahfouz</h3>
              <h4>Egyptian novelist and writer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                The biggest defeat in my life is to deny me the pleasure of reading after my poor eyesight.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Albert Einstein</h3>
              <h4>German physicist</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Anyone who reads a lot and uses their brain very little falls into lazy habits of thinking.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->





   <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Teams</h2>
          <p>Our Teams </p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Majdi AL-lawama</h4>
                <span>Programmer - Web Developer </span>
                <p>
                  I study computer science at Al-Hussein Bin Talal University, 
				  I am from Jordan ,
				  21 years old,
				  and I work in developing web sites
                 <br><br> phone : +962 775 677 465   
			   </p>
                <div class="social">
                  
                  <a href="https://www.facebook.com/profile.php?id=100003484730025"><i class="icofont-facebook"></i></a>
                  <a href="https://instagram.com/lawama_majdi?igshid=1ae62ged9lzo7"><i class="icofont-instagram"></i></a>
                  
                </div>
              </div>
            </div>
          </div>

         

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/hazem.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Hazem Ahmad </h4>
                <span>Web / Mob Developer</span>
                <p>
                  Programmer and Trainer in https://beprogrammer.org/
                <br><br>phone : +962 775 941 376
				</p>
                <div class="social">
               
                  <a href="https://www.facebook.com/beprogrammer.org"><i class="icofont-facebook"></i></a>
                  <a href="https://www.instagram.com/beprogrammerorg/"><i class="icofont-instagram"></i></a>
                 
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

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