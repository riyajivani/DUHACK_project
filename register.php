<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="account.css">
</head>
<body>

<!--header-->
<div class="navbar">

<div class="logo">
	<img src="hackathon logo.gif">
</div>
	<nav><ul>
		<li><a href="index.html">HOME</a></li>
		<li><a href="index.html">IMAGES</a></li>
		<li><a href="index.html">MUSIC</a></li>
		<li><a href="index.html">MEMES</a></li>
		<li><a href="index.html">QUOTES</a></li>
		<li><a href="index.html">CONTACTS</a></li>
		<li><a href="about.html">ABOUT</a></li>
		<li><a href="account.html">ACCOUNT</a></li>
	</ul></nav>
</div>

  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
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
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

  <!--footer-->
	<div class="footer">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a>PRIVACY POLICY</a></li>
                <li><a>SERVICES</a></li>
                <li><a>BLOG POST</a></li>
            </ul>

            <div class="copyright">
                <p>Copyright 2022 - BEYOND THE REEL (ALL RIGHTS RESERVED)</p>
            </div>
        </div>
		
</body>
</html>