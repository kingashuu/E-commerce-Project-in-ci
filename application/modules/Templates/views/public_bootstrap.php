<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Freak</title>
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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/public_template/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?- base_url()assets/css/style.css">



    <!-- Modernizr JS -->
    <script src="<?php echo base_url();?>assets/public_template/js/vendor/modernizr-2.8.3.min.js"></script>

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
        <div class="slider-area">
            <div id="ensign-nivoslider" class="slides">   
                <img src="<?php echo base_url();?>assets/public_template/images/slider/1-1.jpg" alt="" title="#htmlcaption1"/>
                <img src="<?php echo base_url();?>assets/public_template/images/slider/1-2.jpg" alt="" title="#htmlcaption2"/>
                <img src="<?php echo base_url();?>assets/public_template/images/slider/1-2.jpg" alt="" title="#htmlcaption2"/>
            </div> 
           
            <!-- direction 1 -->
            <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-md-offset-5x col-md-7 slider-height">
                            <div class="slide-text">
                                <div class="cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="0s">
                                    <h2><strong>2020</strong></h2>
                                </div>
                                <div class="cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="0s">
                                    <h2>boutique special collection</h2>
                                </div>
                                <div class="cap-sub-title wow bounceInDown mb-30 text-white" data-wow-duration="1.5s" data-wow-delay="0s">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                                </div>
                                <div class="cap-shop wow bounceInUp" data-wow-duration="2s" data-wow-delay=".5s">
                                    <a href="<?php echo base_url();?>assets/public_template/#" class="button extra-small text-uppercase">
                                        <span>Shop now</span>
                                    </a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- direction 2 -->
            <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-md-offset-5 col-md-7 slider-height">
                            <div class="slide-text">
                                <div class="cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="0s">
                                    <h2><strong>2020</strong></h2>
                                </div>
                                <div class="cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="0s">
                                    <h2>special collection</h2>
                                </div>
                                <div class="cap-sub-title wow bounceInDown mb-30 text-white" data-wow-duration="1.5s" data-wow-delay="0s">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                                </div>
                                <div class="cap-shop wow bounceInUp" data-wow-duration="2s" data-wow-delay=".5s">
                                    <a href="<?php echo base_url();?>assets/public_template/#" class="button extra-small text-uppercase">
                                        <span>Shop now</span>
                                    </a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
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



            <!-- End Of Wishlist Area -->

            <!-- Start Product List -->

            <!-- End of Product List -->
            <!-- Start Service Area -->
            <div class="service-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-item text-white pl-120">
                                <i class="zmdi zmdi-shopping-cart"></i>
                                <h4>FREE SHipping</h4>
                                <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item text-white pl-120">
                                <i class="zmdi zmdi-headset"></i>
                                <h4>24/7 SUPPORT</h4>
                                <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item text-white pl-120 rm-0">
                                <i class="zmdi zmdi-balance-wallet"></i>
                                <h4>100% MONEY BACK</h4>
                                <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Service Area -->
            <!-- Start Sale  Area -->
            <div class="sale-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="section-title text-uppercase mb-40">
                                <h4>on sale</h4>
                            </div>
                            <div class="sale-list">
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="<?php echo base_url();?>assets/public_template/product-details.html" title="Men’s White Short Item">
                                                    <img src="<?php echo base_url();?>assets/public_template/images/sale/1.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="<?php echo base_url();?>assets/public_template/#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="<?php echo base_url();?>assets/public_template/product-details.html" title="Men’s White Short Item">
                                                    <img src="<?php echo base_url();?>assets/public_template/images/sale/2.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="<?php echo base_url();?>assets/public_template/#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="<?php echo base_url();?>assets/public_template/product-details.html" title="Men’s White Short Item">
                                                    <img src="<?php echo base_url();?>assets/public_template/images/sale/3.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="<?php echo base_url();?>assets/public_template/#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="section-title text-uppercase mb-40">
                                <h4>Top Rated</h4>
                            </div>
                            <div class="sale-list">
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="<?php echo base_url();?>assets/public_template/product-details.html" title="Men’s White Short Item">
                                                    <img src="<?php echo base_url();?>assets/public_template/images/sale/4.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="<?php echo base_url();?>assets/public_template/#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="<?php echo base_url();?>assets/public_template/product-details.html" title="Men’s White Short Item">
                                                    <img src="<?php echo base_url();?>assets/public_template/images/sale/5.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="<?php echo base_url();?>assets/public_template/#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="<?php echo base_url();?>assets/public_template/product-details.html" title="Men’s White Short Item">
                                                    <img src="<?php echo base_url();?>assets/public_template/images/sale/6.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="<?php echo base_url();?>assets/public_template/#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <div class="offer-banner">
                                <a href="<?php echo base_url();?>assets/public_template/#">
                                    <img src="<?php echo base_url();?>assets/public_template/images/sale/offer.jpg" alt="">
                                </a>
                                <!-- CountDown -->
                                <div class="product-cuntdown white-bg text-center">
                                    <div class="timer">
                                        <div data-countdown="2018/06/01"></div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Sale  Area -->
            <!-- Start Testimonial Area -->
            <div class="testimonial-area">
                <div id="particles-js" class="pt-90 pb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial-title text-white text-uppercase text-center mb-40">
                                    <h4>what customer saying</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <div class="testimonial-list">
                                    <div class="single-testimonial text-center">
                                        <img alt="" src="<?php echo base_url();?>assets/public_template/images/testimonial/1.jpg">
                                        <div class="testimonial-info white-bg clearfix">
                                            <div class="testimonial-author text-uppercase">
                                                <h5>ANIKA MOLLIK</h5>
                                                <p>chairmen</p>
                                            </div>
                                            <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt  
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                        </div>
                                    </div>
                                    <div class="single-testimonial text-center">
                                        <img alt="" src="<?php echo base_url();?>assets/public_template/images/testimonial/2.jpg">
                                        <div class="testimonial-info white-bg clearfix">
                                            <div class="testimonial-author text-uppercase">
                                                <h5>Ashim Kumar</h5>
                                                <p>CEO</p>
                                            </div>
                                            <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt  
                                            labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            <!-- End of Testimonial Area -->
            <!-- Start Blog Area -->
            <div class="blog-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-title text-uppercase mb-40">
                                <h4>latest blog</h4>
                            </div>
                        </div>                      
                    </div>
                    <div class="blog-list">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="<?php echo base_url();?>assets/public_template/#">
                                            <img alt="" src="<?php echo base_url();?>assets/public_template/images/blog/1.jpg">
                                        </a>
                                    </div>
                                    <div class="blog-content pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="<?php echo base_url();?>assets/public_template/#">Blog Post Dummy Title</a></h5>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                    </div>
                                    <div class="blog-content blog-content-overlay pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="<?php echo base_url();?>assets/public_template/#">Blog Post Dummy Title</a></h5>
                                        <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                        <a href="<?php echo base_url();?>assets/public_template/#" class="button extra-small mt-60 text-uppercase">
                                            <span>Read More</span>
                                        </a>
                                    </div>                                    
                                </div>
                            </div>  
                            <div class="col-md-4 col-sm-6">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="<?php echo base_url();?>assets/public_template/#">
                                            <img alt="" src="<?php echo base_url();?>assets/public_template/images/blog/2.jpg">
                                        </a>
                                    </div>
                                    <div class="blog-content pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="<?php echo base_url();?>assets/public_template/#">Blog Post Dummy Title</a></h5>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                    </div>
                                    <div class="blog-content blog-content-overlay pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="<?php echo base_url();?>assets/public_template/#">Blog Post Dummy Title</a></h5>
                                        <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                        <a href="<?php echo base_url();?>assets/public_template/#" class="button extra-small mt-60 text-uppercase">
                                            <span>Read More</span>
                                        </a>
                                    </div>                                    
                                </div>
                            </div>  
                            <div class="col-md-4 hidden-sm">
                                <div class="single-blog rm-0">
                                    <div class="blog-image">
                                        <a href="<?php echo base_url();?>assets/public_template/#">
                                            <img alt="" src="<?php echo base_url();?>assets/public_template/images/blog/1.jpg">
                                        </a>
                                    </div>
                                    <div class="blog-content pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="<?php echo base_url();?>assets/public_template/#">Blog Post Dummy Title</a></h5>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                    </div>
                                    <div class="blog-content blog-content-overlay pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="<?php echo base_url();?>assets/public_template/#">Blog Post Dummy Title</a></h5>
                                        <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="<?php echo base_url();?>assets/public_template/#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                        <a href="<?php echo base_url();?>assets/public_template/#" class="button extra-small mt-60 text-uppercase">
                                            <span>Read More</span>
                                        </a>
                                    </div>                                    
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Blog Area -->
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
    <script src="<?php echo base_url();?>assets/public_template/js/vendor/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/public_template/js/bootstrap.min.js"></script>
    <!-- Particles js -->
    <script src="<?php echo base_url();?>assets/public_template/js/particles.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?php echo base_url();?>assets/public_template/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?php echo base_url();?>assets/public_template/js/main.js"></script>

</body>

</html>