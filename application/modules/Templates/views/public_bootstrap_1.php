<!DOCTYPE html>
<html lang="en">

<head>
	<title>CI SHOP</title>
	<!-- Required meta tags always come first -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="Simple - Marketing Template , Responsive Bootstrap 4 template , bootstrap 4 starter template, bootstrap4 template, Jumbotron template">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" lang="en" content="Simple Bootstrap 4 Marketing template , Responsive and Modern HTML5 Template made from bootstrap 4.">
	<meta name="keywords" lang="en" content="Jumbotron template, bootstrap 4 template,bootstrap 4 Marketing template, responsive bootstrap 4 template, bootstrap 4, bootstraping, bootstrap4, oribitthemes">
	<meta name="robots" content="index, follow">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/public_template/img/favicon.ico" type="image/x-icon" />
	<!--Font Awesome-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/public_template/dist/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/public_template/css/fontowsem.css" />
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/public_template/dist/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/public_template/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/public_template/dist/bootstrap/css/ashuu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/public_template/css/carousel.css">
	<!--[if IE]>
	<link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
<![endif]-->
	<!--[if lt IE 9]>
	<link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
<![endif]-->
<!--This is for slider-->
<link href="<?php echo base_url();?>assets/public_template/css/animation.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body style="  padding-top: 3.5rem;  font-size: 16px" >
	<!-- <div class="loader"></div> -->
	<header id="header">
		<nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top bg-dark">
			<!--a class="navbar-brand" href="#" id="header-logo">
				<img src="" class="img-fluid" width="200"
				alt="Logo">
			</a-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?= base_url()?>">Home</a>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<?php
			echo Modules::run('store_categories/_draw_top_nav');
			?>

		</div>
	</nav>
</header>
<main id="main" role="main">
	<div class="jumbotron" style="background-color: #fff;">
		<div class="container" style="min-height: 650px;">
<?php 
if ($customer_id>0) {
include('customer_panel_top.php');
}
?>

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/duWgXRs.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> 
  	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
  	 <span class="sr-only">Previous</span> </a> 
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> 
  	<span class="carousel-control-next-icon" aria-hidden="true"></span> 
  	<span class="sr-only">Next</span> </a> </div>
<slide end> 
	
			<?php

			if (isset($page_content)) {
				echo nl2br($page_content);
				
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

		</div>
	</div>
	<hr>


	<a href="#" class="btn btn-primary scrollUp">
		 <i class="fa fa-arrow-circle-o-up"></i>
	</a>
</main>
<!-- Footer -->
<footer id="footer">
	<p class="copyright">Made with
		<i class="fa fa-heart"></i> By
		<a target="_blank" title="Orbit Themes" href="http://www.orbitthemes.com">Orbit Themes</a> &copy;
		<span id="currentYear"></span> All Rights Reserved.
	</p>
	<div class="social">
		<a traget="_blank" href="#" title="facebook">
			<i class="fa fa-facebook"></i>
		</a>
		<a traget="_blank" href="#" title="twitter">
			<i class="fa fa-twitter"></i>
		</a>
		<a traget="_blank" href="#" title="Google+" target="_blank">
			<i class="fa fa-google-plus"></i>
		</a>
		<a traget="_blank" href="#" title="github" target="_blank">
			<i class="fa fa-github"></i>
		</a>
		<a traget="_blank" href="#" title="Behance" target="_blank">
			<i class="fa fa-behance"></i>
		</a>
		<a traget="_blank" href="#" title="Dribbble" target="_blank">
			<i class="fa fa-dribbble"></i>
		</a>
		<a traget="_blank" href="#" title="Pinterest" target="_blank">
			<i class="fa fa-pinterest"></i>
		</a>
		<a traget="_blank" href="#" title="Reddit" target="_blank">
			<i class="fa fa-reddit"></i>
		</a>
		<a traget="_blank" href="#" title="RSS" target="_blank">
			<i class="fa fa-rss"></i>
		</a>
	</div>
</footer>
<!-- jQuery first, then Bootstrap JS. -->
<script src="<?php echo base_url();?>assets/public_template/dist/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/public_template/dist/popper/popper.min.js" integrity=""></script>
<script src="<?php echo base_url();?>assets/public_template/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/public_template/js/main.min.js"></script>
<script src="<?php echo base_url();?>assets/public_template/js/carousel.js"></script>
</body>

</html>
