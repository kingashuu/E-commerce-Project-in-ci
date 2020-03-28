<h1>Your Orders</h1>
<?php 
if ($num_rows<1) {
 	echo "<p>You have not pleced any orders so far.</p>";
 }else{

 ?>
<?= $showing_statement?>
<?= $pagination?>

<table class="table table-striped table-bordered bootstrap-datatable ">
	<thead>
		<tr style="background-color: #666; color: white;">
			<th>Order Ref</th>
			<th>Order Value</th>
			<th>Date Created</th>
			<th>Order Status</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$this->load->module('timedate');
		foreach ($query->result() as $row) {
			$view_order_url = base_url()."yourorders/view/".$row->order_ref;
			$date_created = $this->timedate->get_nice_date($row->date_created, 'cool');

			$order_status= $row->order_status;
			$order_status_title = $order_status_option[$order_status];

			?>
			<tr>
				<td><?= $row->order_ref ?></td>
				<td><?= $row->mc_gross ?></td>
				<td><?= $date_created?></td>
				<td class="center"><?= $order_status_title?></td>
				<td class="center">
					<a class="btn btn-info" href="<?= $view_order_url?>">
						<span class="icon-eye-open " aria-hidden="true"> View</span>
					</a>
				</td>
			</tr>
			<?php
		}
		?>

	</tbody>
</table>
<?php echo $pagination;
}
 ?> 