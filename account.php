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

<html lang="en">
    <head>
        <meta name="veiwport" content="width-device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>trial</title>
        <link href="account.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="style1.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Shrikhand&display=swap" rel="stylesheet">
        <link href="index.php">
    </head>

    <body>

        <!--account-->
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
              <p> <a href="account.php?logout='1'" style="color: red;">LOGOUT</a> </p>
          <?php endif ?>
      </div>
<br><br><br>
        <!--footer-->
        <div class="footer">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a>PRIVACY POLICY</a></li>
                <li><a>SERVICES</a></li>
                <li><a>BLOG POST</a></li>
            </ul>

            <div class="copyright">
                <p>Copyright 2022 - BEYOND THE REELS (ALL RIGHTS RESERVED)</p>
            </div>
        </div>

    </body>
</html>            