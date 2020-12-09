<?php 
function get_theme($count)
{
	switch ($count) {
		case '1':
		$theme='primary';
		break;
		case '2':
		$theme='warning';
		break;
		case '3':
		$theme='danger';
		break;
		case '4':
		$theme='success';
		break;
		
		default:
		$theme='danger';
		break;
	}
	return $theme;
}
?>
<style type="text/css">
	<!--danger-->
	.panel-danger{
		border-color: #d9534f;
	}
	.panel-danger > .panel-heading{
		color: #fff;
		background-color: #d9534f;
		border-color: #d9534f;
	}

	<!--warning-->
	.panel-warning{
		border-color: #f0ad4e;
	}
	.panel-warning > .panel-heading{
		color: #fff;
		background-color: #f0ad4e;
		border-color: #f0ad4e;
	}
	<!--Primary-->

	.panel-primary{
		border-color: #01a6a9!important;
	}
	.panel-primary > .panel-heading{
		color: #fff;
		background-color: #01a6a9;
		border-color: #01a6a9;
	}
	<!--success-->
	.panel-success{
		border-color: #5cb85c;
	}
	.panel-success > .panel-heading{
		color: #fff;
		background-color: #5cb85c;
		border-color: #5cb85c;
	}
</style>
<section id="page-content" class="page-wrapper">
<div class="my-account-page section-padding">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-uppercase mb-40">
					<h4>special offers</h4>
				</div>
			</div>
		</div>

		<?php
		$count= 0;
		$this->load->module('homepage_offers');
		$this->load->module('site_settings');
		$item_segments= $this->site_settings->_get_item_segments();
		$currency_symbol=$this->site_settings->_get_currency_symbol();
		foreach ($query->result() as $row) {
			$count++;
			$block_id=$row->id;
			$num_items_on_block = $this->homepage_offers->count_where('block_id', $block_id);
			if ($num_items_on_block>0) {


				if ($count > 4) {
					$count = 1;
				}
				$theme=get_theme($count);  
				?>



				<div class="row">
					<div class="addresses-lists">
						<div class="col-xs-12 col-sm-6 col-lg-12">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-<?= $theme?>">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title text-uppercase">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<i class="zmdi zmdi-home"></i>
												<span><?= $row->block_title?></span>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<div class="coupon-info">

												<div class="row ">
													<?php 
													$block_data['block_id'] = $block_id;
													$block_data['theme'] = $theme;
													$block_data['item_segments'] = $item_segments;
													$block_data['currency_symbol'] = $currency_symbol;
													$this->homepage_offers->_draw_offers($block_data);
													?>

												</div>







											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php 
			}
		}
		?>
	</div>
</div>
</section>