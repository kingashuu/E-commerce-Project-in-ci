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
	foreach ($query->result() as $row) {
		$delete_item_url = base_url() . "btm_nav/delete/" . $row->id;
		
		?>
		<li class="sort" id="<?= $row->id?>"><i class="icon-sort"></i><b>Page URL:</b> <?= $row->page_url?>
		| <b>Page Title:</b> <?=$row->page_title?>
		<?php 
         if (!in_array($row->page_id, $special_pages)) {
         	?>
		<a class="btn btn-danger" href="<?= $delete_item_url ?>">
			<i class="halflings-icon white trash"></i>
		</a>
         	<?php
         }
		 ?>
		
	</li>
	<?php
}
?>
</ul>
