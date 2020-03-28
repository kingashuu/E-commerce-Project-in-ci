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
	$this->load->module('store_categories');
	foreach ($query->result() as $row) {
		$num_sub_cats = $this->store_categories->_count_sub_cat($row->id);
		$edit_item_url = base_url() . "store_categories/create/" . $row->id;
		$view_item_url = base_url() . "store_categories/view/" . $row->id;

		if ($row->parent_cat_id == 0) {
			$parent_cat_title = ' ';
		} else {
			$parent_cat_title = $this->store_categories->_get_cat_title($row->parent_cat_id);

		}

		?>
		<li class="sort" id="<?= $row->id?>"><i class="icon-sort"></i><?=$row->cat_title?>
		<?=$parent_cat_title?>

			<?php
			if ($num_sub_cats < 1) {
				echo "&nbsp;";
			}else{
				if ($num_sub_cats == 1) {
					$entity = "category";
				}else {
					$entity = "categories";
					$sub_cat_url = base_url() . "store_categories/manage/" . $row->id;
					?>

					<a class="btn btn-default" href="<?= $sub_cat_url ?>">
						<i class="halflings-icon white zoom-in"></i>
						<?php echo $num_sub_cats . "Sub " . $entity ?>
					</a>
					<a class="btn btn-info" href="<?= $edit_item_url ?>">
						<i class="halflings-icon white edit"></i>
					</a>
					<?php
				}
			}
			?>
		</li>
		<?php
	}
	?>
</ul>
