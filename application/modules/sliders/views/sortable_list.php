<style type="text/css">
	.sort{
		list-style: none;
		border: 1px #ccc solid;
		color: #333;

         margin-bottom: 4px;
	}
</style>
<ul id="sortlist">
	<?php
	$this->load->module('sliders');
	$this->load->module('homepage_slides');
	foreach ($query->result() as $row) {
		$edit_item_url = base_url() . "sliders/create/" . $row->id;
		$view_item_url = base_url() . "sliders/view/" . $row->id;
		$slider_title= $row->slider_title;
		?>
		<li class="sort" id="<?= $row->id?>"><i class="icon-sort"></i><?= $row->slider_title?>
		<?=$slider_title?>

			<?php
			$num_items=$this->homepage_slides->count_where('block_id', $row->id);
		
				if ($num_items == 1) {
					$entity = "slider";
				}else {
					$entity = "Sliders";
                     }
					$sub_cat_url = base_url() . "sliders/manage/" . $row->id;
					?>
					<a class="btn btn-default" href="<?= base_url() ?>">
						<i class="halflings-icon white eye-open"></i>
	
					</a>
					<a class="btn btn-info" href="<?= $edit_item_url ?>">
						<i class="halflings-icon white edit"></i>
					</a>
		
		</li>
	<?php
	}
	?>
</ul>
