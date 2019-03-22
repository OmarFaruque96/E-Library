<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css"  href="css/style3.css"
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

        <div class="input-group">
			<label>National ID</label>
			<input type="text" name="nationalid" value="<?php echo $username; ?>">
		</div>		
		
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div> 
		
        <div class="input-group">
			<label>Phn NO</label>
			<input type="text" name="phnno" value="<?php echo $username; ?>">
		</div>	 
		<div class="input-group">
			<label>Occupation</label>
			<input type="text" name="occupation" value="<?php echo $username; ?>">
		</div> 
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>Birth Date</label>
		     <input type="text" name="bDate" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
		</div> 
		<span class="male"><input type="radio" name="gender" value="male" checked> Male</span>
              <span class="female"><input type="radio" name="gender" value="female"> Female</span>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div> 
		
			 
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>