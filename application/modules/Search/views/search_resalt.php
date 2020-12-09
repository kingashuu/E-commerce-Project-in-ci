    <div class="breadcrumbs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs text-center text-white">
                     <h3 class="text-uppercase">search</h3> 
                     <ul class="breadcrumbs-list">
                        <li>
                            <a href="index.html" title="Return to Home">Home</a>
                        </li>
                        
                        <li>/</li>
                        <li>search_resalt</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Of Breadcrumbs Area -->
<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <div class="product-list-tab pt-90 mb-40 ">
        <div class="container">
            <div class="row">
                <div class="product-list tab-content">
                        <?php
                        foreach ($query->result() as $row) {
                            $item_title = $row->item_title;
                            $item_url = $row->item_url;
                            
                            $item_description =  word_limiter($row->item_description, 70);
                            $item_price = $row->item_price;
                            $was_price = $row->was_price;
                            ?>
                    <div role="tabpanel" class="tab-pane fade in active" id="menu1">
                        
                        <div class="single-product mb-30">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 col-md-4">
                                    <div class="s-product-img">
                                        <a href="#">
                                            <img src="<?= base_url();?>small_pics/<?= $row->small_pic?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a title="Add to cart" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a title="Add to Wishlist" href="#">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7 col-md-8">
                                    <div class="product-content text-uppercase mt-120">
                                        <a title="Men’s Blue Short T-Shirt" href="product-details.html"><?= $item_title?></a>
                                        <div class="rating-icon ptb-20">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                        </div>
                                        <div class="product-price pb-10">
                                            <span class="new-price"><?= $item_price?></span>
                                            <span class="old-price"><?= $was_price?></span>
                                        </div>
                                        <p><?= $item_description?> </p>
                                    </div>
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
    <!-- Start Shop Full Grid View -->

    <!-- End Of Shop Full Grid View -->
</section>