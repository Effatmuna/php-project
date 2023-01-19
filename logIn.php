<?php include 'confiq.php';?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banghamata Hall</title>
    
    <link rel="stylesheet" href="css/provost.css">
    <link rel="stylesheet" href="css/logIn.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/rules.css">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&family=PT+Serif&family=Rubik+Vinyl&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./asset/fontawesome/css/all.css"/>
   
</head>
<body class="main">

        <navbar class="navbaR">
            <img class="sust" src="img/sust.png">
            
               <div class="navList">
                
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="">About Us</a>
                           <img src="img/down-chevron.png" class="dropDownPic">
                        
                        <div class="dropdowN">
                           <a href="aboutUs.php"> <p>History</p></a>
                           <a href="provost.php"> <p>Provost's Details</p></a>
                        </div>
                
                    
                    </li>
                    <li><a href="rules.php">Rules</a></li>
                    <li><a href="menu2.php">Menu</a></li>
                    <li><a href="notice.php">Notice</a></li>
                    <li><a href="epayment.php">ePayment</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
               
               </div>
               <div class="Register">
                <a class="register" href="logIn.php">Log In</a>
               </div>
               <div class="menuBar">
                <img  src="img/menu.png">
                </div>
            </navbar>
            


    <div class="overflow"></div>
     <form action="login_check.php" method="POST" class="logInform">
        <div class="info">
      <div>
        <label>Username</label>
        <input type="text" name="username"/>
     </div>
     <div>
        <label>Password</label>
        <input type="password" name="password"/>
     </div>
     <div class="button">
        <input class="btn1" type="submit" name="submit" value="logIn"/>
    </div>
<h4 class="mes">
        <?php
        error_reporting(0);
        session_start();
        session_destroy();
        echo $_SESSION['loginMessage'];
        ?>
    </h4>
</div>
</form>


<footer class="footer">
        <div class="main-content">
            <p>Contact Us</p>
            <span>Cell:+88017-XXXXXX</span>
            <span>About Us</span>
          </div>
          <div class="icons">
            <p>Follow Us</p>
            <img src="img/facebook.png">
            <img src="img/twitter.png">
            <img src="img/google.png">
          </div>
          <div class="privacy">
            <p>Privacy</p>
            <p>Terms and Policy</p>
          </div>


   </footer>


</body>
</html>