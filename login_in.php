<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section>
	<div class="color"></div>
	<div class="color"></div>
	<div class="color"></div>
	<div class="login-box">
		<div class="login-square" style="--i:0"></div>		
		<div class="login-square" style="--i:1"></div>
		<div class="login-square" style="--i:2"></div>
		<div class="login-square" style="--i:3"></div>
		<div class="login-square" style="--i:4"></div>
<div class="container">
  <div class="login-form">
      <div class="wrapper">
 	     <div class="heading">
 		    <h1>Login Form</h1>
 	     </div>
    <div class="form">
     <form action="login.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <span>
            <i class="fa fa-user"></i>
            <input type="text" name="uname" placeholder="Username">
        </span><br>
     	
         <span>
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
        </span><br>

     	 <div class="button">
				<span>
					<input type="submit" value="Login" class="btn btn-back" />
				</span>
                <a href="newreg.php" class="btn btn-back">Register Here</a>
				<a href="admin.php" class="btn btn-back">Admin</a>
     </form>
	 </div>
		</div>
	</div>
</section>
<script src="vanilla-tilt.js"></script>
</body>
</html>