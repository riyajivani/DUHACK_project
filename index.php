<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
	</div>

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