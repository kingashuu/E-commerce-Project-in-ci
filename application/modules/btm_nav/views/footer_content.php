<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="footer-widget">
                <div class="footer-widget-img pb-30">
                    <a href="<?php echo base_url(); ?>assets/public_template/#">
                        <img src="<?php echo base_url(); ?>assets/public_template/images/logo/logo-2.png" alt="">
                    </a>
                </div>
                <ul class="toggle-footer text-white">
                    <li class="mb-30 pl-45">
                        <i class="zmdi zmdi-pin"></i>
                        <p>House No 08, Road No 08, <br>
                        Din Bari, Dhaka, Bangladesh</p>
                    </li>
                    <li class="mb-30 pl-45">
                        <i class="zmdi zmdi-email"></i>
                        <p>abekele76@gmail.com <br>
                        ashuinfo123@gmail.com</p>
                    </li>
                    <li class="pl-45">
                        <i class="zmdi zmdi-phone"></i>
                        <p>+251 928 180588<br>
                        +660 256 24857</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="text-white footer-information">
                <h4 class="pb-40 m-0 text-uppercase">information</h4>
                <ul class="footer-menu">
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Hot Sale</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>best Seller</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Suppliers</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Our Store</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Deal of The Day</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="text-white footer-account">
                <h4 class="pb-40 m-0 text-uppercase">IMPORTAN LINKS</h4>
                <ul class="footer-menu">
                    <?php 
                    foreach ($query->result() as $row) {
                        $page_url =$row->page_url;
                        $page_title=$row->page_title;

                        ?>
                         <li><a href="<?php echo base_url(); ?><?= $page_url?>"><i class="zmdi zmdi-chevron-right"></i><?= $page_title?></a></li>
                        <?php
                        
                    }
                    ?>
                    <!-- <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>My Account</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Personal Information</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Discount</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Orders History</a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-chevron-right"></i>Payment</a></li> -->
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="text-white footer-about-us">
                <h4 class="pb-40 m-0 text-uppercase">about us</h4>
                <p>Lorem ipsum dolor sit amet, consecteir our adipisicing elit, sed do eiusmod tempor the incididunt ut labore et dolore magnaa liqua. Ut enim minimn.</p>
                <ul class="footer-social-icon">
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-instagram"></i></a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-rss"></i></a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a href="<?php echo base_url(); ?>assets/public_template/#"><i class="zmdi zmdi-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>