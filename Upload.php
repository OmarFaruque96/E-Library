<?php
	session_start();
	include('connection.php');
	$sector=$class=$subject=$level=$topic="";
	
	
	$session_data = $_SESSION['email'];
    if($session_data == ""){
        header("Location:index.php");
	}
	else{
		  if(isset($_POST['uploadVideos'])){
			  
			$a= $_POST['sector'];
			$query="SELECT sector_id FROM sector WHERE sector_name='$a'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result) > 0){
				$row=mysqli_fetch_assoc($result);
				$sector=$row['sector_id'];
				echo $sector;
			}	
			$b= $_POST['level'];
			$query="SELECT level_id FROM level WHERE level_name='$b'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result) > 0){
				$row=mysqli_fetch_assoc($result);
				$level=$row['level_id'];
			}	
			$c= $_POST['class'];
			$query="SELECT class_id FROM class WHERE class_name='$c'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result) > 0){
				$row=mysqli_fetch_assoc($result);
				$class=$row['class_id'];
			}	
			$d=$_POST['subject'];
			$query = "SELECT subject_id FROM subject WHERE subject_name='$d'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result) > 0){
				$row=mysqli_fetch_assoc($result);
				$subject=$row['subject_id'];
			}	
			$e=$_POST['topic'];
			$query = "SELECT topic_id FROM topic WHERE topic_name='$e'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result) > 0){
				$row=mysqli_fetch_assoc($result);
				$topic=$row['topic_id'];
			}
			
			$mediaType = 1; 
			$title = $_POST['videoTitle'];
			
			$link = $_POST['linkofVideo'];  
			
			$query = "INSERT INTO gallery (sector_id,person_mail,level_id,class_id,subject_id,topic_id,type_id,link,video_title) 
					VALUES ('$sector','$session_data','$level','$class','$subject','$topic','$mediaType','$link','$title');";
			mysqli_query($conn,$query);
			header("");
		  }
		  
		  // pgf/photos upload part 
		  if(isset($_POST['pdfUpload']))
			{    
			$type=2;
			$title=$_POST['pdfTitle'];
			 $file = rand(1000,100000)."-".$_FILES['file']['name'];
			 $file_loc = $_FILES['file']['tmp_name'];

			 $folder="pdf notes/";
			 
			 $new_file_name = strtolower($file);
			 // make file name in lower case
			 
			 $final_file=str_replace(' ','-',$new_file_name);
			 
				 if(move_uploaded_file($file_loc,$folder.$final_file))
				 {
				  $query = "INSERT INTO gallery (sector_id,person_mail,level_id,class_id,subject_id,topic_id,type_id,link,pdf_title) 
					VALUES ('$sector','$session_data','$level','$class','$subject','$topic','$type','$final_file','$title');";
				  mysqli_query($conn,$query);
				 }
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
    <link rel="stylesheet" href="style.css">
	
	
	
	<script>
	<!--Ajax Script for sector part here -->
        function sectorfunc(){
          var selval = document.getElementById('sectorID').value;
          if(selval != "none"){
              var req=new XMLHttpRequest();
              req.onreadystatechange=function(){
                if(this.status==200 && this.readyState == 4){
                    document.getElementById('classID').innerHTML=this.responseText;
                }
              }

              req.open("GET","ajax.php?data="+selval,true);
              req.send();
          }
        }
		<!--ajax Script for class part here-->
		function levelfunc(){
          var selval = document.getElementById('classID').value;
          if(selval != "none"){
              var req=new XMLHttpRequest();
              req.onreadystatechange=function(){
                if(this.status==200 && this.readyState == 4){
                    document.getElementById('subjectID').innerHTML=this.responseText;
                }
              }
              req.open("GET","classAjax.php?data="+selval,true);
              req.send();
          }
        }
		<!--ajax script for subject part here -->
		function classfunc(){
          var selval = document.getElementById('subjectID').value;
          if(selval != "none"){
              var req=new XMLHttpRequest();
              req.onreadystatechange=function(){
                if(this.status==200 && this.readyState == 4){
                    document.getElementById('courseID').innerHTML=this.responseText;
                }
              }
              req.open("GET","subjectAjax.php?data="+selval,true);
              req.send();
          }
        }
		
		function subjectfunc(){
          var selval = document.getElementById('courseID').value;
          if(selval != "none"){
              var req=new XMLHttpRequest();
              req.onreadystatechange=function(){
                if(this.status==200 && this.readyState == 4){
                    document.getElementById('topicID').innerHTML=this.responseText;
                }
              }
              req.open("GET","topicAjax.php?data="+selval,true);
              req.send();
          }
        }
		
		
		
		
		
		function sectorfunc2(){
          var selval = document.getElementById('sectorID2').value;
          if(selval != "none"){
              var req=new XMLHttpRequest();
              req.onreadystatechange=function(){
                if(this.status==200 && this.readyState == 4){
                    document.getElementById('classID2').innerHTML=this.responseText;
                }
              }

              req.open("GET","ajax.php?data="+selval,true);
              req.send();
          }
        }
		<!--ajax Script for class part here-->
		function levelfunc2(){
          var selval = document.getElementById('classID2').value;
          if(selval != "none"){
              var req=new XMLHttpRequest();
              req.onreadystatechange=function(){
                if(this.status==200 && this.readyState == 4){
                    document.getElementById('subjectID2').innerHTML=this.responseText;
                }
              }

              req.open("GET","classAjax.php?data="+selval,true);
              req.send();
          }
        }
		<!--ajax script for subject part here -->
		function classfunc2(){
          var selval = document.getElementById('subjectID2').value;
          if(selval != "none"){
              var req=new XMLHttpRequest();
              req.onreadystatechange=function(){
                if(this.status==200 && this.readyState == 4){
                    document.getElementById('courseID2').innerHTML=this.responseText;
                }
              }
              req.open("GET","subjectAjax.php?data="+selval,true);
              req.send();
          }
        }
		function subjectfunc2(){
          var selval = document.getElementById('courseID2').value;
          if(selval != "none"){
              var req=new XMLHttpRequest();
              req.onreadystatechange=function(){
                if(this.status==200 && this.readyState == 4){
                    document.getElementById('topicID2').innerHTML=this.responseText;
                }
              }
              req.open("GET","topicAjax.php?data="+selval,true);
              req.send();
          }
        }
		
    </script>
	

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

                            <div class="login-state d-flex align-items-center">
							
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $session_data?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="profile.php">Profile</a>
                                            <a class="dropdown-item" href="Upload.php">Upload</a>
											<form action="" method="post">
												<button class="dropdown-item" name="logout_button">Logout</button>
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
    <!--  Upload area Start  -->
    
<div class="container">
			<hr>
				<div class="row">
					<div class="col-3">
						
					</div>
					<div class="col-6">
						<button class="btn btn-md btn-info" data-toggle="collapse" name="" data-target="#videoUpload" id="video">Video Upload</button>    <button class="btn btn-md btn-warning" data-toggle="collapse" data-target="#pdfUpload">Pdf Upload</button>    <button class="btn btn-md btn-success" data-toggle="collapse" data-target="#photosUpload"> Photos Upload</button>	
					</div>
					<div class="col-3">
						
					</div>
				</div>
			<hr>
			<!--option provide for where to upload a file-->
			
			
			<div id="videoUpload" class="collapse">
					<!--<form method="POST">-->
					<form action="" method="post">
					<div class="list-group">
						
							<div class="row warning" style="padding:5px 20px">
								<div class="col-xs-3 padd" >
								<!--ajax.php-->
										<select class="form-control" name="sector" id="sectorID" onchange="sectorfunc()" >
											<option value="none" selected> Select Medium</option>
											<option value="Bangla Medium">Bangla Medium</option>
											<option value="English Medium"> English Medium</option>
											<option value="Undergraduate"> Undergraduate</option>
											<option value="Others"> Others</option>
										</select>
									
								</div>
								<div class="col-xs-3 padd">
									<!--subjectAjax.php-->
										<select class="form-control" name="level" id="classID" onchange="levelfunc()">
											<option value="none" selected> Select Level</option>
										</select>
									
								</div>
								<div class="col-xs-3 padd">
								<!--classAjax.php-->
									<select class="form-control" name="class" id="subjectID" onchange="classfunc()" >
										<option value="none" selected> Select Class</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
								<!--topicAjax.php-->
									<select class="form-control" name="subject" id="courseID" onchange="subjectfunc()">
										<option value="none" selected> Select Course</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
								
									<select class="form-control" name="topic" id="topicID" >
										<option value="none" selected> Select Topic</option>
									</select>
								</div>
							</div>
							
						<hr>
					</div>
					
						<div class="list-group">
							
							<div class="form row">
							<div class="col-3">
								<input class="form-control" name="videoTitle" type="text" placeholder="enter the title">
							</div>
							<div class="col-7">
								<input class="form-control" name="linkofVideo" type="text" placeholder="enter the video link here">
							</div>
							<div class="col-2">
							
								<button type="submit" name="uploadVideos" class="btn btn-md btn-info" >Upload</button>
								
							</div>
							</div>
							
						</div>
					
					</form>
			</div>
			
			<!--Pdf file Upload Collaspe code Section here -->
				<div id="pdfUpload" class="collapse">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="list-group">
						
							<div class="row warning" style="padding:5px 20px">
								<div class="col-xs-3 padd" >
								
										<select class="form-control" name="sector2" id="sectorID2" onchange="sectorfunc2()" >
											<option value="" selected> Select Medium</option>
											<option value="Bangla Medium" >Bangla Medium</option>
											<option value="English Medium" > English Medium</option>
											<option value="Undergraduate" > Undergraduate</option>
											<option value="Others" > Others</option>
										</select>
									
								</div>
								<div class="col-xs-3 padd">
									
										<select class="form-control" name="level2" id="classID2" onchange="levelfunc2()">
											<option value="none" selected> Select Level</option>
												
										</select>
									
								</div>
								<div class="col-xs-3 padd">
									<select class="form-control" name="class2" id="subjectID2" onchange="classfunc2()" >
										<option value="none" selected> Select Class</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
									<select class="form-control" name="subject2" id="courseID2" onchange="subjectfunc2()">
										<option value="none" selected> Select Course</option>
									</select>
								</div>
								<div class="col-xs-3 padd">
								
									<select class="form-control" name="topic2" id="topicID2" >
										<option value="none" selected> Select Topic</option>
									</select>
								</div>
							</div>
						
						<hr>
					</div>
					<div class="list-group">
						
						<div class="row info">
							
							<div class="col-3">
										<input type="text" class="form-control" name="pdfTitle" placeholder="enter the title">
								</div>
								
							<div class="col-7">	
								
									<input type="file" name="file" accept="image/*,.pdf">
								
							</div>
							<div class="col-2">
							
								<button class="btn btn-md btn-info" name="pdfUpload" type="submit">Upload</button>
								
							</div>
						</div>
						
					</div>
					<!--Copy the previous code and paste here. but give a option for choose file instead of paste the link and upload , user will-->
				</form>	
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