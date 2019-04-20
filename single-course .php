<?php
    // session_start();
    include('connection.php');

    $data = $_GET['subject'];
    $session_data = $_GET['session_data'];

    if($session_data == ""){
        header("Location:index.php");
    }
    else{
        // Getting the course inforamtion from single_course table and hardcore course_id, this course_id = 1 value will change when full sequence will be impletmented
        $course_query="SELECT course.* FROM course NATURAL JOIN subject
        WHERE course.course_title='$data' and subject.subject_name ='$data'";
        $course_result=mysqli_query($conn,$course_query);
        if(mysqli_num_rows($course_result) > 0){
            $row = mysqli_fetch_assoc($course_result);
            $course_title = $row['course_title'];
            $course_description = $row['course_description'];
            $course_pdf_link = $row['course_pdf_link'];
            $course_book_description = $row['course_book_description'];
        }
        
        // Getting the book information from joining two table single_course and book.
        // Using inner join, if hardcore course_id = 1 and if that single_course.course_id is the same in book_course_id then get those books
        // Meaning getting the books of the same course 
        $book_query = "SELECT books.* FROM books NATURAL JOIN course where course.course_title = '$data'";
        $book_result=mysqli_query($conn,$book_query);

        $topic_query = "SELECT topic.* FROM single_course INNER JOIN topic where single_course.course_id = topic.course_id and single_course.course_id = 1";
        $topic_result=mysqli_query($conn,$topic_query);
        

        // if(isset($_POST['logout_button'])){
        //     session_destroy();
        //     header('Location:index.php');
        // }
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Clever - Education &amp; Courses Template | Single Course</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader
    <div id="preloader">
        <div class="spinner"></div>
    </div> -->

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
                                        <li><a href="single-course.php">Single Courses</a></li>
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
                            <div class="login-state d-flex align-items-center">
								<form method="post">
									<div class="user-name mr-30">
										<div class="dropdown">
											<a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $session_data ?></a>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
												<a class="dropdown-item" href="profile.php">Profile</a>
												<a class="dropdown-item" href="Upload.php">Upload</a>
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

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                <li class="breadcrumb-item"><a href="#">Programming Language</a></li>
                <li class="breadcrumb-item active" aria-current="page">C - Programming</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Single Course Intro Start ##### -->
    <div class="single-course-intro d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg3.jpg);">
        <!-- Content -->
        <div class="single-course-intro-content text-center">
            <!-- Ratings -->
            <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <h3>Programming Language</h3>
            <div class="meta d-flex align-items-center justify-content-center">
                <a href="#">Omar Faruque</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#"><?php echo $course_title ?></a>
            </div>
            <div class="price">Free</div>
        </div>
    </div>
	
	
    <!-- ##### Single Course Intro End ##### -->

    <!-- ##### Courses Content Start ##### -->
    <div class="single-course-content section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="course--content">

                        <div class="clever-tabs-content">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Outline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--5" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="true">Books</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--4" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="true">Full Tutorials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Notes</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <!-- Tab Text -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                    <div class="clever-description">

                                        <!-- About Course -->
                                        <div class="about-course mb-30">
                                            <h4>About this course</h4>
                                            <p><?php echo $course_description?></p>
                                        </div>

                                        <!-- All Instructors -->
                                        <div class="all-instructors mb-30">
                                            <h4>All Instructors</h4>

                                            <div class="row">
                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t1.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Mehedi Hasan</h5>
                                                            <span>Teacher</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t2.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Piya prue</h5>
                                                            <span>Teacher</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t3.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Aditi Debnath</h5>
                                                            <span>Teacher</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Instructor -->
                                                <div class="col-lg-6">
                                                    <div class="single-instructor d-flex align-items-center mb-30">
                                                        <div class="instructor-thumb">
                                                            <img src="img/bg-img/t4.png" alt="">
                                                        </div>
                                                        <div class="instructor-info">
                                                            <h5>Sadid </h5>
                                                            <span>Teacher</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                      
                                        <div class="clever-faqs">
                                            <h4>FAQs</h4>

                                            <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel single-accordion">
                                                    <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Why this course is so important for me ?
                                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    </a></h6>
                                                    <div id="collapseOne" class="accordion-content collapse show">
                                                        <p>This course is for the basic programming knowledge. So after staring any other programming language, start from this.</p>
                                                    </div>
                                                </div>
                                                <div class="panel single-accordion">
                                                    <h6>
                                                        <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">What is the refund policy?
                                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                        </a>
                                                    </h6>
                                                    <div id="collapseTwo" class="accordion-content collapse">
                                                        <p>There is no refund policy in our website.But you may get another notes in free if you prove that somehow we cheated with you.</p>
                                                    </div>
                                                </div>
                                                <div class="panel single-accordion">
                                                    <h6>
                                                        <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">What background knowledge is necessary?
                                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                        </a>
                                                    </h6>
                                                    <div id="collapseThree" class="accordion-content collapse">
                                                        <p>General knowledge and interest from heart only make you a good programmer. Type speed will matter in later.</p>
                                                    </div>
                                                </div>

                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                    <div class="clever-curriculum">

                                        <!-- About Curriculum -->
                                        <div class="about-curriculum mb-30">
                                            <!--Course outline -->
											<div style="text-align:center">
													<h4>Course Outline</h4>
													<iframe src="<?php echo $course_pdf_link ?>" frameborder="0" height="500px" width="100%"></iframe>
											</div>											
										</div>                                    
                                    </div>
                                </div>

                                
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab--4">
                                    <div class="clever-members">

                                       
                                        <div class="mb-30">
                                            <h4>Tutorials</h4>
                                            <p>When you write any program in C language then to run that program you need to compile that program using a C Compiler which converts your program into a language understandable by a computer. This is called machine language (ie. binary format). So before proceeding, 
											make sure you have C Compiler available at your computer. It comes alongwith all flavors of Unix and Linux.

												If you are working over Unix or Linux then you can type gcc -v or cc -v and check the result. You can ask your system administrator or you can take help from anyone to identify an available C Compiler at your computer.</p>
                                        </div>

                                        
                                        <div class="mb-30">
                                            <div class="row">
												<div class="list-group">
                                                    <a href="total_video_demo.php" class="list-group-item list-group-item-success">Video Tutorials</a><br>
                                                    <a href="total-pdf-page.php" class="list-group-item list-group-item-warning">PDF Tutorials</a>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

								<!--notes section start from here -->
								<div class="tab-pane fade" id="tab3" role="tab" aria-labelledby="tab--3">
                                    <div class="clever-curriculum">
                                        <div class="mb-30">
                                            <h4>Notes And Videos</h4>
                                            <p>When you write any program in C language then to run that program you need to compile that program using a C Compiler which converts your program into a language understandable by a computer. This is called machine language (ie. binary format). So before proceeding, 
											make sure you have C Compiler available at your computer. It comes alongwith all flavors of Unix and Linux.

												If you are working over Unix or Linux then you can type gcc -v or cc -v and check the result. You can ask your system administrator or you can take help from anyone to identify an available C Compiler at your computer.</p>
                                        </div>
										
										<!-- Curriculum Level -->
                                        <?php
                                        if(mysqli_num_rows($topic_result) > 0){
                                            while($row=mysqli_fetch_assoc($topic_result)){
                                                $topic_title = $row['topic_title'];
                                                $topic_video = $row['topic_video'];
                                                $topic_pdf = $row['topic_pdf'];
                                        ?>
                                        <div class="curriculum-level mb-30">
                                            <h4 class="d-flex justify-content-between"><span><?php echo $topic_title ?></span> <span>4/5</span></h4>
                                            <h5>Topic description</h5>
                                            <p>this are is for writen the begineer level description. and below files contain notes and slides and video tutorial.</p>

                                            <ul class="curriculum-list">
                                                <li><i class="fa fa-file" aria-hidden="true"></i> <?php echo $topic_video ?> video, <?php echo $topic_pdf ?> PDF
                                                    <ul>
                                                        <li>
                                                            <span>
															<a href="regular-video-page.html">
																<i class="fa fa-video-camera" aria-hidden="true" > </i> Video: <?php echo $topic_video ?>	
															</a>	
															</span>
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i><a href="" > Piya Prue Marma</a></span>
                                                        </li>
													
                                                        <li>
														<a href="regular-pdf-page.html">
                                                            <span><i class="fa fa-file-text" aria-hidden="true"></i> PDF: <span><?php echo $topic_pdf ?></span></span>
														</a>
                                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i><a href="" > Piya Prue Marma</a></span>
                                                        </li>
                                                    </ul>
												
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <span><i class="fa fa-graduation-cap" aria-hidden="true"></i> Graded: Cumulative Language Quiz</span>
                                                    <span>3 Questions</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php
                                            }
                                        }
                                        ?>
										
                                    </div>
                                </div>
								<!--end the notes section here -->
                             
                                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab--5">
                                    <div class="clever-review">
                                        <div class="about-review mb-30">
                                            <h4>Books of <?php echo $course_title ?></h4>
                                            <p><?php echo $course_book_description ?></p>
                                        </div>

                                        <!-- Ratings -->
                                        <div class="clever-ratings d-flex align-items-center mb-30">
                                                
											<!-- ##### Books page area  ##### -->
											<div class="regular-page-area section-padding-100">
												<div class="container">
													<div class="row">
                                                        <?php
                                                        if(mysqli_num_rows($book_result) > 0){
                                                            while($row=mysqli_fetch_assoc($book_result)){
                                                                $book_title = $row['books_title'];
                                                                $book_author = $row['books_author'];
                                                                $book_pdf_link = $row['books_pdf_link'];
                                                        ?>
                                                                <div class="col-sm-4" style="word-wrap: break-word">
                                                                    <a href="<?php echo $book_pdf_link ?>" data-size="1600x1067">
                                                                    <img alt="picture" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(145).jpg" class="img-fluid">
                                                                    </a>
                                                                    <h6>Book Title: <?php echo $book_title ?></h6>
                                                                    <p>Book Author: <?php echo $book_author ?></p>
                                                                </div>
                                                        <?php
                                                            }
                                                        }
                                                        ?>													
                                                    </div>    											
													</div>
												</div>
											</div>                             
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="course-sidebar">
                        <!-- Buy Course -->
                        <a href="#" class="btn clever-btn mb-30 w-100">Course View</a>

                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>Course Features</h4>
                            <ul class="features-list">
                                <li>
                                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Duration</h6>
                                    <h6>2 Weeks</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-bell" aria-hidden="true"></i> Lectures</h6>
                                    <h6>10</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-file" aria-hidden="true"></i> Quizzes</h6>
                                    <h6>3</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-thumbs-up" aria-hidden="true"></i> Pass Percentage</h6>
                                    <h6>60</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-thumbs-down" aria-hidden="true"></i> Max Retakes</h6>
                                    <h6>5</h6>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h4>You may like</h4>

                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/bg-img/yml.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h5>Theory of Computing</h5>
                                    <h6>$20</h6>
                                </div>
                            </div>

                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/bg-img/yml2.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h5>Data Mining</h5>
                                    <h6>$40</h6>
                                </div>
                            </div>

                            <!-- Single Courses -->
                            <div class="single--courses d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/bg-img/yml3.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h5>Algorithm</h5>
                                    <h6>$10</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Courses Content End ##### -->

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
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
    <script>
		// MDB Lightbox Init
		$(function () {
		$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
		});
	</script>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
</body>

</html>