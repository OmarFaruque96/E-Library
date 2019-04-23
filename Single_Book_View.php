<?php
	session_start();
    include('connection.php');

    $book_id = $_GET['book_id'];
    $session_data = $_SESSION['email'];
    if($session_data == ""){
        header("Location:index.php");
    }
    else{

        $query = "Select * From books Where books_id = $book_id";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $book_id = $row['books_id'];
            $book_title = $row['books_title'];
            $book_description = $row['books_description'];
            $book_author = $row['books_author'];
            $book_pdf_link = $row['books_pdf_link'];
            $book_view_pdf_link = $row['books_view_pdf_link'];
        }

        if(isset($_POST['logout_button'])){
          session_destroy();
          header('Location:index.php');
        }
	}
?>
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
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt="">EduSolution</a>

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
                                <li><a href="#">Books and Notes</a>
                                    <ul class="dropdown">
										<li><a href="#">English Medium</a>
											<ul class="dropdown">
													<li><a href="">Class 1-7</a>
														<ul class="dropdown">
																<li><a href="SubjectList.php?data=english_Class-1">Class 1</a></li>
																<li><a href="SubjectList.php?data=english_Class-2">Class 2</a></li>
																<li><a href="SubjectList.php?data=english_Class-3">Class 3</a></li>
																<li><a href="SubjectList.php?data=english_Class-4">Class 4</a></li>
																<li><a href="SubjectList.php?data=english_Class-5">Class 5</a></li>
																<li><a href="SubjectList.php?data=english_Class-6">Class 6</a></li>
																<li><a href="SubjectList.php?data=english_Class-7">Class 7</a></li>
														</ul>
													</li>
													<li><a href="">O-Level</a>
														<ul class="dropdown">
															<li><a href="SubjectList.php?data=english_Class-8">Class 8</a></li>
															<li><a href="SubjectList.php?data=english_Class-9">Class 9</a></li>
															<li><a href="SubjectList.php?data=english_Class-10">Class 10</a></li>
														</ul>
													</li>
													<li><a href="">A-Level</a>
														<ul class="dropdown">
															<li><a href="SubjectList.php?data=english_Class-11">Class 11</a></li>
															<li><a href="SubjectList.php?data=english_Class-12">Class 12</a></li>
														</ul>
													</li>
											</ul>
										</li>
										<li><a href="#">Bangla Medium</a>
											<ul class="dropdown">
													<li><a href="">Primary</a>
														<ul class="dropdown">
																<li><a href="SubjectList.php?data=bangla_Class-1">Class 1</a></li>
																<li><a href="SubjectList.php?data=bangla_Class-2">Class 2</a></li>
																<li><a href="SubjectList.php?data=bangla_Class-3">Class 3</a></li>
																<li><a href="SubjectList.php?data=bangla_Class-4">Class 4</a></li>
																<li><a href="SubjectList.php?data=bangla_Class-5">Class 5</a></li>
														</ul>
													</li>
													<li><a href="">Secondary</a>
														<ul class="dropdown">
																<li><a href="SubjectList.php?data=bangla_Class-6">Class 6</a></li>
																<li><a href="SubjectList.php?data=bangla_Class-7">Class 7</a></li>
																<li><a href="SubjectList.php?data=bangla_Class-8">Class 8</a></li>
																<li><a href="SubjectList.php?data=bangla_Class-9">Class 9</a></li>
																<li><a href="SubjectList.php?data=bangla_Class-10">Class 10</a></li>
														</ul>
													</li>
													<li><a href="">Higher Secondary</a>
														<ul class="dropdown">
																<li><a href="SubjectList.php?data=bangla_Class-11">Class 11</a></li>
																<li><a href="SubjectList.php?data=bangla_Class-12">Class 12</a></li>
														</ul>
													</li>
											</ul>
										</li>
                                        <li><a href="single-course.html">Undergraduate</a>
											<ul class="dropdown">
													<li><a href="">Engineering</a>
														<ul class="dropdown">
																<li><a href="SubjectList.php?data=undergrad_CSE">CSE</a></li>
																<li><a href="SubjectList.php?data=undergrad_EEE">EEE</a></li>
																<li><a href="SubjectList.php?data=undergrad_CTE">CTE</a></li>
																<li><a href="SubjectList.php?data=undergrad_IPE">IPE</a></li>
														</ul>
													</li>
													<li><a href="">BBA</a>
														<ul class="dropdown">
																<li><a href="SubjectList.php?data=undergrad_SUBJECT-01">Subject - 01</a></li>															
														</ul>
													</li>
													<li><a href="">Economics</a>
														<ul class="dropdown">
																<li><a href="SubjectList.php?data=undergrad_ECONOMICS">Economics</a></li>
														</ul>
													</li>
													<li><a href="">Business Studies</a>
														<ul class="dropdown">
																<li><a href="SubjectList.php?data=undergrad_BUSINESS">Business</a></li>
														</ul>
													</li>
											</ul>
										</li>
										<li><a href="#">Others</a>
											<ul class="dropdown">
													<li><a href="SubjectList.php?data=grad_IELTS">IELTS</a></li>
													<li><a href="SubjectList.php?data=grad_GRE">GRE</a></li>
													<li><a href="SubjectList.php?data=grad_TOFEL">TOFEL</a></li>
													<li><a href="SubjectList.php?data=grad_STORY">Story</a></li>
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
                                    <button type="submit" name ="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
							<form method="post">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $session_data?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.php">Profile</a>
                                            <a class="dropdown-item" href="Upload.php">Account Info</a>
                                            <button class="dropdown-item" name="logout_button">Logout</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="img/profile/omar.jpg" alt="">
                                </div>
							</form>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <div class="regular-page-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content">
                        <h3>Title:<?php echo $book_title?></h3>
						<h4>Author: <?php echo $book_author?></h4>
                        <p><b>Description:</b> <?php echo $book_description?></p>
                    </div>
					<!-- Grid row -->
					<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
						<iframe class="embed-responsive-item" src="https://docs.google.com/viewer?url=http://www.pdf995.com/samples/pdf.pdf&embedded=true" frameborder="0"  width="100%" allowfullscreen> </iframe>
					</div>
                </div>
            </div>
        </div>
    </div>

	<!--######## footer section will be added here from index.php page ########-->


    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
</body>

</html>