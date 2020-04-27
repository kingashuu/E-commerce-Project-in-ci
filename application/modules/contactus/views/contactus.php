
<!-- Start Breadcrumbs Area -->
<div class="breadcrumbs-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs text-center text-white">
					<h3 class="text-uppercase">Contact US</h3> 
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Of Breadcrumbs Area -->
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
	<?php echo validation_errors("<p style='color: red;'>", "</p>"); ?>
	<!-- Map Area Start -->
	<div class="map-area">
		<div id="googleMap" style="width:100%;height:600px;">
			<div class="map-responsive">
				<?= $code?>
			</div>
		</div>
	</div>
	<!-- Map Area End -->
	<!-- Address Information Area Start -->
	<div class="address-info-area mb-90">
		<div class="container">
			<div class="row">
				<div class="address-info p-90 clearfix">
					<div class="col-md-5 col-sm-6">
						<div class="contact-form">
							<div class="title text-uppercase mb-15">
								<h4><strong>get in touch</strong></h4>
							</div>
							<form action="<?= $form_location?>" method="post">
								<div class="form-group hiddenname" style="display: none;">
									<label for="name">
									Name</label>
									<input type="text" name="firstname" class="form-control" id="name" placeholder="first" required="required" />
								</div>
								<label for="name">Name</label>
								<input type="text" name="yourname" value="<?= $yourname?>" id="name" placeholder="Enter name" required="required" />
								<label for="subject">Telephon Number</label>
								<input type="email" name="email" value="<?= $email?>" id="email" placeholder="Enter email" required="required" />
								<label for="subject">Telephon Number</label>
								<input type="telnum" name="telnum" value="<?= $telnum?>" id="telnum" placeholder="Enter phone number" required="required" />
								<textarea name="message" placeholder="Message"><?= $message ?></textarea>
								<button class="submit-btn mt-20" type="submit" name="submit" value="submit"><i class="zmdi zmdi-mail-send"></i> submit message</button>
							</form>
							<p class="form-messege"></p>
						</div>
					</div>
					<div class="col-md-offset-2 col-md-5 col-sm-6">
						<div class="contact-address">
							<div class="title text-uppercase mb-15">
								<h4><strong>CONTACT FORM</strong></h4>
							</div>
							<ul class="toggle-footer text-ash p-30">
								<li class="mb-30 pl-45">
									<i class="zmdi zmdi-pin"></i>
									<p>House No 2055, Road No 02, <br>
									Sabiyan, Dire Dawa, Ethiopia</p>
								</li>
								<li class="mb-30 pl-45">
									<i class="zmdi zmdi-email"></i>
									<p>abekele76@gmail.com <br>
									first.last@example.com</p>
								</li>
								<li class="pl-45">
									<i class="zmdi zmdi-phone"></i>
									<p>+660 256 24857<br>
									+660 256 24857</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Address Information Area End -->
</section>