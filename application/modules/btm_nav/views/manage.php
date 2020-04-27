<h2>Manage Bottom Navigation</h2>
<?php
if (isset($flash)) {
	echo $flash;
}
$create_item_url =base_url()."btm_nav/create";
echo Modules::run('btm_nav/_draw_create_modal');
?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Existing Bottom Navigation Link</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php
			echo Modules::run('btm_nav/_draw_sortable_list');
			?>
		</div>
	</div><!--/span-->

</div><!--/row-->

