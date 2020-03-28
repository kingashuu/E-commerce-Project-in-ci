	<h1>Order <?= $order_ref?></h1>
	<p style="font-weight: bold;">Date Created <?= $date_created?></p>
	<p style="font-weight: bold;">Order Statue: <?= $order_status_title?></p>
	<?php 
	$user_type='public';
	echo Modules::run('cart/_draw_cart_contents', $query_cc, $user_type);
	?>
	                      </div>
                        </div>                                            
                    </div>
                </div>  
            <!--/form-->
        </div>                            
    </div>
</div>
</div>
</div>
<!-- End Of Wishlist Area -->


<!-- Start Newsletter Area -->

<!-- End Of Newsletter Area -->
</section>