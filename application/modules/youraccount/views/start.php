<!DOCTYPE html>
<html>
<head>
	<title>sugin up</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<section id="page-content" class="page-wrapper">
		<div class="banner-area section-padding">
		</head>
		<body class="sgin_in_body">
			<?php
			$form_location=base_url().'youraccount/submit' ;
			?>
			
			
			<form class="form-horizontal" action="<?= $form_location?>" method="post">
				<fieldset>
					<!-- FORM NAME-->
					<div class="container">

						<div class="row">
							<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
								<form role="form">
									<h2>Please Sign Up <small>It's free and always will be.</small></h2>
									<hr class="colorgraph">
									<?php echo validation_errors("<p style='color: red;'>","</p>");
									?>
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-6">
											
										</div>
									</div>
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="username" value="<?= $username ?>"  class="form-control input-lg" placeholder="Enter your username" tabindex="3">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email"  name="email" value="<?= $email ?>"id="email" class="form-control input-lg" placeholder="Enter email Address" tabindex="4">
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<label>Password</label>
												<input type="password" name="pword" value="<?= $pword ?>" id="password" class="form-control input-lg" placeholder="Enter New password" tabindex="5">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="form-group">
												<label>Repeat Password</label>
												<input type="password" name="repeat_pword"value="<?=$repeat_pword ?>"  id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4 col-sm-3 col-md-3">
											<span class="button-checkbox">
												
												<button type="button" class="btn" data-color="info"> I Agree</button>
												<input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
												
											</div>
											<div class="col-xs-8 col-sm-9 col-md-9">
												<button  id="singlebutton" type="submit"  class="btn btn-primary">Register</button>
												By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
											</div>
										</div>
										<hr class="colorgraph">
										<div class="row">
											<div class="col-xs-12 col-md-6">
												<button  id="singlebutton" type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg">Register</button>
											</div>
											<div class="col-xs-12 col-md-6"><a href="<?= base_url()?>youraccount/login" class="btn btn-success btn-block btn-lg">Sign In</a></div>
										</div>
									</form>
								</div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button " class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
										</div>
										<div class="modal-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						</div>

					</fieldset>
					
				</form>

			</div>
		</section>

		<script
		src="http://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous">   
	</script>

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url()?>assets/js/style.js"></script>

</body>
</html>
