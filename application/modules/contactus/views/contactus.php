 <style type="text/css">
 	.map-responsive{
 		overflow:hidden;
 		padding-bottom:56.25%;
 		position:relative;
 		height:0;
 	}
 	.map-responsive iframe{
 		left:0;
 		top:0;
 		height:100%;
 		width:100%;
 		position:absolute;

 	}
 	.hiddenname{
 		display: none;
 	}
 </style>
 <div class="row">
 	<div class="col-md-12">
 		<div style="clear: both">

 			<div class="jumbotron jumbotron-sm">
 				<div class="container">
 					<div class="row">
 						<div class="col-sm-12 col-lg-12">
 							<h1 class="h1">
 								Contact us <small>Feel free to contact us</small></h1>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="container">
 					<div class="row">
 						<div class="col-md-8">
 							<?php echo validation_errors("<p style='color: red;'>", "</p>"); ?>
 							<div class="well well-sm">
 								<form action="<?= $form_location?>" method="post">
 									<div class="row">
 										<div class="col-md-6">
 											<div class="form-group hiddenname">
 												<label for="name">
 												Name</label>
 												<input type="text" name="firstname" class="form-control" id="name" placeholder="first" required="required" />
 											</div>
 											<div class="form-group">
 												<label for="name">
 												Name</label>
 												<input type="text" name="yourname" value="<?= $yourname?>" class="form-control" id="name" placeholder="Enter name" required="required" />
 											</div>
 											<div class="form-group">
 												<label for="email">
 												Email Address</label>
 												<div class="input-group">
 													<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
 												</span>
 												<input type="email" name="email" value="<?= $email?>" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
 											</div>
 											<div class="form-group">
 												<label for="subject">
 												Telephon Number</label>
 												<div class="input-group">
 													<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
 												</span>
 												<input type="telnum" name="telnum" value="<?= $telnum?>" class="form-control" id="telnum" placeholder="Enter phone number" required="required" /></div>
 											</div>
 										</div>
 										<div class="col-md-6">
 											<div class="form-group">
 												<label for="name">
 												Message</label>
 												<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
 												placeholder="Message"><?= $message ?></textarea>
 											</div>
 										</div>
 										<div class="col-md-12">
 											<button type="submit" name="submit" value="submit" class="btn btn-primary pull-right" id="btnContactUs">
 											Send Message</button>
 										</div>
 									</div>
 								</form>
 							</div>
 						</div>
 						<div class="col-md-4">
 							<form>
 								<legend>
 									<span> <i class="fa fa-globe" aria-hidden="true"></i></span> Our office</legend>
 									<address>
 										<strong><?= $our_name?>.</strong><br>
 										<span><i class="fa fa-map-marker"></i></span> <?= $our_address?>
 										<strong>Telphon</strong><br>
 										<span><i class=" fa fa-phone"></i></span><?= $our_telnum?>
 									</address>
 									<address>
 										<span><i class="fa fa-inbox"></i></span> <strong>Our Email</strong><br>
 										<a href="mailto:#">first.last@example.com</a>
 									</address>
 								</form>
 							</div>
 						</div>
 						<div class="row">
 							<div class="col-md-12">
 								<div class="map-responsive">
 									<?= $code?>
 								</div>
 							</div>
 						</div>
 					</div>


 				</div>
 			</div>


 		</div>