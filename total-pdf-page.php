<?php
	
    include('connection.php');

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
                                <li><a href="#">Books and Notes</a>
                                    <ul class="dropdown">
										<li><a href="#">English Medium</a>
											<ul class="dropdown">
													<li><a href="">Class 1-7</a>
														<ul class="dropdown">
																<li><a href="">Class 1</a></li>
																<li><a href="">Class 2</a></li>
																<li><a href="">Class 3</a></li>
																<li><a href="">Class 4</a></li>
																<li><a href="">Class 5</a></li>
																<li><a href="">Class 6</a></li>
																<li><a href="">Class 7</a></li>
														</ul>
													</li>
													<li><a href="">O-Level</a>
														<ul class="dropdown">
															<li><a href="">Class 8</a></li>
															<li><a href="">Class 9</a></li>
															<li><a href="">Class 10</a></li>
														</ul>
													</li>
													<li><a href="">A-Level</a>
														<ul class="dropdown">
															<li><a href="">Class 11</a></li>
															<li><a href="">Class 12</a></li>
														</ul>
													</li>
											</ul>
										</li>
										<li><a href="#">Bangla Medium</a>
											<ul class="dropdown">
													<li><a href="">Primary</a>
														<ul class="dropdown">
																<li><a href="">Class 1</a></li>
																<li><a href="">Class 2</a></li>
																<li><a href="">Class 3</a></li>
																<li><a href="">Class 4</a></li>
																<li><a href="">Class 5</a></li>
														</ul>
													</li>
													<li><a href="">Secondary</a>
														<ul class="dropdown">
																<li><a href="">Class 6</a></li>
																<li><a href="">Class 7</a></li>
																<li><a href="">Class 8</a></li>
																<li><a href="">Class 9</a></li>
																<li><a href="">Class 10</a></li>
														</ul>
													</li>
													<li><a href="">Higher Secondary</a>
														<ul class="dropdown">
																<li><a href="">Class 11</a></li>
																<li><a href="">Class 12</a></li>
														</ul>
													</li>
											</ul>
										</li>
                                        <li><a href="single-course.html">Undergraduate</a>
											<ul class="dropdown">
													<li><a href="">Engineering</a>
														<ul class="dropdown">
																<li><a href="">CSE</a></li>
																<li><a href="">EEE</a></li>
																<li><a href="">CTE</a></li>
																<li><a href="">IPE</a></li>
														</ul>
													</li>
													<li><a href="">BBA</a>
														<ul class="dropdown">
																<li><a href="">Subject - 01</a></li>															
														</ul>
													</li>
													<li><a href="">Economics</a>
														<ul class="dropdown">
																<li><a href="">Economics</a></li>
														</ul>
													</li>
													<li><a href="">Business Studies</a>
														<ul class="dropdown">
																<li><a href="">Business</a></li>
														</ul>
													</li>
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
                        <h4>Introduction with C </h4>
                        <p>C is a procedural programming language. It was initially developed by Dennis Ritchie between 1969 and 1973. It was mainly developed as a system programming language to write operating system. The main features of C language include low-level access to memory, simple set of keywords, and clean style, these features make C language suitable for system programming like operating system or compiler development.
                            Many later languages have borrowed syntax/features directly or indirectly from C language.
                            Like syntax of Java, PHP, JavaScript and many other languages is mainly based on C language. C++ is nearly a superset of C language (There are few programs that may compile in C, but not in C++)..</p>
                    </div>
                    <!-- Grid row -->
                    <!-- Page Content -->
                    <div class="container">

                        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Topics Gallery</h1>

                        <hr class="mt-2 mb-5">

                        <div class="row text-center text-lg-left">

                            <?php
                                $sql = "SELECT * FROM gallery WHERE type_id=2";
                                $result = $conn->query($sql);
                                $pdf = [];
                                
                                    
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        $pdfs[] = [
                                            'title' => $row["pdf_title"],
                                            'content' => $row["link"]
                                        ];
                                    }
                                }
                                else{
                                    echo "0 results";
                                }
                            ?>

                            <?php
                                foreach($pdfs as $pdf){ 
                            ?>
                            <div class="col-lg-3 col-md-4 col-6">

                                <img class="img-fluid img-thumbnail" src="img/book-cover.jpg" alt="">
                                <h4 class="text-center my-3"><?php echo $pdf['title'] ?></h4>
                                <div style="padding: 10px 10px">
                                    <a href="<?php echo "pdf notes/".$pdf['content'] ?>" target="_blank">
                                    <button class="btn btn-md-4 btn-info"> View Topics </button></a> 
                                    <button class="btn btn-md-4 btn-success"> Download </button>
                                </div>

                            </div>
                            <?php } ?>

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