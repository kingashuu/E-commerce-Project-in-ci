<h1><?= $headline ?></h1>
<?= validation_errors("<p style='color: #ff0000'>","</p>");?>
<?php
if (isset($flash)) {
	echo $flash;
}
if (is_numeric($update_id)) {
	?>
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white tag"></i><span class="break"></span>Account Option</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<a href="<?= base_url()?>store_accounts/update_pword/<?= $update_id?>"><button type="button" class="btn btn-primary">update Password</button></a>
				<a href="<?= base_url()?>store_accounts/deleteconf/<?= $update_id?>"><button type="button" class="btn btn-danger">Delete Account</button></a>
			</div>

		</div><!--/span-->

	</div><!--/row-->
	<?php
}
?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Account Details</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php
			$form_location = base_url()."store_accounts/create/" .$update_id;
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
				<fieldset>
					<div class="control-group"> <label class="control-label" for="typeahead">Username</label> <div class="controls"> <input type="text" class="span6" name="username" value="<?= $username?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">First Name </label> <div class="controls"> <input type="text" class="span6" name="firstname" value="<?= $firstname?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">Last Name </label> <div class="controls"> <input type="text" class="span6" name="lastname" value="<?= $lastname?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">Company </label> <div class="controls"> <input type="text" class="span6" name="company" value="<?= $company?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">Address Line1 </label> <div class="controls"> <input type="text" class="span6" name="address1" value="<?= $address1?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">Address Line2 </label> <div class="controls"> <input type="text" class="span6" name="address2" value="<?= $address2?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">Twon </label> <div class="controls"> <input type="text" class="span6" name="twon" value="<?= $twon?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">Country </label> <div class="controls"> <input type="text" class="span6" name="country" value="<?= $country?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">Postcode </label> <div class="controls"> <input type="text" class="span6" name="postcode" value="<?= $postcode?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">Telephone number </label> <div class="controls"> <input type="text" class="span6" name="telnum" value="<?= $telnum?>"> </div> </div>
					<div class="control-group"> <label class="control-label" for="typeahead">Email </label> <div class="controls"> <input type="text" class="span6" name="email" value="<?= $email?>"> </div> </div>

					<div class="form-actions">
						<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
						<button type="submit" class="btn " name="submit" value="Cancel">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div><!--/row-->
