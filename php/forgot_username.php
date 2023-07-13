<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Project P2</title>

<!--theme swiching-->	
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style.css">
	<script src="../js/theme1.js"></script>
    	
<!--pincode popup and validation -->	
	<script src="../js/pincode-validate.js"></script>
	<script src="../js/popup.js"></script>
	<link rel="stylesheet" href="../../css/popup.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Ionicons Font CSS-->
    <link rel="stylesheet" href="../../css/ionicons.min.css">
<!-- font awesome CSS-->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
<!-- Meanmenu CSS (for mobile dropdown menus)-->
    <link rel="stylesheet" href="../../css/meanmenu.min.css">
<!--Nivo Slider CSS(for all sliders)-->
    <link rel="stylesheet" href="../../css/nivo-slider.css">
<!-- Owl Carousel CSS ( for display of featured products)-->
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
</head>
<body>
                     
    <div class="wrapper home-5">
        <!--Header Area Start-->
        <header>
           <div class="header-container">
               <!--Header Top Area Start--> 
              <div class="header-top-area">
                   <div class="container">
                       <div class="row">
 <!--Header Top Left Area Start-->
                            <div class="col-md-3 col-sm-4 col-xs-12 hidden-xs">                               <div class="header-top-menu">
                                   <ul>
                                       <li>
                                          <i class="fa fa-envelope-o"> projectp2intern@gmail.com | </i><i class="fa fa-phone"> +91-99999-99999 </i>
										  
                                       </li>

                                   </ul>
                               </div>
							   
                           </div>
						    <div class="col-md-2 col-sm-9 col-xs-2 text-center">
                               <div class="header-top-menu">
                                   <ul>
										<li>
										                                           <button id="themetoggle" onclick="toggleTheme()">Switch Theme</button>
 
                                       </li>

                                   </ul>
                               </div>
							   
                           </div>
						   <div class="col-md-4 col-sm-9 col-xs-2 text-center">
                               <div class="header-top-menu">
                                   <ul>
                                       <li>
										                                            <button class="open-button" onclick="openForm()">Check Service Availability</button>

                                       </li>


                                   </ul>
                               </div>
							   
                           </div>
						     
						 <div class="col-md-3 col-sm-8 hidden-xs text-center">
                               <div class="header-top-menu">
                                   <ul>
                                       <li class="support"><span><a id="signup" href = "../signup.html">Sign Up | </a><a id="login"href = "../login.html">Login</a></span></li>
                                      
                                   </ul>
                               </div>
                           </div>   
						   <!--Header Top Right Area End-->
               <!--Header Top Area End-->
               <!--Header Middel Area Start-->
               <div class="header-middel-area">
                   <div class="container">
                       <div class="row">
                           <!--Logo Start-->
                           <div class="col-md-7 col-sm-9 col-xs-1">
                               <div class="logo">
                                   
                                    

                               </div>
                           </div>
						   
                           <!--Logo End-->
                      <div class="col-md-1 col-sm-9 col-xs-1 text-centre">
                               <div class="form-popup" id="myForm">
									<form action="" class="form-container">
										<input id="pincode" placeholder="Enter PINCODE"maxlength="6"> <br>
											<button type="button" class="btn" onclick="myFunction()">Submit</button>
											<button type="button" class="btn" onclick="closeForm()">Close</button>
									</form>
								</div>
                       </div>
                           <!--Mini Cart Start-->
                           <div class="col-md-3 col-sm-4 col-xs-8 text-right">
                               <div class="mini-cart-area">
                                   <ul>

                                       <li>
                                                                                  <a href="../mycart.php"><i class="ion-android-cart"></i><span class="cart-total"> </a>
                                                                               </li>
                                   </ul>
                               </div>
                           </div>
                           <!--Mini Cart End-->
                       </div>
                   </div>
               </div>
               <!--Header Middel Area End--><!--Header bottom Area Start-->
                <div class="header-bottom-area header-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

