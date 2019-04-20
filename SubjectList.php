<?php

	session_start();
	include('connection.php');

	$session_data = $_SESSION['email'];

    if($session_data == ""){
        header("Location:login.php");
	}
	else{

		$data = $_GET['data'];
		$data_partition = explode ("_", $data);

		if($data_partition[0] == "bangla"){
			$query = "select * from class NATURAL JOIN subject NATURAL JOIN level NATURAL JOIN sector 
						where class.class_name = '$data_partition[1]' and sector.sector_name = 'Bangla Medium'";
			$result = mysqli_query($conn,$query);
		}
		elseif($data_partition[0] == "english"){
			$query = "select * from class NATURAL JOIN subject NATURAL JOIN level NATURAL JOIN sector 
						where class.class_name = '$data_partition[1]' and sector.sector_name = 'English Medium'";
			$result = mysqli_query($conn,$query);
		}
		elseif($data_partition[0] == "undergrad"){
			$query = "select * from class NATURAL JOIN subject NATURAL JOIN level NATURAL JOIN sector 
						where class.class_name = '$data_partition[1]' and sector.sector_name = 'Undergraduate'";
			$result = mysqli_query($conn,$query);
		}
		elseif($data_partition[0] == "grad"){
			$query = "select * from class NATURAL JOIN subject NATURAL JOIN level NATURAL JOIN sector 
						where class.class_name = '$data_partition[1]' and sector.sector_name = 'Graduate'";
			$result = mysqli_query($conn,$query);
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
    <!--  Upload area Start  -->
    
<div class="container">
			<hr>
			<div class="row">
				<div class="col-4">
				<!-- <form method="post">
					<button class="btn btn-md btn-info"  data-toggle="collapse" data-target="#subject" name="sub">CSE</button>
				</form> -->
				<?php
					if(mysqli_num_rows($result) > 0){
						while($row=mysqli_fetch_assoc($result)){
							$subject = $row['subject_name'];
				?>
				<a class="btn btn-md btn-success" href="single-course.php?subject=<?php echo $subject ?>&session_data=<?php echo $session_data ?>"><?php echo $subject ?></a><br><br>
				<?php
						}
					}
				?>
				</div>
				<div class="col-4">
						
				</div>
				<div class="col-4">
					
				</div>
			</div>
			
			<hr>
			<!--list of course here for a perticular subject-->
			<div class="collapse" id="subject" name="listOfSub">
			<?php 
						if(isset($_POST['sub'])){
							$a=$_POST['sub'];
								//$sql = "SELECT subject_name FROM subject WHERE class_id=(SELECT class_id FROM class where class_name='$a'";
								$sql = "SELECT subject_name FROM subject WHERE class_id=29";
								   $result = $conn->query($sql);
                                    $videos = [];
                                    $count = 0;
                                    
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
											
											$videos[] = [
                                                'title' => $row["subject_title"]
                                                
                                            ];
											
											?>
                                                <a class="list-group-item list-group-item-success"> <?php echo $videos['title']?> </a><?php
                                        }
                                    }
                                    else{
                                        echo "0 results";
                                    }
						}	
					?>
				
			</div>		    
</div>

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