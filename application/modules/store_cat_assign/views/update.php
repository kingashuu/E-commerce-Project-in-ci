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
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>New Category</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<p style="color: #0056b3">choose a New category and press submit.</p>
			<?php
			$form_location = base_url()."store_cat_assign/submit/" .$item_id;
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">new Option </label>
						<div class="controls">
							<?php
							$additional_dd_code = 'id="selectError3"';
							echo form_dropdown('cat_id', $options, $cat_id, $additional_dd_code)
							?>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
						<button type="submit" class="btn " name="submit" value="Finished">Finished</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div><!--/row-->

<!---- fore showing Item colours -->
<?php
if ($num_rows>0) {

	?>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Existing Assigned Category</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable ">
					<thead>
					<tr>
						<th>Count</th>
						<th>Item Titel</th>
						<th>Category Title</th>
						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$count = 0;
					$this->load->module('store_categories');
					foreach ($query->result() as $row) {
						$count++;
						$delete_url = base_url() . "store_cat_assign/delete/" . $row->id;
						$parent_cat_title = $this->store_categories->_get_parent_cat_title($row->cat_id);
						$cat_title = $this->store_categories->_get_cat_title($row->cat_id);
						$long_cat_title = $parent_cat_title . ">" . $cat_title;

						$this->load->module('store_items');
						?>
						<tr>
							<td><?= $count ?></td>
							<td class="center"><?= $long_cat_title ?></td>

							<td class="center">
								<a class="btn btn-danger" href="<?= $delete_url?>">
									<i class="halflings-icon white trash"></i>Remove Option
								</a>
							</td>
						</tr>
						<?php
					}
					?>

					</tbody>
				</table>
			</div>
		</div><!--/span-->

	</div><!--/row-->
	<?php
}
	?>