<!--Main Menu Area Start-->
                                <div class="main-menu-area">
                                    <nav>
                                        <ul class="main-menu">
                                            <li id="home"><a href="../index.html">Home</a></li>

                                           <li><a href="../store.php">Our Store</a></li>


                                           

                                            </li>

                                            <li><a href="../about.html">About Us</a></li>
                                            <li><a href="../near-by-attraction.html">Near By Attraction</a></li>

                                            
                                            <li><a href="../contact.html">Contact us</a></li>
											 <li><a href=#>Our Products<span class="caret"></span></a>
                                                <ul class="dropdown">
                                                    <li><a href="../category/category1.html">Category 1</a> </li>
											    <li><a href="../category/category2.html">Category 2</a> </li>
											   <li><a href="../category/category3.html">Category 3</a> </li>
											   <li><a href="../category/category4.html">Category 4</a> </li>

                                                </ul>
                                            </li>
											

                                        </ul>
                                    </nav>
                                </div>
<!--Main Menu Area End-->
                            </div>
                        </div>
                    </div>
                </div>
<!--Header bottom Area End-->
<!--Mobile Menu Area Start-->
                <div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="mobile-menu">
                                    <nav>
                                        <ul class="main-menu">
                                            <li id="home"><a href="../index.html">Home</a></li>

                                           <li><a href="../store.php">Our Store</a></li>

                                           

                                            </li>

                                            <li><a href="../about.html">About Us</a></li>
                                            <li class="active"><a href="../near-by-attraction.html">Near By Attraction</a>
                                            </li>

                                            
                                            <li><a href="../contact.html">Contact us</a></li>
											 <li><a href=#>Our Products<span class="caret"></span></a>
                                                <ul class="dropdown">
                                                    <li><a href="../category/product1.html">Product 1</a> </li>
                                                    <li><a href="../category/product2.html">Product 2</a> </li>
                                                    <li><a href="../category/product3.html">Product 3</a> </li>
                                                    <li><a href="../category/product4.html">Product 4</a> </li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--Mobile Menu Area End-->
            </div>
        </header>
		
<div class="container-fluid">
        <div class="row"  style="padding:100px 300px;">
          <div class="col-50">
            <div class="container1" >
              <form  action="payscript.php" method="post" style="padding: 25px;">
              
                <div class="row" >
                  <div class="col-25">
                    <h2 style="text-align: center;margin:20px 10px;font-family: lato;">

<?php 
error_reporting(0);
    include('connection.php');  
    $phone = $_POST['fu_phone'];  
	 $email = $_POST['fu_email'];  

// database insert SQL code
$sql = "Select name from signup where(phone = '$phone' && email = '$email')";

//$email for users email we can update it on line 20 to_email section of the PHP mail function

// insert in database 
$rs = mysqli_query($con,$sql);

	while($row = mysqli_fetch_assoc($rs)){
      $result = $row['name'];
   	}

$to_email = "$email";
$subject = "Your Username"; 
$body = "Hi,We just received your forgot username request. The username for the entered Phone :- $phone is:- $result";
$headers = "From: projectp2intern@gmail.com";


if($result) 
{
	mail($to_email, $subject, $body, $headers);
	echo "Your username has been successfully sent on your registered Email address";
}
else{
	echo "Sorry, we could not find the entered Phone Number and Email Address combination in our database.";
}
?>  

</h2>
                </div>               
              </form>
            </div>
          </div>
        </div>
      </div>
<br>
  <!--Footer Area Start-->
        <footer>
          <div class="footer-container bg-3">
  <!--Footer Top Area Start-->
              <div class="footer-top-area ptb-50">
                  <div class="container">
                      <div class="row">
 <!--Single Footer Start-->
                          <div class="col-md-4 col-sm-6">
                              <div class="single-footer">
 <!--Footer Logo Start-->
                                  <div class="footer-logo">
                                      
                                              
                                  </div>
 <!--Footer Logo End-->
 <!--Footer Content Start-->
                                  <div class="footer-content">
                                      <p class="text-dark"><strong>Project P2</strong></p>
                                      <div class="contact">
                                          <p>Project By Team </p><br />

                                      </div>
                                  </div>


                              </div>
