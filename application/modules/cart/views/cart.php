
<?php 
if ($num_rows<1) {
 	echo "<p>Currently you have no item in your shopping basket.</p>";
 }else {
 	echo "<p>".$showing_statement."</p>";
	$user_type='public';
	echo Modules::run('cart/_draw_cart_contents', $query, $user_type);
	 
	echo Modules::run('cart/_attempt_draw_checkout_btn', $query);
 }
 
 

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