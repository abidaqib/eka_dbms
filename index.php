<?php include('server.php') ?>


<!DOCTYPE html>
<html>

<head>
    <title>Soft-Buy a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: Soft-theme</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pignose css -->
    <link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


    <!-- //pignose css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
    <script src="js/jquery.easing.min.js"></script>
</head>

<body>
    <?php include('error.php'); ?>
    <!-- header -->
    <div class="header">
        <div class="container">
            <ul>
                <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
                <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
    </div>
    <!-- //header -->
    <!-- header-bot -->
    <div class="header-bot">
        <div class="container">
            <div class="col-md-3 header-left">
                <h1>
                    <a href="index.html"><img src="images/logo.png"></a>
                </h1>
            </div>
            <div class="col-md-6 Soft-header-middle">
                <form>
                    <div class="search">
                        <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                    </div>
                    <div class="section_room">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">All categories</option>
						<option value="null">Electronics</option>     
						<option value="AX">kids Wear</option>
						<option value="AX">Men's Wear</option>
						<option value="AX">Women's Wear</option>
						<option value="AX">Watches</option>
					</select>
                    </div>
                    <div class="sear-sub">
                        <input type="submit" value=" ">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-md-3 header-right footer-bottom">
                <ul>
                    <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>

                    </li>
                    <li>
                        <a class="fb" href="#"></a>
                    </li>
                    <li>
                        <a class="twi" href="#"></a>
                    </li>
                    <li>
                        <a class="insta" href="#"></a>
                    </li>
                    <li>
                        <a class="you" href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //header-bot -->
    <!-- banner -->

    <!-- //banner-top -->
    <!-- banner -->
    <div class="banner-grid">
        <div id="visual">
            <div class="slide-visual">
                <!-- Slide Image Area (1000 x 424) -->
                <ul class="slide-group">
                    <li><img class="img-responsive" src="images/soft_bg4.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="images/soft_bg3.jpg" alt="Dummy Image" /></li>
                    <li><img class="img-responsive" src="images/soft_bg4.jpg" alt="Dummy Image" /></li>
                </ul>

                <!-- Slide Description Image Area (316 x 328) -->
                <div class="script-wrap">
                    <ul class="script-group">
                        <li>
                            <div class="inner-script"><img class="img-responsive" src="images/soft-fashion1.jpg" alt="Dummy Image" /></div>
                        </li>
                        <li>
                            <div class="inner-script"><img class="img-responsive" src="images/soft-fashion2.jpg" alt="Dummy Image" /></div>
                        </li>
                        <li>
                            <div class="inner-script"><img class="img-responsive" src="images/soft-fashion3.jpg" alt="Dummy Image" /></div>
                        </li>
                    </ul>
                    <div class="slide-controller">
                        <a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide" /></a>
                        <a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide" /></a>
                        <a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide" /></a>
                        <a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide" /></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <script type="text/javascript" src="js/pignose.layerslider.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() {
                $('#visual').pignoseLayerSlider({
                    play: '.btn-play',
                    pause: '.btn-pause',
                    next: '.btn-next',
                    prev: '.btn-prev'
                });
            });
            //]]>
        </script>

    </div>
    <!-- //banner -->
    <!-- content -->
    <!-- //content-bottom -->
    <!-- product-nav -->

    <div class="product-easy">
        <div class="container">

            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion           
                        width: 'auto', //auto or any width like 600px
                        fit: true // 100% fit in a container
                    });
                });
            </script>
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/a1.jpg" alt="" class="pro-image-front">
                                        <img src="images/a1.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$45.99</span>
                                            <del>$69.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/a2.jpg" alt="" class="pro-image-front">
                                        <img src="images/a2.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">1+1 Offer</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Next Blue Blazer</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$99.99</span>
                                            <del>$109.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/a3.jpg" alt="" class="pro-image-front">
                                        <img src="images/a3.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$119.99</span>
                                            <del>$120.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/a4.jpg" alt="" class="pro-image-front">
                                        <img src="images/a4.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Maroon Puma Tshirt</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$79.99</span>
                                            <del>$120.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/a5.jpg" alt="" class="pro-image-front">
                                        <img src="images/a5.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Combo Pack</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Multicoloured TShirts</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/a6.jpg" alt="" class="pro-image-front">
                                        <img src="images/a6.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Air Tshirt Black </a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/a7.jpg" alt="" class="pro-image-front">
                                        <img src="images/a7.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Dresses</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 product-men yes-marg">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="images/a1.jpg" alt="" class="pro-image-front">
                                        <img src="images/a1.jpg" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html">Wedding Blazers</a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$129.99</span>
                                            <del>$150.71</del>
                                        </div>
                                        <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //product-nav -->

    <div class="coupons">
        <div class="container">
            <div class="coupons-grids text-center">
                <div class="col-md-3 coupons-gd">
                    <h3>Buy your product in a simple way</h3>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <h4>LOGIN TO YOUR ACCOUNT</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <h4>SELECT YOUR ITEM</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                </div>
                <div class="col-md-3 coupons-gd">
                    <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                    <h4>MAKE PAYMENT</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="col-md-3 footer-left">
                <h2>
                    <a href="index.html"><img src="images/logo.png" alt=" " /></a>
                </h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
            <div class="col-md-9 footer-right">

                <div class="clearfix"></div>
                <div class="sign-grds">
                    <div class="col-md-4 sign-gd">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="mens.html">Men's Wear</a></li>
                            <li><a href="womens.html">Women's Wear</a></li>
                            <li><a href="electronics.html">Electronics</a></li>
                            <li><a href="codes.html">Short Codes</a></li>
                            <li><a href="checkout.html"> 
                            <?php 
                            if(isset($_SESSION['pemail'])){echo $_SESSION['pemail'];}
                            else{echo"";}
                            ?>
                            </a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 sign-gd-two">
                        <h4>Store Information</h4>
                        <ul>
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k 4th block, <span> City.</span></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : 567 567</li>
                            <li>
                                <form method="post" action="index.php">
                                <input type="submit" name="logout" value="logout">
                                </form>
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
           </p>
        </div>
    </div>
    <!-- //footer -->
    <!-- login -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-bottom">
                                <h3>Sign up for free</h3>
                                <form method="post" action="index.php">
                                    <div class="sign-up">
                                        <h4>Name :</h4>
                                        <input type="text" required="" name="name">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Phone Number :</h4>
                                        <input type="text"  required="" name="number">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Email :</h4>
                                        <input type="text"  required="" name="email">
                                    </div>
                                    <div class="sign-up">
                                        <h4>Password :</h4>
                                        <input type="password"  required="" name="password">

                                    </div>
                                    <div class="sign-up">
                                        <h4>Re-type Password :</h4>
                                        <input type="password"  required="" name="re_password">

                                    </div>
                                    <div class="sign-up">
                                        <input type="submit" value="REGISTER NOW" name="signUpButtom">
                                    </div>

                                </form>
                            </div>
                            <div class="login-right">
                                <h3>Sign in with your account</h3>
                                <form method="post" action="index.php">
                                    <div class="sign-in">
                                        <h4>Email :</h4>
                                        <input type="text" name="email" required="">
                                    </div>
                                    <div class="sign-in">
                                        <h4>Password :</h4>
                                        <input type="password" name="pass" required="">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="sign-in">
                                        <input type="submit" value="SIGNIN" name="signIn">
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
</body>

</html>