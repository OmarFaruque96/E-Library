<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>Clever - Education &amp; Courses Template | Regular Page</title>

	<!-- Favicon -->
	<link rel="icon" href="img/core-img/favicon.ico">

	<!-- Stylesheet -->
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="spinner"></div>
	</div>

	<!-- ##### Header Area Start ##### -->
	<header class="header-area">

		<!-- Top Header Area -->
		<div class="top-header-area d-flex justify-content-between align-items-center">
			<!-- Contact Info -->
			<div class="contact-info">
				<a href="#"><span>Phone:</span> +44 300 303 0266</a>
				<a href="#"><span>Email:</span> info@clever.com</a>
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
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Pages</a>
									<ul class="dropdown">
										<li><a href="index.html">Home</a></li>
										<li><a href="courses.html">Courses</a></li>
										<li><a href="single-course.html">Single Courses</a></li>
										<li><a href="instructors.html">Instructors</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-details.html">Single Blog</a></li>
										<li><a href="regular-page.html">Regular Page</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</li>
								<li><a href="courses.html">Courses</a></li>
								<li><a href="instructors.html">Instructors</a></li>
								<li><a href="blog.html">Blog</a></li>
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
								<a href="#" class="btn">Register</a>
								<a href="index-login.html" class="btn active">Login</a>
							</div>

						</div>
						<!-- Nav End -->
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- ##### Header Area End ##### -->

	<!-- ##### Regular Page Area Start ##### -->
	<div class="regular-page-area section-padding-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="page-content">
						<h4>Introduction with C </h4>
						<p>C is a procedural programming language. It was initially developed by Dennis Ritchie between 1969 and 1973. It was mainly developed as a system programming language to write operating system. The main features of C language include low-level access to memory, simple set of keywords, and clean style, these features make C language suitable for system programming like operating system or compiler development.
							Many later languages have borrowed syntax/features directly or indirectly from C language.
							Like syntax of Java, PHP, JavaScript and many other languages is mainly based on C language. C++ is nearly a superset of C language (There are few programs that may compile in C, but not in C++)..</p>
					</div>
					<!-- Grid row -->
					<div class="row">

						<?php 
							$sql = "SELECT video_id, video_title, video_link FROM video";
                            $result = $conn->query($sql);
							$videos = [];
							
							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									$videos[] = [
										'id' => $row["video_id"],
										'title' => $row["video_title"],
										'content' => $row["video_link"]
									];
								}
							} else {
								echo "0 results";
							}
						?>
						
						<?php foreach ($videos as $video) { ?>

						<!-- Grid column -->
						<div class="col-lg-4 col-md-12 mb-4">
							<!--Modal: Name-->
							<div class="modal fade" id="modal<?php echo $video['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<!--Content-->
									<div class="modal-content">
										<!--Body-->
										<div class="modal-body mb-0 p-0">
											<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
												<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video['content'] ?>" allowfullscreen></iframe>
											</div>
										</div>
										<!--Footer-->
										<div class="modal-footer justify-content-center">
											<span class="mr-4">Spread the word!</span>
											<!--Facebook-->
											<a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
											<!--Twitter-->
											<a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
											<!--Google +-->
											<a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
											<!--Linkedin-->
											<a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

											<button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
										</div>
									</div>
									<!--Content-->

								</div>
							</div>
							<!--Modal: Name-->

							<a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video" data-toggle="modal" data-target="#modal<?php echo $video['id'];?>"></a>
							<h3 class="text-center my-3"><?php echo $video['title'] ?></h3>

						</div>
						<!-- Grid column -->
						
						<?php } ?>

					</div>
					<!-- Grid row -->

					<!-- pagination section-->
					<div class="row">

						<div class="col-lg-4 col-md-12 mb-4">
							<!-- nothing here-->
						</div>
						<div class="col-lg-4 col-md-12 mb-4">
							<ul class="pagination pg-blue">
								<li class="page-item disabled">
									<a class="page-link" tabindex="-1">Previous</a>
								</li>
								<li class="page-item active"><a class="page-link">1</a></li>
								<li class="page-item ">
									<a class="page-link">2 <span class="sr-only">(current)</span></a>
								</li>
								<li class="page-item ">
									<a class="page-link">3 <span class="sr-only"></span></a>
								</li>
								<li class="page-item disabled">
									<a class="page-link">4 <span class="sr-only"></span></a>
								</li>
								<li class="page-item disabled">
									<a class="page-link">5 <span class="sr-only"></span></a>
								</li>
								<li class="page-item disabled">
									<a class="page-link">6 <span class="sr-only"></span></a>
								</li>
								<li class="page-item disabled"><a class="page-link">7</a></li>
								<li class="page-item">
									<a class="page-link">Next</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-12 mb-4">
							<!-- nothing here-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ##### Regular Page Area End ##### -->

	<!-- ##### Footer Area Start ##### -->
	<footer class="footer-area">
		<!-- Top Footer Area -->
		<div class="top-footer-area">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Footer Logo -->
						<div class="footer-logo">
							<a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
						</div>
						<!-- Copywrite -->
						<p><a href="#">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Bottom Footer Area -->
		<div class="bottom-footer-area d-flex justify-content-between align-items-center">
			<!-- Contact Info -->
			<div class="contact-info">
				<a href="#"><span>Phone:</span> +44 300 303 0266</a>
				<a href="#"><span>Email:</span> info@clever.com</a>
			</div>
			<!-- Follow Us -->
			<div class="follow-us">
				<span>Follow us</span>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>
		</div>
	</footer>
	<!-- ##### Footer Area End ##### -->

	<!-- ##### All Javascript Script ##### -->
	<!-- jQuery-2.2.4 js -->
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<!-- All Plugins js -->
	<script src="js/plugins/plugins.js"></script>
	<!-- Active js -->
	<script src="js/active.js"></script>
</body>

</html>