<?php
	//session_start();
	include("connection.php");

	  if(isset($_POST['uploadVideos'])){
		$mediaType=1; 
		$title=$_POST['videoTitle'];
		$link=$_POST['linkofVideo'];  
		$query="INSERT INTO gallery (type_id, link, video_title) 
				VALUES ('$mediaType', '$link','$title');";
		mysqli_query($conn,$query);
		header("");
	  }
?>

<?php
	include_once 'connection.php';
	
	if(isset($_POST['pdfUpload']))
	{    
	$type=2;
	$title=$_POST['pdfTitle'];
	 $file = rand(1000,100000)."-".$_FILES['file']['name'];
	 $file_loc = $_FILES['file']['tmp_name'];

	 $folder="img/";
	 
	 $new_file_name = strtolower($file);
	 // make file name in lower case
	 
	 $final_file=str_replace(' ','-',$new_file_name);
	 
		 if(move_uploaded_file($file_loc,$folder.$final_file))
		 {
		  $sql="INSERT INTO gallery(,type_id,link,pdf_title) VALUES('$type','$final_file','$title')";
		  mysqli_query($conn,$sql);
		  ?>
		 
		  <?php
		 }
		 
		 else
		 {
		  ?>
		  
		  <?php
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
						<button class="btn btn-md btn-info" data-toggle="collapse" name="" data-target="#videoUpload" id="video">Video Upload</button>    <button class="btn btn-md btn-warning" data-toggle="collapse" data-target="#pdfUpload">Pdf Upload</button>    <button class="btn btn-md btn-success" data-toggle="collapse" data-target="#photosUpload"> Photos Upload</button>	
					</div>
					<div class="col-3">
						
					</div>
				</div>
			<hr>
			<!--option provide for where to upload a file-->
			
			
			<div id="videoUpload" class="collapse">
					<!--<form method="POST">-->
					
					<div class="list-group">
						<form action="" method="post">
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
						</form>
						<hr>
					</div>
					<form action="" method="post">
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
								
									<select class="form-control" name="topic" id="topicID2" >
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