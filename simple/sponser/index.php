<?php
session_start();
require_once 'database/connection.php';

if (!isset($_SESSION['id'],$_SESSION['email']) && $_SESSION['email'] !=='admin'){
    header('Location: adminloggin.php');
    exit();
}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/meanmenu.css">
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<!-- header start -->
<header>
 <div class="header-area">
  <div class="container-fluid">
    <div class="row align-items-center">
	 <div class="col-xl-3 col-lg-2">
	   <div class="logo"><a href="#"><img src="img/logo1.png" alt="" />
	   </a></div>
	 </div>
	     <div class="col-xl-9 col-lg-10">
		   <div class="hire-btn d-none d-lg-block float-right">
		     <a href="loggedout.php">log out</a>
		   </div>
		  <div class="main-menu float-right">
		   <nav id="mobile-menu-active">
             <ul>
             	<li><a href="#">Home</a></li>
             	<li><a href="#">About us</a></li>
             	<li><a href="#">Portfolio</a></li>
             	<li><a href="#">Team</a></li>
             	<li><a href="#">Services</a></li>
             	<li><a href="#">Clients</a></li>
             </ul>
		   </nav>
		  </div>
		  <div class="mobile-menu"></div>
		 </div>
	</div>
  </div>
 </div>
</header>
<!-- header end -->
<!-- slider-area start -->
<div class="slider-area">
 <img src="" alt="" />
  <div class="slider-active">
   <div class="single-active d-flex align-items-center justify-content-center text-center"
   style="background-image:url(img/slider1.jpg)">
   <div class="slider-inner">
	   <h2>We are Monu<br>Creative Agency</h2>
	    <p>We create Awesome and Powerful Websits for business!</p>
		 <a class="btn"href="#">Purchase Now</a>
   </div>
   </div>
      <div class="single-active d-flex align-items-center justify-content-center text-center"
   style="background-image:url(img/slider1.jpg)">
   <div class="slider-inner">
      <div class="slider-icon">
	 <a href="#"><i class="fab fa-twitter"></i></a>
	 <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
	 <a href="https://mail.google.com/mail/u/0/?tab=wm#inbox"><i class="fab fa-google"></i></a>
	 <a href="#"><i class="fab fa-viber"></i></a>
	</div>
	   <h2>We are Monu<br>Creative Agency</h2>
	    <p>We create Awesome and Powerful Websits for business!</p>
		 <a class="btn"href="#">Purchase Now</a>
   </div>
   </div>
      <div class="single-active d-flex align-items-center justify-content-center text-center"
   style="background-image:url(img/slider1.jpg)">
   <div class="slider-inner">
      <div class="slider-icon">
	 <a href="#"><i class="fab fa-twitter"></i></a>
	 <a href="#"><i class="fab fa-facebook"></i></a>
	 <a href="#"><i class="fab fa-google"></i></a>
	 <a href="#"><i class="fab fa-viber"></i></a>
	</div>
	   <h2>We are Monu<br>Creative Agency</h2>
	    <p>We create Awesome and Powerful Websits for business!</p>
		 <a class="btn"href="#">Purchase Now</a>
   </div>
   </div>
  </div>
</div>
<!-- slider-area end -->

<!-- features-areas strat -->

<div class="features-area">
  <div class="container">
   <div class="theme-bj">
    <div class="row">
	  <div class="col-xl-4 col-lg-4">
	    <div class="single-features text-center">
		  <i class="ti-pencil-alt"></i>
		   <h3>Flexible Solutions</h3>
		   <p>Lorem ipsum dolor sit amet,con secteture<br> 
		   adipiscan elitlorem ipsum dolor</p>
		</div>
	  </div>
	  <div class="col-xl-4 col-lg-4">
	    <div class="single-features text-center">
		  <i class="ti-pencil-alt"></i>
		   <h3>Flexible Solutions</h3>
		   <p>Lorem ipsum dolor sit amet,con secteture<br> 
		   adipiscan elitlorem ipsum dolor</p>
		</div>
	  </div>
	  <div class="col-xl-4 col-lg-4">
	    <div class="single-features text-center">
		  <i class="ti-pencil-alt"></i>
		   <h3>Flexible Solutions</h3>
		   <p>Lorem ipsum dolor sit amet,con secteture <br> 
		   adipiscan elitlorem ipsum dolor</p>
		</div>
	  </div>
	</div>
	</div>
  </div>
