<div class="breadcrumbs-area section-padding">
	<div class="row">
		<div class="col-md-12">
			<div class="breadcrumbs text-center text-white">
				<h3 class="text-uppercase"><?= $cat_title ?></h3>
			</div>
		</div>
	</div>

</div>

<div class="shop-view-area pt-90 mb-40">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-2 col-xs-4">
				<div class="shop-tab-pill">
					<ul>
						<li class="active"><a data-toggle="pill" href="#home"><i class="zmdi zmdi-apps"></i><span></span></a></li>
						<li><a data-toggle="pill" href="#menu1"><i class="zmdi zmdi-view-list"></i><span></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-8">
				<div class="shop-tab-pill">
					<div class="show-label text-center">
						<label class="text-uppercase"><?= $showing_statement ?></label>

					</div>
				</div>
			</div>
			<div class="col-sm-3 hidden-xs">
				<?= $pagination ?>
			</div>

		</div>
	</div>
</div>
<!-- End Of Shop Full Grid View -->
<!-- Start Product List -->
<div class="product-list-tab">
	<div class="container">
		<div class="row">



			<div class="product-list tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="home">
					<?php
					foreach ($query->result() as $row) {
						// $item_id=$row->item_id;
						$item_title = $row->item_title;
						$small_pic = $row->small_pic;
						$item_price = $row->item_price;
						$was_price = $row->was_price;
						$small_pic_path = base_url() . "small_pics/" . $small_pic;
						$item_page = base_url() . $item_segments . $row->item_url;

					?>

						<div class="col-md-3 col-sm-4 col-xs-12 pb-50">
							<div class="single-product">
								<div class="product-img-content mb-0 ">
									<div class="slider-for product-img">
										<a href="<?= $item_page ?>">
											<img src="<?= $small_pic_path ?>" alt="<?= $item_title ?>">
										</a>
									</div>
									<span class="new-label text-uppercase">new</span>

									<div class="product-action text-center">

										<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
											<i class="zmdi zmdi-eye"></i>
										</a>
										<a href="#" title="Add to cart" role="button" class="js-addcart-detail">
											<i class="zmdi zmdi-shopping-cart" role="button"></i>
										</a>
										<a href="#" class="js-addwish-b2" title="Add to Wishlist">
											<i class="zmdi zmdi-favorite" role="button"></i>
										</a>

									</div>



									<div class="slider-nav product_gallery text-center">

										<img src="<?= base_url() ?>assets/public_template/images/banner/1.jpg">
										<img src="<?= base_url() ?>assets/public_template/images/banner/1.jpg">
										<img src="<?= base_url() ?>assets/public_template/images/banner/1.jpg">
										<img src="<?= base_url() ?>assets/public_template/images/banner/1.jpg">
										<img src="<?= base_url() ?>assets/public_template/images/banner/1.jpg">
										<img src="<?= base_url() ?>assets/public_template/images/banner/1.jpg">

									</div>


								</div>
								<div class="product-content text-center text-uppercase">
									<a href="<?= $item_page ?>" class="js-name-b2">
										<p style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"><?= $item_title ?>

										</p>
									</a>
									<div class="rating-icon">
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star"></i>
										<i class="zmdi zmdi-star-half"></i>
										<i class="zmdi zmdi-star-half"></i>
									</div>
									<div class="product-price">
										<span class="new-price"><?= number_format($item_price, 2) . " " . $currency_symbol ?></span>

										<?php
										if ($was_price > 0) {
										?>
											<span class="old-price"><?= number_format($was_price) . " " . $currency_symbol ?></span>


										<?php
										}
										?>

									</div>





								</div>
							</div>

						</div>

					<?php
					}
					?>
				</div>

			</div>


		</div>
	</div>
</div>
<!-- Start Shop Full Grid View -->
<div class="shop-view-area pb-90">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 hidden-xs">

			</div>
			<div class="col-sm-3 hidden-xs">

			</div>
			<div class="col-sm-3 hidden-xs">
				<?= $pagination ?>
			</div>
		</div>
	</div>
</div>
<!-- End Of Shop Full Grid View -->


<script type="text/javascript">
	$('.js-addwish-b2').on('click', function(e) {
		e.preventDefault();
	});

	$('.js-addwish-b2').each(function() {
		var nameProduct = $(this).parent().parent().parent().find('.js-name-b2').text();
		$(this).on('click', function() {
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-b2');
			$(this).off('click');
		});
	});

	$('.js-addwish-detail').each(function() {
		var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

		$(this).on('click', function() {
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-detail');
			$(this).off('click');
		});
	});

	/*---------------------------------------------*/

	$('.js-addcart-detail').each(function() {
		var nameProduct = $(this).parent().parent().parent().find('.js-name-b2').text();
		$(this).on('click', function() {
			swal(nameProduct, "is added to cart !", "success");
		});
	});
</script>