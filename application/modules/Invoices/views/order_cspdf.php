<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>CI SHOP</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/admin/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
	
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/admin/img/favicon.ico">
	<!-- end: Favicon -->
	
	
	
	
</head>

<body>
	<div class="container">
		<h1><?= $headline ?></h1>
		<h2>Order Status: <?= $status_title ?> </h2>
		<p>Orderd Date: <?= $date_created?></p>
		<p>Orderd By: <?= $store_accounts_data['firstname']." ".$store_accounts_data['lastname']." ".'<b>From</b>'." ".$store_accounts_data['company']?></p>
		

		<?php
		echo Modules::run('paypal/_display_summary_info', $paypal_id);
		?>
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header" data-original-title>
					<h2><i class="halflings-icon white edit"></i><span class="break"></span>Customer Details</h2>
					<div class="box-icon">
						<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
						<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
					</div>
				</div>
				<div class="box-content">

					<table class="table table-striped">  
						<tbody>
							<tr>
								<td class="span3">First Name</td>
								<td class="center"><?= $store_accounts_data['firstname']?></td>                                      
							</tr>
							<tr>
								<td>Last Name</td>
								<td class="center"><?= $store_accounts_data['lastname']?></td>                                      
							</tr>
							<tr>
								<td>Company</td>
								<td class="center"><?= $store_accounts_data['company']?></td>                                      
							</tr>
							<tr>
								<td>Telephon Number</td>
								<td class="center"><?= $store_accounts_data['telnum']?></td>                                      
							</tr>
							<tr>
								<td>Email Address</td>
								<td class="center"><?= $store_accounts_data['email']?></td>                                      
							</tr>
							<tr>
								<td>Customer Address</td>
								<td class="center"><?= $customer_address?></td>                                      
							</tr>
							<tr>
								<td></td>
								<td class="center"><a href="<?= base_url()?>store_accounts/create/<?= $shopper_id ?>"><button type="button" class="btn btn-info">Edit Account Detail</button></a></td>                                      
							</tr>

						</tbody>
					</table>
				</div>
			</div><!--/span-->
		</div><!--/row-->

		<?php 
		$user_type='admin';
		echo Modules::run('cart/_draw_cart_contents', $query_cc, $user_type);
		?>
		</div>
		<script src="<?php echo base_url();?>assets/admin/js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery-migrate-1.0.0.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.ui.touch-punch.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/modernizr.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.cookie.js"></script>

		<script src='<?php echo base_url();?>assets/admin/js/fullcalendar.min.js'></script>

		<script src='<?php echo base_url();?>assets/admin/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url();?>assets/admin/js/excanvas.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.flot.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.flot.stack.js"></script>
		<script src="<?php echo base_url();?>assets/admin/js/jquery.flot.resize.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.chosen.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.uniform.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.cleditor.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.noty.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.elfinder.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.raty.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.iphone.toggle.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.uploadify-3.1.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.gritter.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.imagesloaded.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.masonry.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.knob.modified.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/jquery.sparkline.min.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/counter.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/retina.js"></script>

		<script src="<?php echo base_url();?>assets/admin/js/custom.js"></script>
		<!-- end: JavaScript-->

		</body>
		</html>
