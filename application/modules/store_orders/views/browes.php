<h1>Manage Orders</h1>
<h2><?= $current_status_title ?></h2>
<?php
if (isset($flash)) {
	echo $flash;
}

function get_customer_name($firstname, $lastname, $company)
{
	$firstname=trim(ucfirst($firstname));
	$lastname=trim(ucfirst($lastname));
	$company=trim(ucfirst($company));

	$company_length= strlen($company);
	if ($company_length>2) {
		$customer_name=$company;
	}else{
		$customer_name=$firstname." ".$lastname;
	}
	return $customer_name;
}


$paypal_url ="https://www.paypal.com";
?><p style="margin-top: 30px">
<a href="<?= $paypal_url ?>"><button class="btn btn-large btn-primary" type="submit">Visit Paypal</button></a>
</p>

<?php 
if ($num_rows<1){
	echo "<p>There are currently no orders with this order status.</p>";
}else{
	echo "<p>".$showing_statement."</p>"; 
    echo $pagination;
?>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white tag"></i><span class="break"></span>Your Orders</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable">
				<thead>
				<tr>
					<th>Order Ref</th>
					<th>Order Value</th>
					<th>Date Created</th>
					<th>Customer Name</th>
					<th>Order Status</th>
					<th>Opened</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$this->load->module('timedate');
				foreach ($query->result() as $row) {
					$view_order_url = base_url() . "store_orders/view/" . $row->id;
					$opened= $row->opened;
					$date_created = $this->timedate->get_nice_date($row->date_created, 'full');

					$firstname = $row->firstname;
					$lastname = $row->lastname;
					$company = $row->company;

					$customer_name = get_customer_name($firstname, $lastname, $company);
					if (isset($row->status_title)) {
						$order_status = $row->status_title;
					}else{
						//order_status is 0
						$order_status = 'Order Submitted';
					}

					if ($opened==1) {
						$status_label ="success";
						$status_desc ="Opened";
					}else{
						$status_label ="important";
						$status_desc ="unopened";
					}
					?>
					<tr>
						<td><?= $row->order_ref ?></td>
						<td><?= $row->mc_gross ?></td>
						<td><?= $date_created?></td>
						<td class="center"><?= $customer_name ?></td>
						<td class="center"><?= $order_status ?></td>
						<td class="center">
							<span class="label label-<?= $status_label?>"><?= $status_desc?></span>
						</td>
						<td class="center">
							<a class="btn btn-success" href="<?= $view_order_url?>">
								<i class="halflings-icon white zoom-in"></i>
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
echo $pagination;
}
 ?>

