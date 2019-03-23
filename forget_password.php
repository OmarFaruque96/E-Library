
<!-- <?php

  session_start();
  include("connection.php");

  if(isset($_POST['next-button'])){
     
    $email=$_POST['email']; 
    
    $query="Select * from person where person_email='$email'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        $_SESSION['email'] = $email;
        header("Location:forget_password_2.php");
    }
    else{
        header("Location:forget_password.php");
    }
  }

  

?> -->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>E-Library : Forget Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css2/style.css">
</head>

<body>

  <body>
  <div class="overlay"></div>
  <div class="modal position">
    <img src="img/logo/logo.png" class="logo">  
    <div class="brand login-text">
      Sign in with your email or username<br><br>
      <strong>OR</strong><br><br> Use Facebook secure login for quick access to your account.
    </div>
    <button class="brand login flat-button facebook">Continue with Facebook</button> 
    <div class="form position">
      <div class="form-inner">
        <div class="form-content current" id="member">
            <br><br><br>
            <h1>Forgot Password ??</h1>
            <br><br>
            <form id="sign-in" action="" method="post">
              <input type="email" name="email" id="user" placeholder="USERNAME / EMAIL" class="field" required>
              <br><br><br>
              <button id="submit" name="next-button" class="flat-button signin">NEXT</button>
		    </form>
        </div>
      </div>
    </div>
  </div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js2/index.js"></script>




</body>

</html>
