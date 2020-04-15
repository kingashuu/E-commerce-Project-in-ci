
<div class="full-width-mega-dropdown">
	<div class="row">
		<div class="col-md-12">

			<nav id="primary-menu">
				<ul class="main-menu text-center">
					<li><a href="<?php echo base_url();?>assets/public_template/index.html">Home</a></li>
					<?php
					$this->load->module('store_categories');
					foreach ($parent_categories as $key => $value) {
						$parent_cat_id=$key;
						$parent_cat_title=$value;

						?>
						<li><a href="#"><?= $parent_cat_title?></a>
							<ul class="dropdown header-top-hover ptb-10">

								<li>
									<?php
									$query=$this->store_categories->get_where_custom('parent_cat_id', $parent_cat_id);
									foreach ($query->result() as $row) {
										$cat_url=$row->cat_url;
										echo '<a href="'.$start_of_target_url.$cat_url.'">'.$row->cat_title.'</a>';
									}
									?>
								</li>

							</ul>
						</li>
						<?php
					}
					?>

				</ul>
			</nav>
		</div>
	</div>
</div>
