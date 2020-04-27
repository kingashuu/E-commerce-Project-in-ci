
<section id="page-content" class="page-wrapper">
	<!-- Start Wishlist Area -->
	<div class="wishlist-area section-padding">
		<div class="container ">
			<h1 class="text-center">Your Orders</h1>
			<?php  if ($num_rows<1) {
				?>
				<div class="text-center">
					<p>You have not pleced any orders so far.</p>
				</div>
				<?php 
			}else{

				?>
				<div class="text-center">
					
				<?= $showing_statement?>
				<?= $pagination?>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="wishlist-content">
							<form action="#">
								<div class="wishlist-table table-responsive p-30 text-uppercase">



									<table>
										<thead>
											<tr>
												<th class="product-name"><span class="nobr"> Order Ref</span></th>
												<th class="product-prices"><span class="nobr"> Order Value</span></th>
												<th class="product-stock-stauts"><span class="nobr"> Date Created </span></th>
												<th class="product-add-to-cart"><span class="nobr">Order Status</span></th>
												<th class="product-removex"><span class="nobr">Actions</span></th>
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
												<tr>													<td class="product-name"><?= $row->order_ref ?></td>
													<td class="product-prices"><span class="amount"><?= $row->mc_gross ?></span></td>
													<td class="product-stock-status"><span class="wishlist-in-stock"><?= $date_created?></span></td>
													<td class="product-add-to-cart"><?= $order_status_title?>
														
													</td>
													<td class="product-removex"><a class="btn btn-info" href="<?= $view_order_url?>">
														<span class=" glyphicon glyphicon-eye-open" aria-hidden="true"> View</span>
													</a></td>
												</tr>
												<?php
											}
											?>
										</tbody>
									</table>

								</div>  
							</form>
						</div>                            
					</div>
				</div>
				<?php 
				?>
				<div class="text-center">
				<?= $pagination?>
				</div>

				<?php
			} ?>
		</div>
	</div>
</section>