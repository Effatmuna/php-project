<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/rules.css">
    
    <link rel="stylesheet" href="css/next.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&family=PT+Serif&family=Rubik+Vinyl&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <title>epayment</title>
</head>
<body>
    <header>
    <div class="header">
          <img class="logo" src="img/logo.png">
          <img src="img/sust.png">
          
          <div class="details">
          <p>Provost Office</p>
          <h4>Bangomata Hall</h4>
          <p>Sylhet Engineering College</p>
          <p>Sylhet-3100,Bangladesh</p>
          </div>
      </div>

       
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
                  <a class="register" href="registration.php">Register</a>
                  <a class="register2" href="logIn.php">Log In</a>
                 </div>
                 <div class="menuBar">
                  <img  src="img/menu.png">
                  </div>
              </navbar>
              
       </header>

         <!--Payment Process-->

<div class="process">
   
    <div class="steps">
    <span>Step-1: Go to your Rocket Mobile Menu by dialing *322#</span><br>

    <span>Step-2: Choose Bill Pay option</span><br>
    <span>Step-3: Choose Self or Others</span><br>
    <span>Step-4: Choose 0. “Other” (Go to “0.Other” option )</span><br>
   <span> Step-5: Enter Biller ID  :SEC</span><br>
    <span>Step-6: Enter Your Bill Number: Job ID No.</span><br>
   <span> Step-7: Enter: First part of your CV ID No. [Digits before Hyphen (-)]</span><br>
   <span> Step-8: Enter the bill amount : BDT 200.</span><br>
    <span>Step-9: Now enter your Rocket Mobile Menu “PIN” to confirm</span><br>
   <span> Step-10: Done! You will receive a confirmation message from 16216</span><br>
   </div>
   <a href="paymentStatus.php">After Completing Payment, Check Payment Status</a>
</div>


<script src="script.js"></script>
       </body>
       </html>