</div>
<!-- features-areas end -->
<div class="about-area pt-100 pb-60">
  <div class="container">
    <div class="row">
	  <div class="col-xl-6 col-lg-6">
	    <div class="about-text">
		  <h3>We are the leader in Workpress<br> Theme</h3>
		   <p>Lorem ipsum dolor sit amet, consecteture adipiscan elit sed do
		   euismod tempor incididunt ut labour et dolor magna aliqua.
		   ut enim ad minim veniam.lorem ipsum dolor sit amet,consecteture 
		   adipiscan elit,</p>
		   <a href="#" class="btn">Read more</a>
		</div>
	  </div>
	  <div class="col-xl-6 col-lg-6">
	   <div class="about-image">
	     <img src="img/bg/mac.png" alt="" />
	   </div>
	  </div>
	</div>
  </div>
</div>

<div class="subscribe-area pt-70 pb-50"  style="background-image:url(img/bg/bg1.jpg)">>
 <div class="container">
 <div class="row">
  <div class="col-xl-12">
    <div class="area-title mb-60 text-center">
	 <h3>Are you ready to be success with us?</h3>
	 <p>Tell us about your story and your project</p>
	</div>
  </div>
 </div>
 	<div class="row">
 		<div class="col-xl-10 offset-xl-1">
		  <div class="subscribe-form">
		   <form action="#">
		     <input type="text" placeholder="name" />
		     <input type="email" placeholder="email" />
		     <input type="text" placeholder="subject" />
			 <button type="submit">subscribe</button>
		   </form>
		  </div>
		</div>
 	</div>
 </div>
</div>
<!-- service-area -->
<div class="service-area pt-100 pb-70">
  <div class="container-fluid">
    <div class="row">
	  <div class="col-xl-3 col-lg-6 col-md-6">
	    <div class="service-wrapper text-center mb-30">
		<i class="ti-ruler-pencil"></i>
		 <h3>Web Design</h3>
		 <p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt ipsum dolor sit amet,consecteture
		   adipiscan.</p>
		   <a href="#" class="btn">View Services</a>
		</div>
	  </div>
	       <div class="col-xl-3 col-lg-6 col-md-6">
	    <div class="service-wrapper text-center mb-30">
		<i class="ti-ruler-pencil"></i>
		 <h3>Web Design</h3>
		 <p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt ipsum dolor sit amet,consecteture
		   adipiscan.</p>
		   <a href="#" class="btn">View Services</a>
		</div>
	  </div>
	     <div class="col-xl-3 col-lg-6 col-md-6">
	    <div class="service-wrapper text-center mb-30">
		<i class="ti-ruler-pencil"></i>
		 <h3>Web Design</h3>
		 <p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt ipsum dolor sit amet,consecteture
		   adipiscan.</p>
		   <a href="#" class="btn">View Services</a>
		</div>
	  </div>
	  <div class="col-xl-3 col-lg-6 col-md-6">
	    <div class="service-wrapper text-center mb-30">
		<i class="ti-ruler-pencil"></i>
		 <h3>Web Design</h3>
		 <p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt ipsum dolor sit amet,consecteture
		   adipiscan.</p>
		   <a href="#" class="btn">View Services</a>
		</div>
	  </div>
	</div>
  </div>
