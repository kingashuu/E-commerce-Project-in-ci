<?php
foreach ($query->result() as $row) {
	$item_title = $row->item_title;
	$small_pic = $row->small_pic;
	$was_price = $row->was_price;
	$small_pic_path = base_url() . "small_pics/" . $small_pic;
	$item_page = base_url() . $item_segments . $row->item_url;
	$item_price = number_format($row->item_price, 2);
	//NOTE:to get read of .00
	$item_price = str_replace('.00', '', $item_price);
?>



	<div class="col-md-3 col-sm-4">
		<div class="single-product mb-40">
			<div class="product-img-content mb-20">
				<div class="product-img">
					<a href="<?= $item_page ?>">
						<img src="<?= $small_pic_path ?>" alt="<?= $item_title ?>">
					</a>
				</div>
				<span class="new-label text-uppercase">-30%</span>
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
			</div>
			<div class="product-content text-center text-uppercase">
				<a href="<?= $item_page ?>" title="<?= $item_title ?>" class="js-name-b2"><?= $item_title ?></a>
				<div class="rating-icon">
					<i class="zmdi zmdi-star"></i>
					<i class="zmdi zmdi-star"></i>
					<i class="zmdi zmdi-star"></i>
					<i class="zmdi zmdi-star-half"></i>
					<i class="zmdi zmdi-star-half"></i>
				</div>
				<div class="product-price">
					<span class="new-price">Our Price<?= $item_price . $currency_symbol ?></span>
				</div>
			</div>
		</div>

	</div>

<?php
}

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