<?php
    session_start();
    include('connection.php');

    $session_data = $_SESSION['email'];

    if($session_data == ""){
        header('Location:index.php');
    }
    else{
        $query="SELECT * FROM person WHERE person_email='$session_data'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            $row=mysqli_fetch_assoc($result);           
            $person_name=$row['person_name'];
        }
    
        if(isset($_POST['logout_button'])){
            session_destroy();
            header('Location:index.php');
        }
    }
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home One || E-LIBRARY</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">		
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/animated-headlines.css">
		<link rel="stylesheet" href="lib/nivo-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/material-design-iconic-font.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/jquery.mb.YTPlayer.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/color.css">
        <link rel="stylesheet" href="css/responsive.css">		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	    
    </head>
    <body>
        
        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header>
                    <div class="header-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-5 hidden-xs">
                                    <span>Have any question? +880 1773 357272</span>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                                    <div class="header-top-right">
                                        <div class="content"><a href="#"><i class="zmdi zmdi-account"></i><?php echo $person_name ?></a>
                                            <form action="" method='post'>
                                                <ul class="account-dropdown">
                                                    <li><a href="signup.html">Profile</a></li>
                                                    <li><button class="btn btn-danger" name="logout_button">LOG OUT</button></li>
                                                </ul>
                                            </form>
                                        </div>
                                        <!-- <div class="content"><a href="#"><i class="zmdi zmdi-favorite"></i> Wishlist</a></div>  -->
                                        <div class="content"><a href="#"><i class="zmdi zmdi-shopping-basket"></i> Chechout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-logo-menu sticker">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="logo">
                                        <a href="index.html"><img src="img/logo/logo.png" alt="E-LIBRARY"></a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="mainmenu-area pull-right">
                                        <div class="mainmenu hidden-sm hidden-xs">
                                            <nav>
                                                <ul id="nav">
                                                    <li class="current"><a href="home.php">Home</a></li>
                                                    <li><a href="commingSoon.html">About</a></li>
                                                    <li><a href="commingSoon.html">Courses</a></li>
													<li><a href="">Blog</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <ul class="header-search">
                                            <li class="search-menu">
                                                <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                                            </li>
                                        </ul>
                                        <!--Search Form-->
                                        <div class="search">
                                            <div class="search-form">
                                                <form id="search-form" action="#">
                                                    <input type="search" placeholder="Search here..." name="search" />
                                                    <button type="submit">
                                                        <span><i class="fa fa-search"></i></span>
                                                    </button>
                                                </form>                                
                                            </div>
                                        </div>
                                        <!--End of Search Form-->
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="index.html">HOME</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="courses.html">Courses</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="courses-details.html">Courses Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-grid.html">Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="event.html">Event</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="event-details.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="latest-news.html">Latest News</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="news-details.html">News Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact us</a></li>
                                            </ul>
                                        </nav>
                                    </div>				
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area end -->    
                </header>
                <!--End of Header Area-->
                <!--Slider Area Start-->
                <div class="slider-area">
                    <div class="preview-2">
                        <div id="nivoslider" class="slides">	
                            <img src="images/aboutUS.jpg" alt="" title="#slider-1-caption1"/>
                            <img src="images/slider_background.jpg" alt="" title="#slider-1-caption2"/>
                        </div> 
                        <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content">
                                                    <h1 class="title1 wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="0s">E-LIBRARYion Provides<br>
                                                    Complete Solution</h1>
                                                    <p class="sub-title wow fadeInUp hidden-sm hidden-xs" data-wow-duration="2900ms" data-wow-delay=".5s"> There are many variations of books is available here, and also there<br>
                                                    are so many notes and slides will be avaiable here. We provide blogging<br>
                                                    sites too thus student and teacher can help each other.</p>
                                                    <div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
                                                        <a class="button-default" href="#">View Courses</a>	                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">E-LIBRARYion Provides<br>
                                                    Complete Solution</h1>
                                                    <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s"> There are many variations of books is available here, and also there<br>
                                                    are so many notes and slides will be avaiable here. We provide blogging<br>
                                                    sites too thus student and teacher can help each other.</p>
                                                    <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                        <a class="button-default" href="#">View Courses</a>	                
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
                <!--End of Slider Area-->
                
               
                <!--Event Area Start-->
                <div class="event-area section-padding bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>SERVICES</h3>
                                        <p>Services For Our Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-event-item">
                                    <div class="single-event-image">
                                        <a href="#">
                                            <img src="images/aboutUS.jpg" alt="">
                                            <span><span>15</span>Jun</span>
                                        </a>
                                    </div>
                                    <div class="single-event-text">
                                        <h3><a href="#">BOOKS</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                           <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                                       </div>
                                       <p>This content will be changed soon. This one is now only for demo version....</p>
                                       <a class="button-default" href="#">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single-event-item">
                                    <div class="single-event-image">
                                        <a href="#">
                                            <img src="images/aboutUS.jpg" alt="">
                                            <span><span>20</span>Apr</span>
                                        </a>
                                    </div>
                                    <div class="single-event-text">
                                        <h3><a href="#">Learn Theory of Computing </a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                           <span><i class="zmdi zmdi-pin"></i>Jessore Bangladesh</span>
                                       </div>
                                       <p>This content maybe changed soon. More update is comming soon....</p>
                                       <a class="button-default" href="#">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 hidden-sm">
                                <div class="single-event-item">
                                    <div class="single-event-image">
                                        <a href="#">
                                            <img src="images/aboutUS.jpg" alt="">
                                            <span><span>06</span>Dec</span>
                                        </a>
                                    </div>
                                    <div class="single-event-text">
                                        <h3><a href="#">Learn Software Engineering</a></h3>
                                        <div class="single-item-comment-view">
                                           <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                           <span><i class="zmdi zmdi-pin"></i>Dhaka. Bangladesh</span>
                                       </div>
                                       <p>Learn how to create a software in 10 mins, Lol, its a trap dude....</p>
                                       <a class="button-default" href="#">LEARN Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Event Area-->
                <!--Newsletter Area Start-->
                <div class="newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="newsletter-content">
                                    <h3>SUBSCRIBE</h3>
                                    <h2>TO OUR NEWSLETTER</h2>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <div class="newsletter-form angle">
                                    <form action="#" class="footer-newsletter fix">
                                        <div class="subscribe-form">
                                            <input type="email" name="email" placeholder="Enter your email address...">
                                            <button type="submit">SUBSCRIBE</button>
                                        </div>    
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre fix pull-right">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Newsletter Area-->
                <!--Footer Widget Area Start-->
                <div class="footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="img/logo/footer.png" alt=""></a>
                                    </div>
                                    <p>for more update subscribe our page. we will notify you through mail </p>
                                    <div class="social-icons">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3>GET IN TOUCH</h3>
                                    <a href="tel:555-555-1212"><i class="fa fa-phone"></i>+880 1773 357272</a>
                                    <span><i class="fa fa-envelope"></i>ELibrary@gmail.com</span>
                                    <span><i class="fa fa-globe"></i>www.E-LIBRARY.com</span>
                                    <span><i class="fa fa-map-marker"></i>Dhanmondi28,Dhaka,Bangladesh.</span>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm">
                                <div class="single-footer-widget">
                                    <h3>Useful Links</h3>
                                    <ul class="footer-list">
                                        <li><a href="#">Teachers &amp; Staff</a></li>
                                        <li><a href="#">Our Courses</a></li>
                                        <li><a href="#">Courses Categories</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Terms &amp; Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="single-footer-widget">
                                    <h3>Instagram</h3>
                                    <div class="instagram-image">
                                        <div class="footer-img">
                                            <a href="#"><img src="img/footer/1.jpg" alt=""></a>
                                        </div>
                                        <div class="footer-img">
                                            <a href="#"><img src="img/footer/2.jpg" alt=""></a>
                                        </div>
                                        <div class="footer-img">
                                            <a href="#"><img src="img/footer/3.jpg" alt=""></a>
                                        </div>
                                        <div class="footer-img">
                                            <a href="#"><img src="img/footer/4.jpg" alt=""></a>
                                        </div>
                                        <div class="footer-img">
                                            <a href="#"><img src="img/footer/5.jpg" alt=""></a>
                                        </div>
                                        <div class="footer-img">
                                            <a href="#"><img src="img/footer/6.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Footer Widget Area-->
                <!--Footer Area Start-->
                <footer class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-7">
                                <span>Copyright E-LIBRARY 2017.All right reserved.Created by <a href="">Engineer Brother</a></span>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="column-right">
                                    <span>Privacy Policy , Terms Conditions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--End of Footer Area-->
            </div>   
            <!--End of Bg White--> 
        </div>    
        <!--End of Main Wrapper Area--> 
        
        		
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        		
        <script src="js/bootstrap.min.js"></script>
        
             
		<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/nivo-slider/home.js" type="text/javascript"></script>
        
				
        <script src="js/jquery.meanmenu.js"></script>
		
			
        <script src="js/wow.min.js"></script>
        
				
        <script src="js/owl.carousel.min.js"></script>
        
			
        <script src="js/jquery.scrollUp.min.js"></script>
        
			
        <script src="js/waypoints.min.js"></script>
        
				
        <script src="js/jquery.counterup.min.js"></script>
        
			
        <script src="js/slick.min.js"></script>
        
			
        <script src="js/animated-headlines.js"></script>
        		
        <script src="js/textilate.js"></script>
        		
        <script src="js/lettering.js"></script>
        	
        <script src="js/jquery.mb.YTPlayer.js"></script>
		
        <script src="js/plugins.js"></script>
        
        	
        <script src="js/main.js"></script>
    </body>
</html>