</div>
<!-- pricing-area -->
<div class="pricing-area pt-90 pb-60">
  <div class="container">
  <div class="row">
      	<div class="col-xl-12">
		  <div class="area-title text-center mb-60">
		   <h3>Our Pricing</h3>
		   <p>Lorem ipsum dolor sit amet,consecteture adipiscan elit.</p>
		   </div>
		</div>
      </div>
    <div class="row justify-content-between">
	  <div class="pricing-item mb-30">
	    <div class="pricing-wrapper pb-40 text-center">
		  <h3>Basic</h3>
		   <span><span>$</span>100</span>
		   <ul>
		   	<li>PSD Included</li>
		   	<li>Free Installation</li>
		   	<li>Free One Year Domain</li>
		   	<li>Free Six Months Hosting</li>
		   	<li>Full Support</li>
		   </ul>
		   <a href="#" class="btn">Purchase</a>
		</div>
	  </div>
	  <div class="pricing-item mb-30">
	    <div class="pricing-wrapper pb-40 text-center">
		  <h3>Advanced</h3>
		   <span><span>$</span>200</span>
		   <ul>
		   	<li>PSD Included</li>
		   	<li>Free Installation</li>
		   	<li>Free One Year Domain</li>
		   	<li>Free Six Months Hosting</li>
		   	<li>Full Support</li>
		   </ul>
		   <a href="#" class="btn">Purchase</a>
		</div>
	  </div>
	  <div class="pricing-item mb-30">
	    <div class="pricing-wrapper pb-40 text-center">
		  <h3>Pro</h3>
		   <span><span>$</span>300</span>
		   <ul>
		   	<li>PSD Included</li>
		   	<li>Free Installation</li>
		   	<li>Free One Year Domain</li>
		   	<li>Free Six Months Hosting</li>
		   	<li>Full Support</li>
		   </ul>
		   <a href="#" class="btn">Purchase</a>
		</div>
	  </div>
	</div>
  </div>
</div>
<!-- counter-area start -->
<div class="counter-area theme-bj pt-60 pb-30">
  <div class="container">
    <div class="row">
	  <div class="col-xl-3 col-lg-3 col-md-3">
	    <div class="counter-wrapper text-center mb-30">
		  <i class="ti-pencil-alt"></i>
		  <span class="counter">35,000</span>
		  <p>Happy Customers</p>
		</div>
	  </div>
	 

	  <div class="col-xl-3 col-lg-3 col-md-3">
	    <div class="counter-wrapper text-center mb-30">
		  <i class="ti-pencil-alt"></i>
		  <span class="counter">35,000</span>
		  <p>Happy Customers</p>
		</div>
	  </div>
	
	
	  <div class="col-xl-3 col-lg-3 col-md-3">
	    <div class="counter-wrapper text-center mb-30">
		  <i class="ti-pencil-alt"></i>
		  <span class="counter">35,000</span>
		  <p>Happy Customers</p>
		</div>
	  </div>
	   <div class="col-xl-3 col-lg-3 col-md-3">
	    <div class="counter-wrapper text-center mb-30">
		  <i class="ti-pencil-alt"></i>
		  <span class="counter">35,000</span>
		  <p>Happy Customers</p>
		</div>
	  </div>
	
	 
	  </div>
	
  </div>
</div>
</div>
<!-- team-area start -->
<div class="team-area">
  <div class="container-custom">
    <div class="row no-gutters">
	  <div class="col-xl-3 col-lg-3 col-md-6">
	    <div class="team-wrapper text-center">
		  <div class="team-image mb-30">
		   <img src="img/team/team1.jpg" alt=""/>
		  </div>
		  <div class="team-info">
		   <h3>Saiful Islam</h3>
		   <span>Web Desiginer</span>
		     <div class="team-icon">
	 <a href="#"><i class="fab fa-twitter"></i></a>
	 <a href="#"><i class="fab fa-facebook"></i></a>
	 <a href="#"><i class="fab fa-google"></i></a>
	 <a href="#"><i class="fab fa-viber"></i></a>
	</div>
		  </div>
		</div>
	  </div>
	    <div class="col-xl-3 col-lg-3 col-md-6">
	    <div class="team-wrapper text-center">
		  <div class="team-image mb-30">
		   <img src="img/team/team2.jpg" alt=""/>
		  </div>
		  <div class="team-info">
		   <h3>Rebani Roy</h3>
		   <span>Web Desiginer</span>
		     <div class="team-icon">
	 <a href="#"><i class="fab fa-twitter"></i></a>
	 <a href="#"><i class="fab fa-facebook"></i></a>
	 <a href="#"><i class="fab fa-google"></i></a>
	 <a href="#"><i class="fab fa-viber"></i></a>
	</div>
		  </div>
		</div>
	  </div>
	  <div class="col-xl-3 col-lg-3 col-md-6">
	    <div class="team-wrapper text-center">
		  <div class="team-image mb-30">
		   <img src="img/team/team3.jpg" alt=""/>
		  </div>
		  <div class="team-info">
		   <h3>Avisekh Opu</h3>
		   <span>Web Desiginer</span>
		     <div class="team-icon">
	 <a href="#"><i class="fab fa-twitter"></i></a>
	 <a href="#"><i class="fab fa-facebook"></i></a>
	 <a href="#"><i class="fab fa-google"></i></a>
	 <a href="#"><i class="fab fa-viber"></i></a>
	</div>
		  </div>
		</div>
	  </div> 
	  <div class="col-xl-3 col-lg-3 col-md-6">
	    <div class="team-wrapper text-center">
		  <div class="team-image mb-30">
		   <img src="img/team/team4.jpg" alt=""/>
		  </div>
		  <div class="team-info">
		   <h3>Dalia Rani</h3>
		   <span>Web Desiginer</span>
		     <div class="team-icon">
	 <a href="#"><i class="fab fa-twitter"></i></a>
	 <a href="#"><i class="fab fa-facebook"></i></a>
	 <a href="#"><i class="fab fa-google"></i></a>
	 <a href="#"><i class="fab fa-viber"></i></a>
	</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>
