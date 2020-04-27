<div class="col-sm-4">
    <div class="header-top header-top-right">
        <ul>


            <li class="lh-50">
                <a href="<?php echo base_url(); ?>assets/public_template/#" class="pr-20 text-uppercase"><i class="zmdi zmdi-accounts zmdi-hc-4x "></i> </i> my account</a>
                <div class="header-top-down header-top-hover pl-15 lh-35">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>youraccount/login">Login</a></li>
                        <li><a href="<?php echo base_url(); ?>youraccount/start">Register</a></li>
                        <li><a href="<?php echo base_url(); ?>assets/public_template/compare.html">My bag</a></li>
                        <li><a href="<?php echo base_url(); ?>assets/public_template/checkout.html">Checkout</a></li>
                        <li><a href="<?php echo base_url(); ?>assets/public_template/wishlist.html">Wishlist</a></li>
                        <li><a href="<?php echo base_url(); ?>youraccount/logout">Log Out</a></li>
                    </ul>
                </div>
            </li>

            <li class="cart-link lh-50">
                <a href="<?php echo base_url(); ?>cart" class="pl-20">
                    <i class="zmdi zmdi-shopping-basket zmdi-hc-4x"></i>
                    <span>2</span>
                </a>

                <div class="mini-cart-inner header-top-down p-20">
                    <?php
                    echo Modules::run('cart/_draw_cart_hover_drop_d');
                    ?>


                </div>
            </li>
        </ul>
    </div>
</div>