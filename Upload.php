<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EduSolution | Home</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">

</head>
<style>
	hr{
		border: 1px solid orange;
	}
	.padd{
		padding:0px 20px;
	}
</style>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!--  Header Area Start -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +880 1773 357272/a>
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
                                <li><a href="index.html">Home</a></li>
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
    <!--  Upload area Start  -->
    
<div class="container">
			<hr>
			<div class="row">
				<div class="col-3">
					
				</div>
				<div class="col-6">
					<button class="btn btn-md btn-info" data-toggle="collapse" data-target="#videoUpload">Video Upload</button>    <button class="btn btn-md btn-warning" data-toggle="collapse" data-target="#pdfUpload">Pdf Upload</button>    <button class="btn btn-md btn-success" data-toggle="collapse" data-target="#photosUpload"> Photos Upload</button>	
				</div>
				<div class="col-3">
					
				</div>
			</div>
			<hr>
			<!--option provide for where to upload a file-->
			<div id="videoUpload" class="collapse">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-danger">
							<div class="row" style="padding:5px 20px">
								<div class="col-xs-3 padd" >
									<select class="form-control" name="" id="" >
										<option value="" selected> Select Medium</option>
										<option value="" >Bangla Medium</option>
										<option value="" > English Medium</option>
										<option value="" > Undergraduate</option>
										<option value="" > Graduate</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
									<select class="form-control" name="" id="" >
										<option value="" selected> Select Class</option>
										<option value="" >one</option>
										<option value="" > two</option>
										<option value="" > three</option>
										<option value="" > four</option>
										<option value="" > five</option>
										<option value="" > six</option>
										<option value="" > seven</option>
										<option value="" > eight</option>
										<option value="" > nine</option>
										<option value="" > ten</option>
										<option value="" > eleven</option>
										<option value="" > twelve</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
									<select class="form-control" name="" id="" >
										<option value="" selected> Select Subject</option>
										<option value="" >Bangla</option>
										<option value="" > English</option>
										<option value="" > Math</option>
										<option value="" > Physics</option>
										<option value="" > Chemestry</option>
										<option value="" > Algorithm</option>
										<option value="" > C Programming</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
									<select class="form-control" name="" id="" >
										<option value="" selected> Select topic</option>
										<option value="" >Introduction</option>
										<option value="" > Array</option>
										<option value="" > Loop</option>
										<option value="" > Function</option>
										<option value="" > Pointer</option>
										<option value="" > File</option>
										
									</select>
								</div>
							</div>
						</a>
						
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-success">
						<div class="form row">
						<div class="col-10">
							<input class="form-control" type="text" placeholder="enter the video link here">
						</div>
						<div class="col-2">
							<button class="btn btn-md btn-info" type="submit">Upload</button>
						</div>
						</div>
						</a>
					</div>
			</div>
			
			<!--Pdf file Upload Collaspe code Section here -->
				<div id="pdfUpload" class="collapse">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-danger">
							<div class="row" style="padding:5px 20px">
								<div class="col-xs-3 padd" >
									<select class="form-control" name="" id="" >
										<option value="" selected> Select Medium</option>
										<option value="" >Bangla Medium</option>
										<option value="" > English Medium</option>
										<option value="" > Undergraduate</option>
										<option value="" > Graduate</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
									<select class="form-control" name="" id="" >
										<option value="" selected> Select Class</option>
										<option value="" >one</option>
										<option value="" > two</option>
										<option value="" > three</option>
										<option value="" > four</option>
										<option value="" > five</option>
										<option value="" > six</option>
										<option value="" > seven</option>
										<option value="" > eight</option>
										<option value="" > nine</option>
										<option value="" > ten</option>
										<option value="" > eleven</option>
										<option value="" > twelve</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
									<select class="form-control" name="" id="" >
										<option value="" selected> Select Subject</option>
										<option value="" >Bangla</option>
										<option value="" > English</option>
										<option value="" > Math</option>
										<option value="" > Physics</option>
										<option value="" > Chemestry</option>
										<option value="" > Algorithm</option>
										<option value="" > C Programming</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
									<select class="form-control" name="" id="" >
										<option value="" selected> Select topic</option>
										<option value="" >Introduction</option>
										<option value="" > Array</option>
										<option value="" > Loop</option>
										<option value="" > Function</option>
										<option value="" > Pointer</option>
										<option value="" > File</option>
										
									</select>
								</div>
							</div>
						</a>
						
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-success">
						<div class="row">
							<!--section for upload pdf file here -->
							<div class="col-10">
								<!--#############-->
								<form method=" " action=" ">
									<input type="file" name="" accept="image/*,.pdf">
								</form>
							</div>
							<div class="col-2">
								<button class="btn btn-md btn-info" type="submit">Upload</button>
							</div>
						</div>
						</a>
					</div>
					<!--Copy the previous code and paste here. but give a option for choose file instead of paste the link and upload , user will-->
					
				</div>
			<!--Photos file Upload Collaspe code Section here -->
				<div id="photosUpload" class="collapse">
					<div class="alert alert-danger">
					  <strong>Wait a Min!</strong> Option is under construction right now.
					</div>
					<!--Copy the previous code and paste here. but give a option for choose file instead of paste the link and upload , user will-->
				</div>
			
          
</div>

    <!--  Footer Area End  -->

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/google-map/map-active.js"></script>
</body>

</html>