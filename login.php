<?php 
  session_start();
  include("connection.php");

  if(isset($_POST['login_button'])){
    $email      = $_POST['email'];
    $type       = $_POST['type'];
    $password   = $_POST['password'];


    $query  = "Select * from person where person_email='$email' and person_password='$password' and person_type='$type'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
      $_SESSION['email'] = $email;
      header("Location: index-login.php");
      exit;
    }
  }

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EduSolution | Home</title>
    <link rel="icon" href="img/core-img/favicon.ico">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +880 1773 357272</a>
                <a href="#"><span>Email:</span> engineerbrother.cse@gmail.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a> 

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Books</a>
                                    <ul class="dropdown">
										<li><a href="#">English Medium</a>
											<ul class="dropdown">
													<li><a href="">O-Level</a></li>
													<li><a href="">A-Level</a></li>
											</ul>
										</li>
										<li><a href="#">Bangla Medium</a>
											<ul class="dropdown">
													<li><a href="">Primary</a></li>
													<li><a href="">Secondary</a></li>
													<li><a href="">Higher Secondary</a></li>
											</ul>
										</li>
                                        <li><a href="single-course.html">Undergraduate</a>
											<ul class="dropdown">
													<li><a href="">CSE</a></li>
													<li><a href="">EEE</a></li>
													<li><a href="">ECE</a></li>
													<li><a href="">BBA</a></li>
											</ul>
										</li>
										<li><a href="#">Others</a>
											<ul class="dropdown">
													<li><a href="">IELTS</a></li>
													<li><a href="">GRE</a></li>
													<li><a href="">TOFEL</a></li>
													<li><a href="">Story</a></li>
											</ul>
										</li>
                                    </ul>
                                </li>
                                <li><a href="#">Notes & Slides</a>
                                    <ul class="dropdown">
										<li><a href="#">English Medium</a>
											<ul class="dropdown">
													<li><a href="">O-Level</a></li>
													<li><a href="">A-Level</a></li>
											</ul>
										</li>
										<li><a href="#">Bangla Medium</a>
											<ul class="dropdown">
													<li><a href="">Primary</a></li>
													<li><a href="">Secondary</a></li>
													<li><a href="">Higher Secondary</a></li>
											</ul>
										</li>
                                        <li><a href="single-course.html">Undergraduate</a>
											<ul class="dropdown">
													<li><a href="">CSE</a></li>
													<li><a href="">EEE</a></li>
													<li><a href="">ECE</a></li>
													<li><a href="">BBA</a></li>
											</ul>
										</li>
										<li><a href="#">Others</a>
											<ul class="dropdown">
													<li><a href="">IELTS</a></li>
													<li><a href="">GRE</a></li>
													<li><a href="">TOFEL</a></li>
													<li><a href="">Story</a></li>
											</ul>
										</li>
                                    </ul>
                                </li>
                                
                                <li><a href="">Question Bank</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="signup.php" ><button class="btn" > </button>Register</a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
	
	<!-- sign up-->
		  
	
		<div class="container">
				<br>  <p class="text-center">Login to access your account</a></p>
				<hr>

				<div class="card bg-light">
				<article class="card-body mx-auto" style="max-width: 400px;">
					<h4 class="card-title mt-3 text-center">Login in with your Account </h4>
					<p class="text-center">Get started with your free account</p>
					<!-- <p>
						<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
						<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
					</p> -->
					<p class="divider-text">
						<span class="bg-light">OR</span>
					</p>
					<form action="" method="post"> 
					<!-- form-group// -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						 </div>
						<input name="email" class="form-control" placeholder="Email address" type="email">
					</div> 
					
					<!-- form-group// -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-building"></i> </span>
						</div>
						<select class="form-control" name="type">
							<option selected=""> Select User Type</option>
							<option value="Teacher">Teacher</option>
							<option value="Student">Student</option>
							<option value="Guest">Guest</option>
						</select>
					</div> <!-- form-group end.// -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						</div>
						<input class="form-control" name="password" placeholder="Enter your password" type="password">
					</div>
					 <!-- form-group// -->                                      
					<div class="form-group">
						<button type="submit" name="login_button" class="btn btn-primary btn-block">Log In</button>
					</div> <!-- form-group// -->      
						<p class="text-center">Forget you password ? <a href="forgetPassword.php">Forget Password</a> </p>                                                                 
				</form>
				</article>
				</div> <!-- card.// -->

		</div> 
		<!--container end.//-->

		<br><br>
	
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <!-- <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a> -->
                        </div>                     
                        <p><a href="#">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="" aria-hidden="true"></i> by <a href="" target="_blank">Engineer Brother Company</a>
						</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +880 1773 357272</a>
                <a href="#"><span>Email:</span> engineerbrother.cse@gmail.com</a>
            </div>
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
</body>

</html>