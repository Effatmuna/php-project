<?php
   $servername = "localhost";
   $username   = "root";
   $password   = "";
   $dbname = "epayment";
  

   $conn = mysqli_connect($servername,$username,$password,$dbname);
   if($conn) {
     echo "Database created successully";
   } else {
    die("Sorry failed to connect ".mysqli_connect_error());
   }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/epayment.css">
    <link rel="stylesheet" href="css/rules.css">
    
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
                      <li><a href="">Home</a></li>
                      <li><a href="">About Us</a>
                             <img src="img/down-chevron.png" class="dropDownPic">
                          
                          <div class="dropdowN">
                             <a href="aboutUs.html"> <p>History</p></a>
                             <a href="provost.html"> <p>Provost's Details</p></a>
                          </div>
                  
                      
                      </li>
                      <li><a href="rules.html">Rules</a></li>
                      <li><a href="menu.html">Menu</a></li>
  
                      <li><a href="notice.html">Notice</a></li>
                      <li><a href="epayment.html">ePayment</a></li>
                      <li><a href="contact.html">Contact</a></li>
                  </ul>
                 
                 </div>
                 <div class="Register">
                  <a class="register" href="registration.html">Register</a>
                 </div>
                 <div class="menuBar">
                  <img  src="img/menu.png">
                  </div>
              </navbar>
              
       </header>

       <!--Hall Fee-->
       <div class="container">
       <form class="form" method="POST" action="/projectfornoyonsir/epayment.php" >
            
      
            <div class="regis">
            <label for="regis">Registration No</label><br>
            <input type="number" name="number" id="number" placeholder="Enter your Registration No." class="input">
            </div>
           <div class="depBatch">
              <div class="depart">
              <label for="department">Department</label>
              <select class="dept" name="dept">
                  <option value="CSE">CSE</option>
                  <option value="EEE">EEE</option>
                  <option value="CE">CE</option>
              </select>
               </div>
               <div class="Semister formgroup">
                <label for="semester">Semester</label>
                <select class="semester" name="semester">
                  <option value="Not Selected">Semester</option>
                    <option value="1-1">1-1</option>
                    <option value="1-2">1-2</option>
                    <option value="2-1">2-1</option>
                    <option value="2-2">2-2</option>
                    <option value="3-1">3-1</option>
                    <option value="3-2">3-2</option>
                    <option value="4-1">4-1</option>
                    <option value="4-2">4-2</option>
                </select>
                 </div>
          </div>
                  <div class="Name formgroup">
                     <label for="Name">Name</label><br>
                     <input type="text" name="Name" id="Name" placeholder="Enter your name" class="input">
                  </div>
                 <div class="mobile formgroup">
                  <label for="mobile">Mobile</label><br>
                  <input type="number" name="mobile" id="mobile" class="input">
               </div>
                 
                     <div class="email">
                     <label for="email">Email</label><br>
                     <input type="email" name="email" id="email" placeholder="Enter your email" class="input">
                </div>
              
                  <div class="amount">
                  <label for="amount">Amount of Payment</label><br>
                  <input type="number" name="amount" id="amount">
             </div>
             <br>
             <div class="buttons">
                      <input type="submit" class="next" name="submit" value="Submit">
                 
             </div>
             <a href="next.html" class="Next">Next</a>
             <div class="payment">
              <p>Accepted payment method- <img src="img/bkash.png" width="30px" height="30px"> <img src="img/rocket.png" width="30px" height="30px"></p>
              </div>
       </form>
   
              
    

</div>


 
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


<?php

   if($_SERVER['REQUEST_METHOD'] == 'POST') {
       
       $registrationno = $_POST['number'];
       $dept = $_POST['dept'];
       $semester = $_POST['semester'];
       $name = $_POST['Name'];
       $mobile = $_POST['mobile'];
       $email = $_POST['email'];
       $amount = $_POST['amount'];

       $sql = "INSERT INTO hallfee VALUES('$registrationno','$dept','$semester','$name','$mobile','$email','$amount')";
       if(mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Data not inserted.";
    }
  }
?>