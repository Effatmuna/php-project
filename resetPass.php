<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    
    <link rel="stylesheet" href="css/resetPass.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&family=PT+Serif&family=Rubik+Vinyl&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
  />
    <title>Reset</title>
</head>
<body>
    <header>
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
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="notice.php">Notice</a></li>
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
            
     </header>

     <!--logIn form-->
   
<div class="modal">
    <div>
        <img src="img/down-chevron.png" class="cross">
        <p>Check your email and confirm your password</p><br>
        <span>Thank you!!</span>
        </div>
</div>
     <div class="overflow"></div>
     <form class="logInform">
      <div class="info">
        <div class="idNo">

            <label for="idNo">ID No.</label><br>
            <input  type="number" name="idNo" id="idNo" placeholder="Enter your registration no." class="input">
         </div>
         <div class="email formgroup">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your email" class="input">
         </div>

         <div class="button">
          <button class="update">Update</button><span>Or</span><br>
          <button class="cancel">Cancel</button>
         </div>

</div>


     </form>




     <footer class="footer">
      <div class="main-content">
          <p>Contact Us</p>
          <span>Cell:+88017-XXXXXX</span>
        </div>
        <div class="icons">
          <img src="img/facebook.png">
          <img src="img/twitter.png">
          <img src="img/google.png">
        </div>
        <div class="privacy">
          <p>Privacy</p>
          <p>Terms and Policy</p>
        </div>
 </footer>


    


   <script src="script.js"></script> 
   
</body>
</html>