<!--Footer Content End-->
                          </div>

 <!--Single Footer End-->
 <!--Single Footer Start-->
                          <div class="col-md-2 col-sm-6">
                              <div class="single-footer mt-30">
                                  <div class="footer-title">
                                  </div>
                                  

                                                             </div>
                          </div>
                          <div class="col-md-2 col-sm-6">
                              <div class="single-footer mt-30">
                                  <div class="footer-title">
                                      <h3>information</h3>
                                  </div>
                                  <ul class="footer-info">
                                      <li><a href="../index.html">Home</a></li>
                                      <li><a href="../about.html">About Us</a></li>
                                      <li><a href="../near-by-attraction.html">Near By Attraction</a></li>
                                      <li><a href="../contact.html">Contact Us</a></li>


                                  </ul>
                              </div>
                          </div>
 <!--Single Footer End-->
 <!--Single Footer Start-->
 <!-- <div class="col-md-2 col-sm-6">
                              <div class="single-footer mt-30">
                                  <div class="footer-title">
                                      <h3>My Account</h3>
                                  </div>
                                  <ul class="footer-info">
                                      <li>My Account</a></li>
                                      <li><a href="contact.html">Contact Us</a></li>
                                      <li>Shopping cart</a></li>
                                      <li>Checkout</a></li>
                                      <li>Portfolio</a></li>
                                      <li>Frequently Questions</a></li>
                                  </ul>
                              </div>
                          </div>
                           -->
 <!--Single Footer End-->
 <!--Single Footer Start-->
                          <div class="col-md-4 col-sm-6">
                              <div class="single-footer mt-30">
                                  <div class="footer-title">
                                      <h3>ADDRESS</h3>
                                    <p>Jaipur, Rajasthan<br/> India, Pin- 302033 </p> 
                                      <p><label>Phone:</label> +91-9999999999</p>
                                      <p><label>Email:</label>projectp2intern@gmail.com</a></p>
                                  </div>

                              </div>
                          </div>
 <!--Single Footer End-->
                      </div>
                  </div>
              </div>
  <!--Footer Top Area End-->
  <!--Footer Bottom Area Start-->
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="row">
                            <!--Footer Left Content Start-->
                            <div class="col-md-6 col-sm-6">
                                <div class="copyright-text ">


                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6" style="text-align: right;">
                                <ul class="socil-icon">
                                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Facebook"><i
                                                class="ion-social-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Google Plus"><i
                                                class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Youtube"><i
                                                class="ion-social-youtube"></i></a></li>

                                </ul>
                            </div>

                        </div>
                        <!--Footer Left Content End-->

                        <!--Footer Right Content End-->
                    </div>
                </div>

              </div>

  <!--Footer Bottom Area End-->
          </div>
      </footer>
<!--Footer Area End-->


<!--All Js Here-->

<!--Jquery 1.12.4(for basic jQuery for nivo slider and scroll up JS files)-->
      <script src="../js/vendor/jquery-1.12.4.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
          integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
          crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.../js/1.12.9/umd/popper.min.js"
          integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
          crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/../js/bootstrap.min.js"
          integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
          crossorigin="anonymous"></script>

<!--Scroll Up(for back to top button)-->
      <script src="../js/jquery.scrollUp.min.js"></script>      
<!-- Meanmenu JS (for mobile dropdown menus)-->
      <script src="../js/jquery.meanmenu.min.js"></script>
      <script src="../js/jquery.fancybox.pack.js"></script>
<!--Nivo Slider JS(for all sliders)-->
      <script src="../js/jquery.nivo.slider.js"></script>
<!--Waypoints-->
      <script src="../js/waypoints.min.js"></script>
<!-- Owl Carousel JS ( for display of featured products)-->
      <script src="../js/owl.carousel.min.js"></script>
<!--Bootstrap-->
      <script src="../js/bootstrap.min.js"></script>
<!--Main Js-->
      <script src="../js/main.js"></script>
</body>
</html>