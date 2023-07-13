<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Store</title>
    <!--theme swiching-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/theme.js"></script>

    <!--pincode popup and validation -->
    <script src="js/pincode-validate.js"></script>
    <script src="js/popup.js"></script>
    <link rel="stylesheet" href="css/popup.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!-- Ionicons Font CSS-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- font awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    
    
    
    
    
    <!-- Meanmenu CSS (for mobile dropdown menus)-->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    
    
    
    
    <!--Nivo Slider CSS(for all sliders)-->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- Owl Carousel CSS ( for display of featured products)-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    
    
    


    
    
    
    

</head>

<body>


        <div class="container-fluid">
                <div>
                    <?php
                    $count = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }
                    ?>


                </div>
            </div>
        </div>
                                 
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
                                       <li class="support"><span><a id="signup" href = "signup.html">Sign Up | </a><a id="login"href = "login.html">Login</a></span></li>
                                      
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
                                                        <a href="mycart.php"><i class="ion-android-cart"></i><span class="cart-add"><?php echo $count; ?></span><span class="cart-total"> My Cart (<?php echo $count; ?>)</a>
                                                                               </li>
                                   </ul>
                               </div>
                           </div>
                           <!--Mini Cart End-->
                       </div>
                   </div>
               </div>
               <!--Header Middel Area End-->
                            <!--Header bottom Area Start-->
                            <div class="header-bottom-area header-sticky">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!--Main Menu Area Start-->
                                            <div class="main-menu-area">


                                                <nav>
                                                    <ul class="main-menu">
                                                        <li id="home"><a href="index.html">Home</a></li>


                                                      
                                                        <li class="active"><a href="store.php">Our Store</a></li>
                                                    

                                                        </li>

                                                        <li ><a href="about.html">About Us</a></li>
                                                        <li><a href="near-by-attraction.html">Near By Attraction</a></li>

                                                        
                                                        <li><a href="contact.html">Contact us</a></li>
														  <li><a href=#>Our Products<span class="caret"></span></a>
                                                            <ul class="dropdown">
                                                                <li><a href="category/category1.html">Category 1</a> </li>
                                                                <li><a href="category/category2.html">Category 2</a> </li>
                                                                <li><a href="category/category3.html"> Category 3</a> </li>
                                                                <li><a href="category/category4.html">Category 4</a> </li>

                                                            </ul>
                                                        </li></ul>
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
                                                        <li id="home"><a href="index.html">Home</a></li>


                                                        <li class="active"><a href="store.php">Our Store</a></li>

                                                      
                                                        </li>

                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="near-by-attraction.html">Near By Attraction</a></li>

                                                        
                                                        <li><a href="contact.html">Contact us</a></li>
														  <li><a href=#>Our Products<span class="caret"></span></a>
                                                            <ul class="dropdown">
                                                                <li><a href="category/category1.html">Category 1</a> </li>
                                                                <li><a href="category/category2.html">Category 2</a> </li>
                                                                <li><a href="category/category3.html" >Category 3></a> </li>
                                                                <li><a href="category/category4.html">Category 4</a> </li>

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
        

    <div class="container mt-5">
	<br>
	        <h2> Herbs Section</h2>

        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src=" " class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://cdn.britannica.com/27/171027-050-7F7889C9/flower-buds-clove-tree.jpg" class="card-img-top" width="400" height="250">

                            <h5 class="card-title">Cloves (50g)</h5>
                            <p class="card-text">Price: Rs.74</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Cloves (50g)">
                            <input type="hidden" name="Price" value="74">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://m.media-amazon.com/images/I/616kCiMkUKL._SX679_.jpg"class="card-img-top" width="400" height="250">
                            

                            <h5 class="card-title">Chilli Powder (500g)</h5>
                            <p class="card-text">Price: Rs.230</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Chilli Powder (500g)">
                            <input type="hidden" name="Price" value="230">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/71OFZ3vXuxL._SX679_.jpg"class="card-img-top" width="400" height="250">
                            <h5 class="card-title">Cardamom (50g)</h5>
                            <p class="card-text">Price: Rs.190</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Cardamom (50g)">
                            <input type="hidden" name="Price" value="190">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                        <img src="https://5.imimg.com/data5/FO/UI/IF/SELLER-38612494/black-pepper-500x500.jpg" class="card-img-top" width="400" height="250">
                            <h5 class="card-title">Black Pepper (100g)</h5>
                            <p class="card-text">Price: Rs.76</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Black Pepper (100g)">
                            <input type="hidden" name="Price" value="76">

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <center>

           
        <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src=" " class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://www.thespruceeats.com/thmb/WYCG08Ec_5SwLNIju1cyCT12Nno=/1147x860/smart/filters:no_upscale()/sb10069325z-001-56a497ba5f9b58b7d0d7b917.jpg" class="card-img-top" width="400" height="250">

                            <h5 class="card-title">Coriander Powder (200g)</h5>
                            <p class="card-text">Price: Rs.48</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Coriander Powder (200g)">
                            <input type="hidden" name="Price" value="48">

                        </div>
                    </div>
                </form>
            </div>
            </center>
            
            
        </div>

        <h2> Fruits Section</h2>
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src=" " class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://www.jiomart.com/images/product/original/590000070/pineapple-queen-1-pc-0-20201119.jpg" class="card-img-top" width="400" height="250">

                            <h5 class="card-title">Pineapple 1 pc - (Approx 750g - 850g)</h5>
                            <p class="card-text">Price: Rs.125</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Pineapple 1 pc - (Approx 750g - 850g)">
                            <input type="hidden" name="Price" value="125">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://www.news-medical.net/image.axd?picture=2020%2F12%2Fshutterstock_1291478515.jpg"class="card-img-top" width="400" height="250">

                            <h5 class="card-title">Pomegranate 6 pcs - (Approx 800g - 850g)</h5>
                            <p class="card-text">Price: Rs.190</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Pomegranate 6 pcs - (Approx 800g - 850g)">
                            <input type="hidden" name="Price" value="190">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                        <img src="https://static.libertyprim.com/files/familles/poire-large.jpg?1569271830"class="card-img-top" width="400" height="250">
                            <h5 class="card-title">Pear (1kg)</h5>
                            <p class="card-text">Price: Rs.110</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Pear (1kg)">
                            <input type="hidden" name="Price" value="110">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                        <img src="https://images.hindustantimes.com/rf/image_size_960x540/HT/p2/2018/05/18/Pictures/_cdbf52fa-5a63-11e8-b431-73159b4b09e2.jpg" class="card-img-top" width="400" height="250">
                            <h5 class="card-title">Banana (1kg)</h5>
                            <p class="card-text">Price: Rs.41</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Banana (1kg)">
                            <input type="hidden" name="Price" value="41">

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <center>

           
        <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src=" " class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://images-prod.healthline.com/hlcmsresource/images/AN_images/health-benefits-of-apples-1296x728-feature.jpg" class="card-img-top" width="400" height="250">

                            <h5 class="card-title">Apple 6 pcs - (Approx 500g-600g)</h5>
                            <p class="card-text">Price: Rs.207</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Apple 6 pcs - (Approx 500g-600g)">
                            <input type="hidden" name="Price" value="207">

                        </div>
                    </div>
                </form>
            </div>
            </center>
            
            
        </div>

        <h2> Vegetable section</h2>
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src=" " class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://media.newyorker.com/photos/5b6b08d3a676470b4ea9b91f/4:3/w_1920,h_1440,c_limit/Rosner-Lettuce.jpg" class="card-img-top" width="400" height="250">

                            <h5 class="card-title">Iceberg Lettuce 1 pc - (Approx 500g-800g)</h5>
                            <p class="card-text">Price: Rs.175</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Iceberg Lettuce 1 pc - (Approx 500g-800g)">
                            <input type="hidden" name="Price" value="175">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://post.medicalnewstoday.com/wp-content/uploads/sites/3/2020/02/270678_1100-800x825.jpg"class="card-img-top" width="400" height="250">

                            <h5 class="card-title">Celery (200g)</h5>
                            <p class="card-text">Price: Rs.108</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Celery (200g)">
                            <input type="hidden" name="Price" value="108">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                        <img src="https://www.bigbasket.com/media/uploads/p/l/40138448_3-fresho-baby-spinach.jpg"class="card-img-top" width="400" height="250">
                            <h5 class="card-title">Baby Spinach (100g)</h5>
                            <p class="card-text">Price: Rs.115</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Baby Spinach (100g)">
                            <input type="hidden" name="Price" value="115">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                        <img src="https://domf5oio6qrcr.cloudfront.net/medialibrary/5138/h0618g16207257173805.jpg" class="card-img-top" width="400" height="250">
                            <h5 class="card-title">Avocado 1 pc - (Medium)</h5>
                            <p class="card-text">Price: Rs.320</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Avocado 1 pc - (Medium)">
                            <input type="hidden" name="Price" value="320">

                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src=" " class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://cdn.mos.cms.futurecdn.net/r8NK24bmcMgSib5zWKKQkW.jpg" class="card-img-top" width="400" height="250">

                            <h5 class="card-title">Broccoli (1kg)</h5>
                            <p class="card-text">Price: Rs.140</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Broccoli (1kg)">
                            <input type="hidden" name="Price" value="140">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                            <img src="https://cdn.shopify.com/s/files/1/0432/2849/6022/products/lady-finger_434x.jpg?v=1603233095"class="card-img-top" width="400" height="250">

                            <h5 class="card-title">Ladies Finger (1kg)</h5>
                            <p class="card-text">Price: Rs.70</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Ladies Finger (1kg)">
                            <input type="hidden" name="Price" value="70">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                        <img src="http://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-seeds-baby-corn-f1-hybrid-vegetable-seeds-16969051013260.jpg?v=1601347841"class="card-img-top" width="400" height="250">
                            <h5 class="card-title">Baby Corn (1kg)</h5>
                            <p class="card-text">Price: Rs.110</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Baby Corn (1kg)">
                            <input type="hidden" name="Price" value="110">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">


                    <div class="card">
                        <img src="" class="card-img-top">
                        <div class="card-body text-center">
                        <img src="https://static.toiimg.com/photo/69756751.cms" class="card-img-top" width="400" height="250">
                            <h5 class="card-title">Arbi (500g)</h5>
                            <p class="card-text">Price: Rs.80</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Arbi (500g)">
                            <input type="hidden" name="Price" value="80">

                        </div>
                    </div>
                </form>
            </div>
        </div>








        </div>
    </div>
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
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="near-by-attraction.html">Near By Attraction</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>


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
                                        <p><label>Phone:</label> +91-99999-99999</p>
                                        <p><label>Email:</label> projectp2intern@gmail.com</a></p>
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

                <!--Footer Bottom Area End-->
            </div>
        </footer>
        <!--Footer Area End-->


        <!--All Js Here-->

        <!--Jquery 1.12.4(for basic jQuery for nivo slider and scroll up JS files)-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        
        
        
    
        
        
        
        
        
        
        <!--Scroll Up(for back to top button)-->
        <script src="js/jquery.scrollUp.min.js"></script>
        
        
        <!-- Meanmenu JS (for mobile dropdown menus)-->
        <script src="js/jquery.meanmenu.min.js"></script>
        
        
        
        
            <script src="js/jquery.fancybox.pack.js"></script>
        <!--Nivo Slider JS(for all sliders)-->
        <script src="js/jquery.nivo.slider.js"></script>
        <!--Waypoints-->
        <script src="js/waypoints.min.js"></script>
        <!-- Owl Carousel JS ( for display of featured products)-->
        <script src="js/owl.carousel.min.js"></script>
        
        
        
        
        <!--Bootstrap-->
        <script src="js/bootstrap.min.js"></script>
        
        
        <!--Main Js-->
        <script src="js/main.js"></script>

    

</body>

</html>