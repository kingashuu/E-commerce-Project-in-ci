<!DOCTYPE html>
<html class="no-js" lang="zxx" <?php if (isset($use_angularjs)) {
    echo ' ng-app="myApp"';
} ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" name="viewport" content="ie=edge width=device-width, initial-scale=1.0">
    <title>CI SHOP ||</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/public_template/images/favicon.ico">

    <!-- All css files are included here -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/public_template/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/public_template/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/public_template/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/public_template/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/public_template/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/public_template/css/custom.css">




    <!-- Modernizr JS -->
    <script src="<?php echo base_url();?>assets/public_template/js/vendor/modernizr-2.8.3.min.js"></script>

    <?php 
    if (isset($use_angularjs)) {
        ?>
        <script type="text/javascript" src="<?php echo base_url()?>assets/angularjs/angular.min.js"></script>
        <?php

    } ?>

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <header>
            <div class="container">
                <div class="row">
                    <p>smoll slider gos her</p>
                </div>
            </div>
            <div class="header-top-bar white-bg ptb-20">

                <div class="container">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="header-logo text-center">
                                <a href="<?php echo base_url();?>">
                                    <img alt="" src="<?php echo base_url();?>assets/public_template/images/logo/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="header-top">
                                <ul>
                                    <!--start of searche bar-->
                                    <li class="lh-50">

                                        <div class="header-bottom-search header-top-downx header-top-hover lh-35">
                                            <form class="header-search-box" action="#" method="POST">
                                                <div>
                                                    <input type="text" value="" placeholder=" Search" autocomplete="off">
                                                    <button class="btn btn-search" type="submit">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </button>
                                                </div>
                                            </form>                                             
                                        </div>
                                    </li>
                                    <!--end of searche bar-->
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="header-top header-top-right">
                                <ul>


                                    <li class="lh-50">
                                        <a href="<?php echo base_url();?>assets/public_template/#" class="pr-20 text-uppercase"><i class="zmdi zmdi-accounts zmdi-hc-4x "></i> </i> my account</a>
                                        <div class="header-top-down header-top-hover pl-15 lh-35">
                                            <ul>
                                                <li><a href="<?php echo base_url();?>youraccount/login">Login</a></li>
                                                <li><a href="<?php echo base_url();?>youraccount/start">Register</a></li>
                                                <li><a href="<?php echo base_url();?>assets/public_template/compare.html">My bag</a></li>
                                                <li><a href="<?php echo base_url();?>assets/public_template/checkout.html">Checkout</a></li>
                                                <li><a href="<?php echo base_url();?>assets/public_template/wishlist.html">Wishlist</a></li>
                                                <li><a href="<?php echo base_url();?>youraccount/logout">Log Out</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <li class="cart-link lh-50">
                                        <a href="<?php echo base_url();?>cart" class="pl-20">
                                            <i class="zmdi zmdi-shopping-basket zmdi-hc-4x"></i>
                                            <span>2</span>
                                        </a>
                                        
                                        <div class="mini-cart-inner header-top-down p-20">
                                          <?php
                                          echo Modules::run('cart/_draw_cart_hover_drop_d');
                                          ?>
                                          
                                          
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div id="sticky-header" class="header-area header-wrapper transparent-header">
            <div class="header-middle-area black-bg">

                <div class="container">
                    <!--loade the mane -->
                    <?php
                    echo Modules::run('store_categories/_draw_top_nav');
                    ?>

                </div>
            </div>
        </div>
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="<?php echo base_url();?>assets/public_template/index.html">Home</a></li>
                                    <li><a href="<?php echo base_url();?>assets/public_template/about.html">About</a></li>
                                    <li><a href="<?php echo base_url();?>assets/public_template/shop-full.html">men</a></li>
                                    <li><a href="<?php echo base_url();?>assets/public_template/blog.html">Blog</a>
                                        <ul class="dropdown header-top-hover ptb-10">
                                            <li><a href="<?php echo base_url();?>assets/public_template/blog.html">Blog</a></li>
                                            <li><a href="<?php echo base_url();?>assets/public_template/blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url();?>assets/public_template/my-account.html">my Acoount</a></li>
                                    <li><a href="<?php echo base_url();?>assets/public_template/login.html">Register</a></li>
                                    <li><a href="<?php echo base_url();?>assets/public_template/contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        <!-- Mobile Menu End -->            
    </header>
    <!-- End of header area -->
    <!-- start of castamare  header area -->

    <!-- end of castamare  header area -->
    <!-- Start of slider area -->
    <div class="slider-area" >
        <?php
        echo Modules::run('Sliders/_attempt_draw_slider');
        ?>

    </div>

    <!-- End of slider area -->
    <!-- Start page content -->

    <?php 
    
    if ($customer_id>0 ) {
       

        include('customer_panel_top.php');

    }
    ?>

    <?php

    if (isset($page_content)) {
        ?>
        <section id="page-content" class="page-wrapper">
            <div class="banner-area section-padding">
                <div class="container">
                    <?php 
                    echo nl2br($page_content); 
                    ?>
                </div>
            </div>
        </section>

        <?php

        if (!isset($page_url)) {
            $page_url='homepage';
        }
        if ($page_url=="") {
            require_once('homepage_content.php');
        } elseif ($page_url == "contactus") {
                //lode the contact us form
            echo modules::run('contactus/_draw_form');
        }
    } elseif (isset($view_file)) {
        $this->load->view($view_module.'/'.$view_file);
    }
    ?>
    <section id="page-content" class="page-wrapper">
        <!-- Start Brand Area -->
        <div class="brand-area pb-90">
            <div class="container">
                <div class="row">
                    <div class="brand-list">
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/brand/1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/brand/2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/brand/3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/brand/4.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/brand/5.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/brand/6.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/brand/1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/brand/2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand text-center">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/brand/3.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Brand Area -->
        <!-- Start Newsletter Area -->
        <div class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="newsletter-content default-bg clearfix ptb-40">
                        <div class="col-md-offset-2 col-md-3 col-sm-5">
                            <div class="newsletter-title text-white text-uppercase">
                                <h4>NewsLetter Sign-Up</h4>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-7">
                            <div class="signup-form">
                                <form class="news-form" action="#">
                                    <input type="text" placeholder="Enter your email address..." class="f-form">
                                    <button class="submit text-uppercase">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Newsletter Area -->
    </section>
    <!-- End page content -->
    <!-- Start footer area -->
    <footer id="footer" class="footer-area">
        <div class="footer-top-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-widget-img pb-30">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/logo/logo-2.png" alt="">
                                </a>
                            </div>
                            <ul class="toggle-footer text-white">
                                <li class="mb-30 pl-45">
                                    <i class="zmdi zmdi-pin"></i>
                                    <p>House No 08, Road No 08, <br>
                                    Din Bari, Dhaka, Bangladesh</p>
                                </li>
                                <li class="mb-30 pl-45">
                                    <i class="zmdi zmdi-email"></i>
                                    <p>Username@gmail.com <br>
                                    Damo@gmail.com</p>
                                </li>
                                <li class="pl-45">
                                    <i class="zmdi zmdi-phone"></i>
                                    <p>+660 256 24857<br>
                                    +660 256 24857</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="text-white footer-information">
                            <h4 class="pb-40 m-0 text-uppercase">information</h4>
                            <ul class="footer-menu">
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Hot Sale</a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>best Seller</a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Suppliers</a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Our Store</a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Deal of The Day</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="text-white footer-account">
                            <h4 class="pb-40 m-0 text-uppercase">MY ACCOUNT</h4>
                            <ul class="footer-menu">
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>My Account</a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Personal Information</a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Discount</a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Orders History</a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Payment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="text-white footer-about-us">
                            <h4 class="pb-40 m-0 text-uppercase">about us</h4>
                            <p>Lorem ipsum dolor sit amet, consecteir our adipisicing elit, sed do eiusmod tempor the incididunt ut labore et dolore magnaa liqua. Ut enim minimn.</p>
                            <ul class="footer-social-icon">
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-rss"></i></a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="<?php echo base_url();?>assets/public_template/#"><i class="zmdi zmdi-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="footer-bottom black-bg ptb-15">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright text-white">
                            <p>Copyright <i class="fa fa-copyright"></i> 2018 <a href="https://freethemescloud.com/" target="_blank" >Free Themes Cloud.</a> All rights reserved. </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-img">
                            <img src="<?php echo base_url();?>assets/public_template/images/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>           
    </footer>
    <!-- End footer area -->
    <!--Quickview Product Start -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="single-product-image">
                                <div id="product-img-content">
                                    <div id="my-tab-content" class="tab-content mb-20">
                                        <div class="tab-pane b-img active" id="view1">
                                            <a class="venobox" href="<?php echo base_url();?>assets/public_template/images/product/product-details/1.jpg" data-gall="gallery" title=""><img src="<?php echo base_url();?>assets/public_template/images/product/product-details/1.jpg" alt=""></a>
                                        </div>
                                        <div class="tab-pane b-img" id="view2">
                                            <a class="venobox" href="<?php echo base_url();?>assets/public_template/images/product/product-details/2.jpg" data-gall="gallery" title=""><img src="<?php echo base_url();?>assets/public_template/images/product/product-details/2.jpg" alt=""></a>
                                        </div>
                                        <div class="tab-pane b-img" id="view3">
                                            <a class="venobox" href="<?php echo base_url();?>assets/public_template/images/product/product-details/3.jpg" data-gall="gallery" title=""><img src="<?php echo base_url();?>assets/public_template/images/product/product-details/3.jpg" alt=""></a>
                                        </div>
                                        <div class="tab-pane b-img" id="view4">
                                            <a class="venobox" href="<?php echo base_url();?>assets/public_template/images/product/product-details/4.jpg" data-gall="gallery" title=""><img src="<?php echo base_url();?>assets/public_template/images/product/product-details/4.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                                        <div class="pro-view b-img active"><a href="<?php echo base_url();?>assets/public_template/#view1" data-toggle="tab"><img src="<?php echo base_url();?>assets/public_template/images/product/product-details/s-1.jpg" alt=""></a></div>
                                        <div class="pro-view b-img"><a href="<?php echo base_url();?>assets/public_template/#view2" data-toggle="tab"><img src="<?php echo base_url();?>assets/public_template/images/product/product-details/s-2.jpg" alt=""></a></div>
                                        <div class="pro-view b-img"><a href="<?php echo base_url();?>assets/public_template/#view3" data-toggle="tab"><img src="<?php echo base_url();?>assets/public_template/images/product/product-details/s-3.jpg" alt=""></a></div>
                                        <div class="pro-view b-img"><a href="<?php echo base_url();?>assets/public_template/#view4" data-toggle="tab"><img src="<?php echo base_url();?>assets/public_template/images/product/product-details/s-4.jpg" alt=""></a></div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="product-details-content">
                                <div class="product-content text-uppercase">
                                    <a href="<?php echo base_url();?>assets/public_template/product-details.html" title="Slim Shirt With Stretch">Slim Shirt With Stretch</a>
                                    <div class="rating-icon pb-20 mt-10">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                    <div class="product-price pb-20">
                                        <span class="new-price">£ 185.00</span>
                                        <span class="old-price">£ 200.00</span>
                                    </div>
                                </div>
                                <div class="product-view pb-20">
                                    <h4 class="product-details-tilte text-uppercase">overview</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                </div>
                                <div class="product-size text-uppercase pb-30">
                                    <h4 class="product-details-tilte text-uppercase pb-10">size</h4>
                                    <ul>
                                        <li><a href="<?php echo base_url();?>assets/public_template/#">s</a></li>
                                        <li><a href="<?php echo base_url();?>assets/public_template/#">m</a></li>
                                        <li><a href="<?php echo base_url();?>assets/public_template/#">l</a></li>
                                        <li><a href="<?php echo base_url();?>assets/public_template/#">xl</a></li>
                                        <li><a href="<?php echo base_url();?>assets/public_template/#">xxl</a></li>
                                    </ul>
                                </div>
                                <div class="product-attributes clearfix">
                                    <div class="product-color text-uppercase pb-30">
                                        <h4 class="product-details-tilte text-uppercase pb-10">color</h4>
                                        <ul>
                                            <li class="color-1"><a href="<?php echo base_url();?>assets/public_template/#"></a></li>
                                            <li class="color-2"><a href="<?php echo base_url();?>assets/public_template/#"></a></li>
                                            <li class="color-3"><a href="<?php echo base_url();?>assets/public_template/#"></a></li>
                                            <li class="color-4"><a href="<?php echo base_url();?>assets/public_template/#"></a></li>
                                        </ul>
                                    </div> 
                                    <div class="pull-left" id="quantity-wanted">
                                        <h4 class="product-details-tilte text-uppercase pb-10">quantity</h4>
                                        <input type="number" value="1">  
                                    </div>                                  
                                </div>
                                <div class="product-action-shop text-center mb-30">
                                    <a href="<?php echo base_url();?>assets/public_template/#" title="Quick view">
                                        <i class="zmdi zmdi-eye"></i>
                                    </a>
                                    <a href="<?php echo base_url();?>assets/public_template/#" title="Add to cart">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </a>
                                    <a href="<?php echo base_url();?>assets/public_template/#" title="Add to Wishlist">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                </div>
                                <div class="socialsharing-product">
                                    <h4 class="product-details-tilte text-uppercase pb-10">share this on</h4>
                                    <button type="button"><i class="zmdi zmdi-facebook"></i></button>
                                    <button type="button"><i class="zmdi zmdi-instagram"></i></button>
                                    <button type="button"><i class="zmdi zmdi-rss"></i></button>
                                    <button type="button"><i class="zmdi zmdi-twitter"></i></button>
                                    <button type="button"><i class="zmdi zmdi-pinterest"></i></button>
                                </div>
                            </div>
                            <!-- .product-info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Quickview Product-->              
</div>
<!-- Body main wrapper end -->    

<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
    <!-- <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script> -->
  <!-- Bootstrap framework js -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  
  <script src="<?php echo base_url();?>assets/public_template/js/vendor/jquery-3.1.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/public_template/js/vendor/vendor.min.js"></script>
  <script src="<?php echo base_url();?>assets/public_template/js/bootstrap.min.js"></script>
  <!-- Particles js -->
  <script src="<?php echo base_url();?>assets/public_template/js/particles.js"></script>
  <!-- All js plugins included in this file. -->
  <script src="<?php echo base_url();?>assets/public_template/js/plugins.js"></script>
  <!-- Main js file that contents all jQuery plugins activation. -->
  <script src="<?php echo base_url();?>assets/public_template/js/main.js"></script>
  <script src="<?php echo base_url();?>assets/public_template/js/custom.js"></script>

</body>

</html>