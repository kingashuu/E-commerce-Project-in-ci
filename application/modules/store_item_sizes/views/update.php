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
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>New size Option</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<p style="color: #0056b3">Submit new option as required. When you are finished adding new option, press 'Finish'.</p>
			<?php
			$form_location = base_url()."store_item_sizes/submit/" .$update_id;
			?>
			<form class="form-horizontal" method="post" action="<?= $form_location ?>">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">new Option </label>
						<div class="controls">
							<input type="text" class="span6" name="size"">
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
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Existing Colours option</h2>
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
						<th>Sixes</th>
						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$count = 0;
					foreach ($query->result() as $row) {
						$count++;
						$delete_url = base_url() . "store_item_sizes/delete/" . $row->id;
						?>
						<tr>
							<td><?= $count ?></td>
							<td class="center"><?= $row->size ?></td>

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
