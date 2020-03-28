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
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Blog Entry Details</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php
			$form_location = base_url()."blog/create/" .$update_id;
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
				<fieldset>

					<div class="control-group">
						<label class="control-label" for="typeahead">Date Published </label>
						<div class="controls">
							<input type="text" name="date_published" class="input-xlarge datepicker" id="date01" value="<?= $date_published?>">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="typeahead">Blog Title </label>
						<div class="controls">
							<input type="text" class="span6" name="page_title" value="<?= $page_title?>">
						</div>
					</div>


					<div class="control-group hidden-phone">
						<label class="control-label" >Blog Keywords</label>
						<div class="controls">
							<textarea class="span6" rows="3" name="page_keywords">
								<?php echo $page_keywords ;?>
							</textarea>
						</div>
					</div>

					<div class="control-group hidden-phone">
						<label class="control-label" >Blog Description</label>
						<div class="controls">
							<textarea class="span6" rows="3" name="page_description">
								<?php echo $page_description ;?>
							</textarea>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="textarea2">Blog Content
						</label>
						<div class="controls">
							<textarea class="cleditor" id="textarea2" rows="3" name="page_content">
								<?php echo $page_content ;?>
							</textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Author </label>
						<div class="controls">
							<input type="text" class="span6" name="author" value="<?= $author?>">
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
<?php
if (is_numeric($update_id)) {
	?>
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Additional Option</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<?php
				if ($picture =="") {
					?>
					<a href="<?= base_url() ?>blog/upload_image/<?= $update_id ?>">
						<button type="button" class="btn btn-primary">upload  Image</button>
					</a>
					<?php
				}else{
					?>
					<a href="<?= base_url() ?>blog/delete_image/<?= $update_id ?>">
						<button type="button" class="btn btn-danger">Delete Image</button>
					</a>
					<?php
				}
				if ($update_id>7) {
					?>
					<a href="<?= base_url() ?>blog/deleteconf/<?= $update_id ?>">
						<button type="button" class="btn btn-danger">Delete blog</button>
					</a>
					<?php
				}
				?>
				<a href="<?= base_url().$page_url?>"><button type="button" class="btn btn-success">View blog</button></a>


			</div>

		</div><!--/span-->

	</div><!--/row-->
	<?php
}
if ($picture !=""){
	?>
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Image</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<img src="<?= base_url()?>blog_pics/<?= $picture ?>">
			</div>
		</div><!--/span-->
	</div><!--/row-->
	<?php
}
?>


