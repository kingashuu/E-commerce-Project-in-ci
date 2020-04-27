	<section id="page-content" class="page-wrapper pt-30 pb-10 text-center">
	<!-- Start Wishlist Area -->
		<div class="container ">
	<h1>Order <?= $order_ref?></h1>
	<p style="font-weight: bold;">Date Created <?= $date_created?></p>
	<p style="font-weight: bold;">Order Statue: <?= $order_status_title?></p>
</div>
</section>
	<?php 
	$user_type='public';
	echo Modules::run('cart/_draw_cart_contents', $query_cc, $user_type);
	?>
	             