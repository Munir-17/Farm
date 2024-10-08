<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

if(empty($_SESSION['user_id']))  //if usser is not login redirected baack to login page
{
    header('location:login.php');
}
else
{
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
    <link href="css/style.css" rel="stylesheet">
<style type="text/css" rel="stylesheet">
.center {
  display: flex;
  justify-content: right;
  align-items: center;
  height: 50px;

}


}
.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}


table { 
    width: 750px; 
    border-collapse: collapse; 
    margin: auto;
    
    }

/* Zebra striping */
tr:nth-of-type(odd) { 
    background: #eee; 
    }

th { 
    background: #AD8B73; 
    color: white; 
    font-weight: bold; 
    
    }

td, th { 
    padding: 10px; 
    border: 1px solid #ccc; 
    text-align: left; 
    font-size: 14px;
    
    }

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

    table { 
        width: 100%; 
    }

    /* Force table to not be like tables anymore */
    table, thead, tbody, th, td, tr { 
        display: block; 
    }
    
    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr { 
        position: absolute;
        top: -9999px;
        left: -9999px;
    }
    
    tr { border: 1px solid #ccc; }
    
    td { 
        /* Behave  like a "row" */
        border: none;
        border-bottom: 1px solid #eee; 
        position: relative;
        padding-left: 50%; 
    }

    td:before { 
        /* Now like a table header */
        position: absolute;
        /* Top/left values mimic padding */
        top: 6px;
        left: 6px;
        width: 45%; 
        padding-right: 10px; 
        white-space: nowrap;
        /* Label the data */
        content: attr(data-column);

        color: #000;
        font-weight: bold;
    }

}







    </style>

    </head>

<body>
    
        <!--header starts-->
     <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/ONe.png" alt=""> </a>
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
            <!-- top Links -->
           
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/img/cart.jpg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">
                       
                       
                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                          
                          
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                               <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Popular tags
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <ul class="tags">
                                        <li> <a href="#" class="tag">
                                    Cows
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Goats
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Meats
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Sheeps
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Fishs
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Birds
                                    </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end:Widget -->
                          
                        </div>
                        
                  
                      
                     
                             
                        <div class="col-xs-12 col-sm-7 col-md-7 ">
                            <div class="bg-gray restaurant-entry">
                                <h5>Cards <span class="table-project-n">Data</span> Table</h5>
                          <div class="center">      
    <div class="price-btn-block"> <a href="cardAdd.php" class="btn theme-btn-dash pull-right">Add New Card</a> </div>
</div>
                                <div class="row">
                                
                            <table >
                          <thead>
                            <tr>
                            <th>Card ID</th>
                              <th>Name On Card</th>
                              <th>Card Numbers</th>
                             
                            
                                 
                                   
                              
                            </tr>
                          </thead>
                          <tbody>
                          
                          
                            <?php 
                        // displaying current session user login orders 
                        $query_res= mysqli_query($db,"select * from card where customerID='".$_SESSION['user_id']."'");
                                                if(!mysqli_num_rows($query_res) > 0 )
                                                        {
                                                            echo '<td colspan="6"><center>You have No orders Placed yet. </center></td>';
                                                        }
                                                    else
                                                        {                 
                                          
                                          while($row=mysqli_fetch_array($query_res))
                                          {
                        $CardBank=$row['CardBank'];
// Store cipher method
$ciphering = "AES-128-CTR";
  
// Use OpenSSl encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$decryption_iv = '1234567891011121';

  
// Store the decryption key
$decryption_key = "GeeksforGeeks";
  
// Descrypt the string
$decryption=openssl_decrypt ($CardBank, $ciphering, 
        $decryption_key, $options, $decryption_iv);
$masknumber=str_repeat("*", 12) . substr($decryption,-4);
                            

                                                 echo '
              <tr>
                <td>'.$row["cardID"].'</td>
                <td>'.$row["NameOnCard"].'</td>
                <td>'.$masknumber.'</td>
           
                
              
              </tr>
            ';
                                                
                                            
                                                         }} ?>                  
                            
                            
                                        
                        
                          </tbody>
                    </table>
                        
                    
                                    
                                </div>
                                
                                <!--end:row -->
                            </div>
                         
                            
                                
                            </div>
                          
                          
                           
                        </div>
                    </div>
                </div>
            </section>
          
            <!-- start: FOOTER -->
            <footer class="footer">
                <div class="container">
                    <!-- top footer statrs -->
                    <div class="row top-footer">
                        <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                            <a href="#"> <img src="images/ONe.jpg" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> </div>
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
                                    <h5>Phone: <a href="tel:+263785223742">0785223742</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Addition informations</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- bottom footer ends -->
                </div>
            </footer>
            <!-- end:Footer -->
        </div>
  
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
</body>

</html>
<?php
}
?>