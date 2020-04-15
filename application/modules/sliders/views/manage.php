<h2>Manage Sliders</h2>
<?php
if (isset($flash)) {
	echo $flash;
}
$create_item_url =base_url()."sliders/create"
?><p style="margin-top: 30px">
<a href="<?= $create_item_url ?>"><button class="btn btn-large btn-primary" type="submit">Create New Slider</button></a>
</p>
<?php
if ($num_rows<1) {
	echo "<p> You currently have no sliders in the website.</p>";
}else{


?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Existing Slider</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable ">
				<thead>
				<tr>
					<th>Slider Title</th>
					<th>Target URL</th>
					<th class="span2">Actions</th>
				</tr>
				</thead>
				<tbody>
				<?php
				foreach ($query->result() as $row) {
					$edit_page_url = base_url() . "sliders/create/" . $row->id;
					$view_page_url = base_url() . $row->target_url;
					?>
					<tr>
						<td class="center"><?= $row->slider_title?></td>
						<td><?= $view_page_url?></td>
						<td class="center">
							<a class="btn btn-success" href="<?= $view_page_url?>">
								<i class="halflings-icon white zoom-in"></i>
							</a>
							<a class="btn btn-info" href="<?= $edit_page_url ?>">
								<i class="halflings-icon white edit"></i>
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
