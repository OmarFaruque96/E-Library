<?php include('connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EduSolution | Profile</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Omar Faruque</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.html">Profile</a>
                                            <a class="dropdown-item" href="#">Account Info</a>
                                            <a class="dropdown-item" href="index.html">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="img/profile/omar.jpg" alt="">
                                </div>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!--  Profile section start from here -->

    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="img/profile/omar.JPG" alt="omar" />
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            Omar Faruque
                        </h5>
                        <h6>
                            Student at UIU
                        </h6>
                        <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="editedProfile.html"><button type="button" class="btn btn-primary" value="">Edit Profile </button> </a>

                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">

                        <div class="">
                            <a href="">
                                <i class="fa fa-facebook-square" style="font-size:28px;padding:10px 10px"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" style="font-size:28px;padding:10px 10px"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-mobile" style="font-size:28px;padding:10px 10px"></i>
                            </a>
                            <a href="">
                                <i style="font-size:28px ;padding:10px 10px" class="fa">&#xf0e0;</i>
                            </a>
                        </div>

                        <div>
                            <p>SKILLS</p>
                            <a href="">Tutor</a><br />
                            <a href="">Web Designer and Developer</a><br />
                            <a href="">WordPress</a><br />
                            <a href="">Programming language</a><br />
                            <a href="">PHP, .Net</a><br />
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <?php
                            $sql = "SELECT full_name, university, dept, mail, phoneNo, profession, experience, english_level, address FROM editedProfile INNER JOIN signUp ON editedProfile.signup_id=signUp.signup_id WHERE editedProfile.edpro_id = 1";
                            $result = $conn->query($sql); 
    
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $name = $row["full_name"];
                                    $academic = $row["university"];
                                    $department = $row["dept"];
                                    $email = $row["mail"];
                                    $phone = $row["phoneNo"];
                                    $profession = $row["profession"];
                                    $expertise = $row["experience"];
                                    $level = $row["english_level"];
                                    $location = $row["address"];
                                }
                            } 
                            else{
                                echo "0 results";
                            }
                        ?>
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <?php 
                                        echo "<p>" . $name . "</p>"
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>University </label>
                                </div>
                                <div class="col-md-6">
                                    <?php 
                                        echo "<p>" . $academic . "</p>"
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Department </label>
                                </div>
                                <div class="col-md-6">
                                    <?php 
                                        echo "<p>" . $department . "</p>"
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <?php 
                                        echo "<p>" . $email . "</p>"
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <?php 
                                        echo "<p>" . $phone . "</p>"
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <?php 
                                        echo "<p>" . $profession . "</p>"
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="index.html"><button type="button" class="btn btn-primary" value="">Logout</button></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Experience Year</label>
                                </div>
                                <div class="col-md-6">
                                    <?php 
                                        echo "<p>" . $expertise . "</p>"
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Total notes</label>
                                </div>
                                <div class="col-md-6">
                                    <p>35</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>English Level</label>
                                </div>
                                <div class="col-md-6">
                                    <?php 
                                        echo "<p>" . $level . "</p>"
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-6">
                                    <?php 
                                        echo "<p>" . $location . "</p>"
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Biodata</label><br/>
                                    <p>detail description</p>
                                </div>
                                <div class="col-md-12">
                                    <a href="index.html"><button type="button" class="btn btn-primary" value="">Logout</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                            <!-- <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a> -->
                        </div>
                        <p><a href="#">
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved <i class="" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Engineer Brother Company</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
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