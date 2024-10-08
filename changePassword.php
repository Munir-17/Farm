<!DOCTYPE html>
<html lang="en">
<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>One-Farm</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
     
         <!--header starts-->
          <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/ONe.jpg" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="breed.php">Animals List <span class="sr-only"></span></a> </li>
                       
                           
                            <?php
                        if(empty($_SESSION["user_id"])) // if user is not login
                            {
                                echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                              <li class="nav-item"><a href="registration.php" class="nav-link active">Signup</a> </li>';
                            }
                        else
                            {
                                    //if user is login
                                    echo  '<li class="nav-item"><a href="card.php" class="nav-link active">Payment Settings</a> </li>';
                                    echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Checkout</a> </li>';
                                    echo  '<li class="nav-item"><a href="profile.php" class="nav-link active"> Your Profile</a> </li>';
                                    echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                            }

                        ?>
                             
                        </ul>
                  </div>
               </div>
            </nav>
            <!-- /.navbar -->
         </header>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">
                      <span style="color:red;"><?php echo $message; ?></span>
                       <span style="color:green;">
                                <?php echo $success; ?>
                                        </span>
                       
                    </a></li>
                    
                  </ul>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">
                              
 <form action="customerChange.php" method="post">

                <?php if (isset($_GET['msg'])) { ?>
                <p class="msg"><?php echo $_GET['msg']; ?></p>
                <?php } ?>
                
              <div class="card-body mt-3">
                <div class="col-lg-10 mx-auto mt-3">

                <div class="form-row mb-3">
                    <label for="exampleInputEmail1">Current Password :</label>
                    <input type="password" name="op" class="col form-control" placeholder="" required>
                </div>
                   <div class="form-row mb-3">
                    <label for="exampleInputEmail1">New Password :</label>
                    <input pattern="(?=\S*[\W])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must be 8 characters in length with atleast one uppercase and lowercase letter, one numeric and special character" type="password" name="np" class="col form-control" id="typepass" placeholder="" required>
                </div>
                   <div class="form-row mb-3">
                    <label for="exampleInputEmail1">Confirm Password :</label>
                    <input pattern="(?=\S*[\W])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must be 8 characters in length with atleast one uppercase and lowercase letter, one numeric and special character" type="password" name="c_np" class="col form-control" id="typepass2" placeholder="" required>
                </div>
                 <br>
                 <div class="form-row mb-4">
                   <label for="" class="col-lg"></label>
                   <input type="checkbox" style="float: left; " onclick="Toggle()"> 
                   <p class="col" style="float: left; margin-left: 5px;"> Show</p><br>
               </div>
               
                <center><a href="profile.php" class="btn theme-btn ">Back</a> 
                    <input type="submit" class="btn theme-btn "  name="update" value="Change">                  
                    </center>
            </form>
                           
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     <div class="col-md-4">
                      
                        
                     </div>
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
           
            <!-- start: FOOTER -->
            <footer class="footer">
               <div class="container">
                  <!-- top footer statrs -->
                  <div class="row top-footer">
                     <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img src="images/ONe.jpg" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> 
                     </div>
                     <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                           <li><a href="#">About us</a> </li>
                           <li><a href="#">History</a> </li>
                           <li><a href="#">Our Team</a> </li>
                           <li><a href="#">We are hiring</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5>How it Works</h5>
                        <ul>
                           <li><a href="#">Enter your location</a> </li>
                           <li><a href="#">Choose restaurant</a> </li>
                           <li><a href="#">Choose meal</a> </li>
                           <li><a href="#">Pay via credit card</a> </li>
                           <li><a href="#">Wait for delivery</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-2 pages color-gray">
                        <h5>Pages</h5>
                        <ul>
                           <li><a href="#">Search results page</a> </li>
                           <li><a href="#">User Sing Up Page</a> </li>
                           <li><a href="#">Pricing page</a> </li>
                           <li><a href="#">Make order</a> </li>
                           <li><a href="#">Add to cart</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5>Popular locations</h5>
                        <ul>
                            <li><a href="#">Beatrice</a> </li>
                            <li><a href="#">Beitbridge</a> </li>
                            <li><a href="#">Chivhu</a> </li>
                            <li><a href="#">Chikombedzi</a> </li>
                            <li><a href="#">Buffalo Range</a> </li>
                            <li><a href="#">Bindura</a> </li>
                            <li><a href="#">Mazoe</a> </li>
                            <li><a href="#">Gutu</a> </li>
                            <li><a href="#">Harare North</a> </li>
                            <li><a href="#">Chinhoyi</a> </li>
                        </ul>
                     </div>
                  </div>
                  <!-- top footer ends -->
                  <!-- bottom footer statrs -->
                  <div class="row bottom-footer">
                     <div class="container">
                        <div class="row">
                           <div class="col-xs-12 col-sm-3 payment-options color-gray">
                              <h5>Payment Options</h5>
                              <ul>
                                 <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-xs-12 col-sm-4 address color-gray">
                              <h5>Address</h5>
                              <p>Concept design of oline food order and deliveye,planned as restaurant directory</p>
                              <h5>Phone: <a href="tel:+080000012222">0785223742</a></h5>
                           </div>
                           <div class="col-xs-12 col-sm-5 additional-info color-gray">
                              <h5>Addition informations</h5>
                              <p>Join the thousands of other restaurants who benefit from having their menus on TakeOff</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- bottom footer ends -->
               </div>
            </footer>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/animal.min.js"></script>
<script> 
    // Change the type of input to password or text
    function Toggle(){
var pass = document.getElementById("typepass");
var pass2 = document.getElementById("typepass2");
  if (pass.type === "password") {
    pass.type = "text";
  }
    if (pass2.type === "password") {
    pass2.type = "text";
  }
  else{
    pass.type = "password";
   pass2.type = "password";

  }


    } 
  
</script> 
</body>

</html>