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
				<h2><i class="halflings-icon white edit"></i><span class="break"></span> Option</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<a href="<?= base_url()?>sliders/manage"><button type="button" class="btn btn-success">Backe to previous page</button></a>
				<a href="<?= base_url()?>slides/update_group/<?= $update_id?>"><button type="button" class="btn btn-primary">Update Associated Slides</button></a>
				<a href="<?= base_url()?>sliders/deleteconf/<?= $update_id?>"><button type="button" class="btn btn-danger">Delete Entire Slider</button></a>
			</div>

		</div><!--/span-->

	</div><!--/row-->
	<?php
}
?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Slider Details</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php
			$form_location = base_url()."sliders/create/" .$update_id;
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">Slider Title </label>
						<div class="controls">
							<input type="text" class="span6" name="slider_title" value="<?= $slider_title?>">

						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Target URL</label>
						<div class="controls">
							<input type="text" class="span6" name="target_url" value="<?= $target_url?>">

						</div>
					</div>

					<div class="form-actions">
						<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
						<button type="submit" class="btn " name="submit" value="Cancel">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div><!--/row-->

