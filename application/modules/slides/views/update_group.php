<h2><?= $headlin?></h2>
<?php
if (isset($flash)) {
	echo $flash;
}
$create_blog_url = base_url()."blog/create";
echo Modules::run('slides/_draw_create_modal', $parent_id);
if ($num_rows<1) {
	echo 'so far you have not uploaded any '.$entity_name.' for '.$parent_title.'.';
}else{

?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white file"></i><span class="break"></span>Existing Slides</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable ">
				<thead>
					<tr>
						<th>Picture</th>
						<th class="span2">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$this->load->module('timedate');
					foreach ($query->result() as $row) {
						$target_url=$row->target_url;
						$edit_page_url = base_url() . "slides/view/" . $row->id;
						if ($target_url=='') {
						$view_page_url = $target_url;
						}
						$picture = $row->picture;
						$pic_path = base_url() . 'slider_pics/' . $picture;
						?>
						<tr>
							<td><?php
							if ($picture!='') {
								?>
								<img src="<?= $pic_path?>">
								<?php
							}
							?></td>
							
							<td class="center">
								<?php
								if (isset($view_page_url)) {
								?>
								
								<a class="btn btn-success" href="<?= $view_page_url?>">
									<i class="halflings-icon white zoom-in"></i>
								</a>
								<?php
							}
							?>

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