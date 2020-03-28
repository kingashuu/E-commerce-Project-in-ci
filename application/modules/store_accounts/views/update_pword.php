<h1><?= $headline ?></h1>
<?= validation_errors("<p style='color: #ff0000'>","</p>");?>
<?php
if (isset($flash)) {
	echo $flash;
}
?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Form</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php
			$form_location = base_url()."store_accounts/update_pword/" .$update_id;
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
				<fieldset>

	             <div class="control-group"> <label class="control-label" for="typeahead">Password</label> <div class="controls"> <input type="password" class="span6" name="pword" > </div> </div>
	             <div class="control-group"> <label class="control-label" for="typeahead">Repeat Password</label> <div class="controls"> <input type="password" class="span6" name="repeat_pword" > </div> </div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
						<button type="submit" class="btn " name="submit" value="Cancel">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div><!--/row-->
