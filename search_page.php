<?php

    session_start();
    include('connection.php');

    $session_data = $_SESSION['email'];
    $search_data = $_GET['search_data'];
    if($session_data == ""){
        header("Location:index.php");
    }
    else{

        $query_book = "select * from books where books.books_title like '%$search_data%' or books.books_author like '%$search_data%'";
        $result_book = mysqli_query($conn, $query_book);

        $query_notes = "select notes.*,person.person_name from notes NATURAL JOIN person where person.person_id = notes.uploader_id and (notes.notes_title like '%$search_data%' or person.person_name like '%$search_data%')";
        $result_notes= mysqli_query($conn, $query_notes);

        $query_video = "select video.*,person.person_name from video NATURAL JOIN person where person.person_id = video.uploader_id and (video.video_title like '%$search_data%' or person.person_name like '%$search_data%')";
        $result_video = mysqli_query($conn, $query_video);


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
 
    <title>EduSolution | Login</title>

    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>  
        .row{
            margin-top:40px;
            padding: 0 10px;
        }
        .clickable{
            cursor: pointer;   
        }

        .panel-heading div {
            margin-top: -18px;
            font-size: 15px;
        }
        .panel-heading div span{
            margin-left:5px;
        }
        .panel-body{
            display: none;
        }
    
    </style>

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
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt="">EdoSolution</a>

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
                                    <button name="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $session_data ?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.php">Profile</a>
                                            <a class="dropdown-item" href="Upload.php">Upload</a>
                                            <form action="" method="post">
                                                <button name="logout_button" class="dropdown-item btn btn-danger">Logout</button>
                                            </form>
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
    <?php 
        if($search_data != ""){
            if(mysqli_num_rows($result_book) > 0){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Books</h3>
                    </div>
                    <table class="table table-hover" id="task-table" >
                        <thead>
                            <tr>
                                <th><h4>Book Title</h4></th>
                                <th><h4>Book Author</h4></th>
                                <th><h4>Book Description</h4></th>
                                <th><h4>Book PDF Link</h4></th>
                                <th><h4>Download</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row_books = mysqli_fetch_assoc($result_book)){
                                    $book_title = $row_books['books_title'];
                                    $book_author = $row_books['books_author'];
                                    $book_description = $row_books['books_description'];
                                    $book_pdf_link = $row_books['books_pdf_link'];
                            ?>
                            <tr>
                                <td><b><?php echo $book_title ?></b></td>
                                <td ><?php echo $book_author ?></td>
                                <td style="max-width: 300px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><?php echo $book_description ?></td>
                                <td style="max-width: 300px; word-wrap: break-word"><?php echo $book_pdf_link ?></td>
                                <td style="width: 110px;"><a class="btn btn-success" href="<?php echo $book_pdf_link ?>">Download</a></td>
                            </tr>
                            <?php
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>

    <?php
        if(mysqli_num_rows($result_notes) > 0){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-warning" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Notes and Slides</h3>
                    </div>
                    <table class="table table-hover" id="task-table" >
                        <thead>
                            <tr>
                                <th><h4>Notes Title</h4></th>
                                <th><h4>Uploaded By</h4></th>
                                <th><h4>Notes PDF Link</h4></th>
                                <th><h4>Download</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row_notes = mysqli_fetch_assoc($result_notes)){
                                    $person_name = $row_notes['person_name'];
                                    $notes_title = $row_notes['notes_title'];
                                    $notes_pdf_link = $row_notes['notes_pdf_link'];
                            ?>
                            <tr>
                                <td><b><?php echo $notes_title ?></b></td>
                                <td><b><?php echo $person_name ?></b></td>
                                <td style="max-width: 300px; word-wrap: break-word"><?php echo $notes_pdf_link ?></td>
                                <td style="width: 110px;"><a class="btn btn-warning" href="<?php echo $notes_pdf_link ?>">Download</a></td>
                            </tr>
                            <?php
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php 
        }
    ?>

<?php
        if(mysqli_num_rows($result_video) > 0){
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-danger" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Videos</h3>
                    </div>
                    <table class="table table-hover" id="task-table" >
                        <thead>
                            <tr>
                                <th><h4>Video Title</h4></th>
                                <th><h4>Uploaded By</h4></th>
                                <th><h4>Video Link</h4></th>
                                <th><h4>Watch</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row_video = mysqli_fetch_assoc($result_video)){
                                    $person_name = $row_video['person_name'];
                                    $video_title = $row_video['video_title'];
                                    $video_link = $row_video['video_link'];
                            ?>
                            <tr>
                                <td><b><?php echo $video_title ?></b></td>
                                <td><b><?php echo $person_name ?></b></td>
                                <td style="max-width: 300px; word-wrap: break-word"><?php echo $video_link ?></td>
                                <td style="width: 110px;"><a class="btn btn-danger" href="<?php echo $video_link ?>">Watch</a></td>
                            </tr>
                            <?php
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php 
        }
    }
    else{
    ?>
        <div align="center">
            <br><br><br><br><br>
            <h1>Please type something in the search box...</h1>
        </div>
    <?php
    }
    ?>

    <br><br><br><br><br>
    
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