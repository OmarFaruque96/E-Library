
<?php 
  session_start();
  include("connection.php");

  $email = $_SESSION['email'];
  
  if(isset($_POST['back-button'])){
      header("Location:index.php");
  }

  if(isset($_POST['change-password-button'])){
      $password = $_POST['password'];
      $confirm_password = $_POST['comfirm_password'];

      if($password==$confirm_password){
        $query = "UPDATE person SET person_password = '$password' WHERE person_email = '$email'";
        mysqli_query($conn,$query);
        header("Location:index.php");
      }
      else{
          header("Location:forget_password_2.php");
      }
  }

?>

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
            <br>
            <h1>Forgot Password ??</h1>
            <form id="sign-in" action="" method="post">
                <input type="password" name="password" placeholder="PASSWORD" class="field" required>
                <input type="password" name="comfirm_password" placeholder="CONFIRM PASSWORD" class="field" required>
                <br>
                <button id="submit" name="change-password-button" class="flat-button signin">SUBMIT</button>
                <button id="submit" name="back-button" class="flat-button signin">BACK TO LOGIN</button>
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
