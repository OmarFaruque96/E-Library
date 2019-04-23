<?php
	
    session_start();
    include('connection.php');

    $session_data = $_SESSION['email'];
    $topic_id = $_GET['topic_id'];
    $course_id = $_GET['course_id'];

    if($session_data == ""){
        header("Location:index.php");
    }
    else{
        
        $query_topic_pdf_list = "Select notes.*,person.person_name from course NATURAL JOIN topic NATURAL JOIN notes NATURAL JOIN person Where notes.topic_id = $topic_id and uploader_id = person.person_id";
        $result = mysqli_query($conn, $query_topic_pdf_list);
        
        $query_topic = "Select * from topic where topic_id = $topic_id";
        $result_topic = mysqli_query($conn, $query_topic);
        $row_topic = mysqli_fetch_assoc($result_topic);
        $topic_name = $row_topic['topic_name'];
        
        $query_course = "Select * from course where course_id = $course_id";
        $result_course = mysqli_query($conn, $query_course);
        $row_course = mysqli_fetch_assoc($result_course);
        $course_title = $row_course['course_title'];

        if(isset($_POST['submit'])){
            $search_data = $_POST['search'];
            header("Location:search_page.php?search_data=$search_data");
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
    <!-- <div id="preloader">
        <div class="spinner"></div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
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
                                <form action="" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit" name ="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
							<form method="post">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.php">Profile</a>
                                            <a class="dropdown-item" href="Upload.php">Upload</a>
                                            <button class="dropdown-item"name="logout_button">Logout</button>
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


    <!-- ##### Regular Page Area Start ##### -->
    <div class="regular-page-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content">
                        <h4><?php echo $course_title ?></h4>
                    </div>
                    <!-- Grid row -->
                    <!-- Page Content -->
                    <div class="container">

                        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0"><?php $topic_name ?> PDF</h1>

                        <hr class="mt-2 mb-5">

                        <div class="row text-center text-lg-left">

                        <?php if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                $person_name = $row['person_name'];
                                $note_title = $row['notes_title'];
                                $note_pdf_link = $row['notes_pdf_link'];
                        ?>

                            <div class="col-lg-3 col-md-4 col-6">

                                <img class="img-fluid img-thumbnail" src="img/book-cover.jpg" alt="">
                                <h4 class="text-center my-3"><?php echo $note_title ?><br>#Uploaded By <?php echo $person_name ?></h4>
                                <div style="padding: 10px 10px" align="center">
                                    <a class="btn btn-md-4 btn-success" href="<?php echo $note_pdf_link ?>">Download</a>
                                </div>

                            </div>
                        <?php   } 
                            }
                        ?>

                        </div>
                        <!-- /.container -->
                    </div>
                </div>
            </div>
        </div>

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
                    <a href="#"><i class="fa fa-faceTopic" aria-hidden="true"></i></a>
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