<!-- blog-area -->
<div class="blog-area pt-100 pb-70">
  <div class="container">
  <div class="col-xl-12">
		  <div class="area-title text-center mb-60">
		   <h3>blog & News</h3>
		   <p>Lorem ipsum dolor sit amet,consecteture adipiscan elit.</p>
		   </div>
		</div>
    <div class="row">
	  <div class="col-xl-4 col-lg-4">
	    <div class="latest-blog mb-30">
		  <div class="blog-thumb">
		   <a href="#"><img src="img/block/blog1.jpg " alt="" /></a>
		  </div>
		  <div class="blog-content">
		   <h3><a href="#">How To Improve Yours Sales Volume</a></h3>
		    <div class="blog-meta">
			 <span>07 May 2019</span>
			 <span class="meta-line"></span>
			</div>
			<p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt ipsum dolor sit amet,consecteture
		   adipiscan</p>
		   <a href="#" class="btn">Cotinue Reading</a>
		  </div>
		</div>
	  </div>
	    <div class="col-xl-4 col-lg-4">
	    <div class="latest-blog mb-30">
		  <div class="blog-thumb">
		   <a href="#"><img src="img/block/blog2.jpg " alt="" /></a>
		  </div>
		  <div class="blog-content">
		   <h3><a href="#">How To Improve Yours Sales Volume</a></h3>
		    <div class="blog-meta">
			 <span>07 May 2019</span>
			 <span class="meta-line"></span>
			</div>
			<p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt ipsum dolor sit amet,consecteture
		   adipiscan</p>
		   <a href="#" class="btn">Cotinue Reading</a>
		  </div>
		</div>
	  </div>  
	  <div class="col-xl-4 col-lg-4">
	    <div class="latest-blog mb-30">
		  <div class="blog-thumb">
		   <a href="#"><img src="img/block/blog3.jpg " alt="" /></a>
		  </div>
		  <div class="blog-content">
		   <h3><a href="#">How To Improve Yours Sales Volume</a></h3>
		    <div class="blog-meta">
			 <span>07 May 2019</span>
			 <span class="meta-line"></span>
			</div>
			<p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt ipsum dolor sit amet,consecteture
		   adipiscan</p>
		   <a href="#" class="btn">Cotinue Reading</a>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>
<div class="testimonial-area text-center pt-100 pb-100"style="background-image:url(img/bg/bg2.jpg)">
  <div class="container">
  	<div class="testimonial-active">
	  <div class="testimonial-item">
	    <div class="testimonial-name">
		 <h4>Theresa Rodgars</h4>
		 <span>Developer</span>
		 <p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt adipiscan elit .
		   ipsum dolor sit amet,consecteture ipsum dolor sit amet consecte
		   adipiscan.</p>
		</div>
	  </div>
	   <div class="testimonial-item">
	    <div class="testimonial-name">
		 <h4>Theresa Rodgars</h4>
		 <span>Developer</span>
		 <p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt adipiscan elit .
		   ipsum dolor sit amet,consecteture ipsum dolor sit amet consecte
		   adipiscan.</p>
		</div>
	  </div>
	   <div class="testimonial-item">
	    <div class="testimonial-name">
		 <h4>Theresa Rodgars</h4>
		 <span>Developer</span>
		 <p>Lorem ipsum dolor sit amet,consecteture adipiscan elit sed do
		   euismod tempor incididunt adipiscan elit .
		   ipsum dolor sit amet,consecteture ipsum dolor sit amet consecte
		   adipiscan.</p>
		</div>
	  </div>
	</div>
  </div>
