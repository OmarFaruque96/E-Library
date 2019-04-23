<?php
    session_start();
    include('connection.php');

    $session_data = $_SESSION['email'];
    if($session_data == ""){
        header("Location:index.php");
    }
    else{
        $query="SELECT * FROM person WHERE person_email='$session_data'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
          $row=mysqli_fetch_assoc($result);           
          $person_name=$row['person_name'];
          $person_email=$row['person_email'];
          $person_phone=$row['person_phone'];
          $person_address=$row['person_address'];
          $person_university=$row['person_university'];
          $person_department=$row['person_department'];
          $person_profession=$row['person_profession'];
          $person_experience=$row['person_experience'];
        }

        if(isset($_POST['save_button'])){
          $name=$_POST['name'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];
          $address=$_POST['address'];
          $university=$_POST['university'];
          $department=$_POST['department'];
          $profession=$_POST['profession'];
          $experience=$_POST['experience'];

          $query2 = "UPDATE person SET person_name = '$name', person_email = '$email', person_phone = '$phone', person_address = '$address', person_university = '$university',
          person_department = '$department', person_profession = '$profession', person_experience = '$experience' WHERE person_email = '$session_data'";
          mysqli_query($conn,$query2);
          header("Location:profile.php");
        }
        
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $session_data?></a>
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

    <!--  Profile section start from here -->
	
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="img/profile/omar.JPG" alt="omar"/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- upper right coloum -->
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
							
							<div class="">
								<a href="">
									<i class="fa fa-facebook-square" style="font-size:28px;padding:10px 10px" ></i>
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
								<a href="">Tutor</a><br/>
								<a href="">Web Designer and Developer</a><br/>
								<a href="">WordPress</a><br/>
								<a href="">Programming language</a><br/>
								<a href="">PHP, .Net</a><br/>
							</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="container">
    <h1>Edit Profile</h1>
	
  	<hr>
	<div class="row">
      <!-- left column -->

			  
			  <!-- edit form column -->
			  <div class="col-md-9 personal-info">
				<div class="alert alert-info alert-dismissable">
				  <a class="panel-close close" data-dismiss="alert">×</a> 
				  <i class="fa fa-coffee"></i>
				  This is an <strong>.alert</strong>. You are going to change your profile information.
				</div>
				<h3>Personal info</h3>
				
				<form class="form-horizontal" role="form" action="" method="post">
				  <div class="form-group">
					<label class="col-lg-3 control-label">Full name:</label>
					<div class="col-lg-8">
					  <input class="form-control" name="name" type="text" value='<?php echo $person_name ?>'>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="col-lg-3 control-label">University: ..</label>
					<div class="col-lg-8">
					  <input class="form-control" name="university" type="text" value='<?php echo $person_university ?>' >
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-lg-3 control-label">Department:</label>
					<div class="col-lg-8">
					  <input class="form-control" name="department" type="text" value='<?php echo $person_department ?>' >
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="col-md-3 control-label">Mail:</label>
					<div class="col-md-8">
					  <input class="form-control" name="email" type="email" value='<?php echo $person_email ?>' >
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-md-3 control-label">Phone</label>
					<div class="col-md-8">
					  <input class="form-control" name="phone" type="text" value='<?php echo $person_phone ?>' >
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-md-3 control-label">Profession: ..</label>
					<div class="col-md-8">
					  <input class="form-control" name="profession" type="text" value='<?php echo $person_profession ?>' >
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-md-3 control-label">Experience Year: ..</label>
					<div class="col-md-8">
					  <input class="form-control" name="experience" type="text" value='<?php echo $person_experience ?>' >
					</div>
				  </div>
				  <div class="form-group">
					<label class="col-md-3 control-label">Address: ..</label>
					<div class="col-md-8">
					  <input class="form-control" name="address" type="text" value='<?php echo $person_address ?>'>
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="col-md-3 control-label"></label>
					<div class="col-md-8">
						<button type="submit" name="save_button" class="btn btn-primary">Save Changes</button>
					  <span></span>
					    <a href="profile.php"><input type="button"  class="btn btn-default" value="Cancel"></a>
					</div>
				  </div>
				</form>
			  </div>
		  </div>
		</div>
		<hr>
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
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="" aria-hidden="true"></i> by <a href="" target="_blank">Engineer Brother Company</a>
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