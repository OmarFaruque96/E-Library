
<?php 
  session_start();
  include("connection.php");

  if(isset($_POST['register-button'])){
    $name=$_POST['name']; 
    $type=$_POST['type']; 
    $email=$_POST['email']; 
    $password=$_POST['password']; 

    if($type == ""){
      $type = "Student";
    }

    $query="INSERT INTO person (person_name, person_email, person_type, person_password) 
            VALUES ('$name', '$email', '$type', '$password')";
    mysqli_query($conn,$query);
    header("Location:index.php");
  }

  if(isset($_POST['sign-in-button'])){
    $email    = $_POST['login_email'];
    $password = $_POST['login_password'];


    $query="Select person_email,person_password from person where person_email='$email'and person_password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
      $_SESSION['email'] = $email;
      header("Location: home.php");
      exit;
    }
  }
  

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>E-Library : Login</title>
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
      <a href="#"><button class="close">x</button></a>
      <div class="form-inner">
        <!-- Tabs-->
        <div class="tabs">
          <ul class="tabs">
            <li class="current" data-tab="member">
              <a href="#member">I am a member</a>
            </li>
            <li data-tab="new">
              <a href="#new">I am new here</a>
            </li>
          </ul>
          <!--Login Form -->
          <div class="form-content current" id="member">
            <form id="sign-in" action="" method="post">
              <input type="email" name="login_email" id="user" placeholder="USERNAME / EMAIL" class="field" required>
              <input type="password" name="login_password" placeholder="PASSWORD" class="field" required>
              <div class="clear"></div>
              <a href="forget_password.php">Forgot Password ?</a>
					    <button id="submit" name="sign-in-button" class="flat-button signin">Log In</button>
    		   </form>
          </div>
          <!--Registration form-->
          <div class="form-content" id="new">
            <form id="reg" action="" method="post">
              <input type="text" name="name" id="user" placeholder="NAME" class="field" required>
              <select name="type" class="field">
                <option value="">Please Select User Type</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
              </select>
              <input type="email" name="email" id="usremail" placeholder="EMAIL ADDRESS" class="field" required>
              <input type="password" name="password" placeholder="PASSWORD" class="field" required>
              <a href="index.html">
                <button id="submit" name="register-button" class="flat-button signin">Sign Up</button>
              </a>			
              <div class="clear"></div>
              <input type="checkbox" name="promo" id="promo-check" class="check" checked><label for="promo-check" class="check-label secondary-text promo">I'd like to receive special offers and discount coupons. No spam!</label>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js2/index.js"></script>




</body>

</html>