</div>
<!-- brand-area -->
<div class="brand-area pt-100 pb-100">
	<div class="container">
		<div class="brand-active">
			<div class="single-brand">
			<a href="#"><img src="img/brand/brand-1.png" alt="" /></a>
			</div>
			<div class="single-brand">
			<a href="#"><img src="img/brand/brand-2.png" alt="" /></a>
			</div>
			<div class="single-brand">
			<a href="#"><img src="img/brand/brand-3.png" alt="" /></a>
			</div>
			<div class="single-brand">
			<a href="#"><img src="img/brand/brand-4.png" alt="" /></a>
			</div>
			<div class="single-brand">
			<a href="#"><img src="img/brand/brand-5.png" alt="" /></a>
			</div>
			<div class="single-brand">
			<a href="#"><img src="img/brand/brand-3.png" alt="" /></a>
			</div>
			<div class="single-brand">
			<a href="#"><img src="img/brand/brand-1.png" alt="" /></a>
			</div>
		</div>
	</div>
</div>
<footer class="black-bg">
<div class="footer-area pt-70 pb-40">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="footer-widget mb-30">
				 <h3>Contact Us</h3>
				 <ul class="contact-list">
				  <li>1 (800) 686-6688</li>
				  <li>info.mulidesign@gmail.com</li>
				  <li>40 Baria Sreet 133/2 </li>
				  <li>Network City,Bangladesh</li>
				 </ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="footer-widget clearfix mb-30">
				 <h3>Usefull links</h3>
				 <ul class="footer-link">
				   <li><a href="#">Home</a></li>
				   <li><a href="#">About Us</a></li>
				   <li><a href="#">Services</a></li>
				   <li><a href="#">Single Services</a></li>
				   <li><a href="#">Work</a></li>
				   <li><a href="#">Blogs</a></li>
				   <li><a href="#">Contact</a></li>
				   <li><a href="#">Privacy</a></li>
				   <li><a href="#">Policy</a></li>
				 </ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="footer-widget mb-30">
				 <h3>Blog & News</h3>
				  <ul>
				    <li>
					<div class="news-thumb">
					 <a href="#"><img src="img/block/blog1.jpg" alt="" /></a>
					</div>
					  <div class="news-title">
					   <h4><a href="#">How to Improve Your Sales Volume</a></h4>
					    <span>20 January 2019</span>
					  </div>
					</li>
				  </ul>
				   <ul class="footer-blog">
				    <li>
					<div class="news-thumb">
					 <a href="#"><img src="img/block/blog2.jpg" alt="" /></a>
					</div>
					  <div class="news-title">
					   <h4><a href="#">How to Improve Your Sales Volume</a></h4>
					    <span>20 January 2019</span>
					  </div>
					</li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="copyright-area">
	<div class="container">
		<div class="copyright-border">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="copyright-text">
					  <p>copyright @2019 Mugli.All Rights Reserved</p>
					</div>
				</div>
				<div class="footer-menu  text-center text-md-right">
					<div class="col-xl-6 col-lg-6 col-md-6">
					 <span>
					  <ul>
					  	<li><a href="#">Privacy </a></li>
					  	<li><a href="#">Contact</a></li>
					  	<li><a href="#">Support</a></li>
					  </ul>
					 </span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</footer>

<div class="basic">
	<div class="container">
		<div class="row">
			<div class="col-xl-4">
			  <div class="team-box">
                 <div class="team-img">
				  <img src="img/block/blog1.jpg" alt="" />
				   <div class="team-icon">
				    <a href="#"><i class="fab fa-facebook"></i></a>
				    <a href="#"><i class="fab fa-facebook"></i></a>
				    <a href="#"><i class="fab fa-facebook"></i></a>
				    <a href="#"><i class="fab fa-facebook"></i></a>
				   </div>
				 </div>	
                         <div class="team-content text-center">
						   <h4>Md Roni</h4>
						   <span>This is Honted place</span>
						 </div>				 
			  </div>
			</div>
		</div>
	</div>
</div>


  
  
  
  
  
  
  
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.meanmenu.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
