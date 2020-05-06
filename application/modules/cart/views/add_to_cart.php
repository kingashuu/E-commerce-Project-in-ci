<?php
echo form_open('store_basket/add_to_basket');
?>
<div class="login-account p-30 box-shadow">
	<div class="raw">
		<div class="product-size text-uppercase pb-10">
			<?php
			if ($num_sizes > 0) {
			?>
				<div class="row">
					<div class="cart-requerment clearfix">
						<div class="col-md-4 col-sm-6 clearfix">

							<div class="shopping-tax">
								<div class="row">
									<div class="col-sm-5">
										<div class="cart-show-label show-label text-uppercase">
											<h4>size</h4>
										</div>
									</div>
									<div class="col-sm-7">
										<div class="cart-show-label show-label pb-10">
											<?php
											echo form_dropdown('item_size', $size_options, $submitted_size)
											?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>




			<?php
			} else {
			?>
				<div class="product-size text-uppercase pb-40">
					<h4 class="product-details-tilte text-uppercase pb-10">size</h4>
					<ul>
						<li><a href="#">s</a></li>
						<li><a href="#">m</a></li>
						<li><a href="#">l</a></li>
						<li><a href="#">xl</a></li>
						<li><a href="#">xxl</a></li>
					</ul>
				</div>
			<?php
			}
			?>

		</div>


		<div class="product-sizex text-uppercase">
			<?php
			if ($num_colours > 0) {
			?>
				<div class="row">
					<div class="cart-requerment clearfix">
						<div class="col-md-4 col-sm-6 clearfix">

							<div class="shopping-tax">
								<div class="row">
									<div class="col-sm-5">
										<div class="cart-show-label show-label text-uppercase">
											<h4>color</h4>
										</div>
									</div>
									<div class="col-sm-7">
										<div class="cart-show-label show-label pb-10">
											<?php

											echo form_dropdown('item_colour', $colour_options, $submitted_colour)
											?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php
			} else {
			?>
				<div class="product-attributes clearfix">
					<div class="product-color text-uppercase pb-40">
						<h4 class="product-details-tilte text-uppercase pb-10">color</h4>
						<ul>
							<li class="color-1"><a href="#"></a></li>
							<li class="color-2"><a href="#"></a></li>
							<li class="color-3"><a href="#"></a></li>
							<li class="color-4"><a href="#"></a></li>
						</ul>
					</div>
					<div id="quantity-wanted" class="pull-left">
						<h4 class="product-details-tilte text-uppercase pb-10">quantity</h4>
						<input type="number" name="item_qty" class="cart-plus-minus-box">
					</div>
				</div>
			<?php
			}
			?>

		</div>

		<?php
		if ($num_colours > 0 && $num_sizes > 0) {
		?>
			<div class="row">
				<div class="cart-requerment clearfix">
					<div class="col-md-6 col-sm-8 clearfix">

						<div class="shopping-tax">
							<div class="row">
								<div class="col-sm-5">
									<div class="cart-show-label show-label text-uppercase">
										<h4>quantity</h4>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="cart-show-label show-label pb-10">
										<input name="item_qty" type="number" class="cart-plus-minus-box">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
		?>
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
				<button type="submit" name="submit" value="submit" class="submit-btn mt-20"><i class="zmdi zmdi-shopping-cart"></i> Add to cart</button>
			</div>
		</div>

	</div>
</div>
<div class="product-action-shop text-center mb-40 mt-50">

	<a title="Add to Wishlist" href="#" class="js-addwish-detail">
		<i class="zmdi zmdi-favorite"></i>
	</a>
	<a title="Add to cart" href="#" class="js-addcart-detail-btn">
		<i class="zmdi zmdi-shopping-cart"></i>
	</a>
	<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
		<i class="zmdi zmdi-eye"></i>
	</a>

</div>
<div class="socialsharing-product">
	<h4 class="product-details-tilte text-uppercase pb-10">share this on</h4>
	<button type="button"><i class="zmdi zmdi-facebook"></i></button>
	<button type="button"><i class="zmdi zmdi-instagram"></i></button>
	<button type="button"><i class="zmdi zmdi-rss"></i></button>
	<button type="button"><i class="zmdi zmdi-twitter"></i></button>
	<button type="button"><i class="zmdi zmdi-pinterest"></i></button>
</div>

<?php
echo form_hidden('item_id', $item_id);
echo form_close();
?>
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
		var nameProduct = $(this).parents().find('.js-name-b2').text();

		$(this).on('click', function() {
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-detail');
			$(this).off('click');
		});
	});

	/*---------------------------------------------*/

	$('.js-addcart-detail-btn').each(function() {
		var nameProduct = $(this).parents().find('.js-name-b2').text();
		$(this).on('click', function() {
			swal(nameProduct, "is added to cart !", "success");
		});
	});
</script>