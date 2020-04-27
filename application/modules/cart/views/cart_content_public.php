        <?php 
        $first_bit = $this->uri->segment(1);
        ?>

        <!-- End Of Breadcrumbs Area -->
        <!-- Start page content -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/public_template/js/vendor/jquery-3.1.1.min.js"></script>
        <section id="page-content" class="page-wrapper">
            <!-- Start Wishlist Area -->
            <div class="wishlist-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wishlist-content">
                                <form action="#">
                                    <div class="wishlist-table table-responsive p-30 text-uppercase">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail"></th>
                                                    <th class="product-name"><span class="nobr">Product</span></th>
                                                    <th class="product-prices"><span class="nobr">unit Price </span></th>
                                                    <th class="product-add-to-cart"><span class="nobr">quantity</span></th>
                                                    <th class="product-stock-stauts"><span class="nobr">sub total price</span></th>
                                                    <th class="product-remove"><span class="nobr">Remove</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php 
                                               $grand_total=0;
                                               foreach ($query->result() as $row) {
                                                $sub_total = $row->price*$row->item_qty;
                                                $sub_total_desc= number_format($sub_total, 2);
                                                $grand_total=$grand_total+$sub_total;
                                            

                                                ?>
                                                <tr>
                                                    <td class="product-thumbnail">

                                                        <a href="#" title="men’s black t-shirt">

                                                            <?php 
                                                            if ($row->small_pic!='') {
                                                                ?>
                                                                <img width="100px"src="<?= base_url();?>small_pics/<?= $row->small_pic?>">
                                                                <?php
                                                            }else{
                                                                echo "No image preview aveilabel";
                                                            }
                                                            ?>
                                                        </a>
                                                    </td>
                                                    <td class="product-name pull-left mt-20" style='table-layout:fixed; width:200px;white-space: nowrap;
                                                    overflow: hidden; white-space: initial;'>
                                                    <a href="#" title="men’s black t-shirt">

                                                        <?= $row->item_title?>


                                                    </a>
                                                    <p class="w-color m-0">
                                                        <label> Color :</label>
                                                        black
                                                    </p>
                                                    <p class="w-size m-0">
                                                        <label> size :</label>
                                                        sl
                                                    </p>
                                                </td>
                                                <td class="product-prices"><span class="amount"><?= $row->price." ".$currency_symbol?></span>
                                                </td>
                                                <td class="product-value">

                                                    <button type="button"  class="sub">-</button>
                                                    <input type="number" id="1" value="<?= $row->item_qty?>"/>
                                                    <button type="button"  class="add">+</button>
                                                </td>

                                               
                                            <td class="product-stock-status"><span class="wishlist-in-stock"><?= $sub_total_desc." ".$currency_symbol?> </span>
                                            </td>
                                            <td class="product-remove">

                                               <?php 
                                               if ($first_bit!='yourorders') {
                                                echo anchor('store_basket/remove/'.$row->id,'x');
                                            }
                                            ?>
                                        </td>
                                    </tr>

                                    <?php
                                }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="cart-requerment mt-50 clearfix">
                            <div class="col-md-4 col-sm-6 clearfix">
                                <div class="cart-title text-uppercase">
                                    <h5 class="mb-30"><strong>ESTIMATE SHIPPING AND TAX</strong></h5>
                                </div>
                                <div class="shopping-tax">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="cart-show-label show-label">
                                                <select>
                                                    <option selected="selected" value="position">Country</option>
                                                    <option value="Name">Ethiopia</option>
                                                    <option value="Price">Eritrea</option>
                                                    <option value="Price">usa</option>
                                                </select>                                                                
                                            </div>
                                            <div class="cart-show-label show-label mt-15">
                                                <select>
                                                    <option selected="selected" value="position">State/Province</option>
                                                    <option value="Name">Oromiya</option>
                                                    <option value="Price">Amara</option>
                                                    <option value="Price">Tigrayi</option>
                                                </select>                                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="cart-show-label show-label">
                                                <select>
                                                    <option selected="selected" value="position">City</option>
                                                    <option value="Name">Addis Abeba</option>
                                                    <option value="Price">Dire Dawa</option>
                                                    <option value="Price">Makale</option>
                                                    <option value="Price">Behardar</option>
                                                    <option value="Price">Hawasa</option>
                                                </select>                                                                
                                            </div>
                                            <div class="cart-show-label show-label mt-15">
                                                <select>
                                                    <option selected="selected" value="position">Zip/Postal Code</option>
                                                    <option value="Name">1200</option>
                                                    <option value="Price">1201</option>
                                                    <option value="Price">1202</option>
                                                    <option value="Price">1203</option>
                                                    <option value="Price">1204</option>
                                                </select>                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="button extra-small pull-right mt-20" href="#" title="Add to Cart">
                                    <span>Get a Quote</span>
                                </a>
                            </div> 
                            <div class="col-md-4 col-sm-6 clearfix">
                                <div class="counpon-info ml-35">
                                    <div class="cart-title text-uppercase">
                                        <h5 class="mb-30"><strong>COUPON DISCOUNT</strong></h5>
                                    </div>
                                    <div class="coupon-discount">
                                        <label class="pb-10">Enter Your Coupon Code Here</label>
                                        <input type="text">
                                    </div> 
                                    <a class="button extra-small pull-right mt-35" href="#" title="Add to Cart">
                                        <span>Apply Coupon</span>
                                    </a>       
                                </div>
                            </div> 
                            <div class="col-md-offset-0 col-md-4 col-sm-offset-3 col-sm-6 clearfix">
                                <div class="counpon-total ml-35">
                                    <div class="cart-title text-uppercase">
                                        <h5 class="mb-30"><strong>CART TOTAL</strong></h5>
                                    </div>
                                    <table>
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>

                                                <td><?php 
                                                $grand_total_sub=number_format($grand_total, 2);
                                                echo $grand_total_sub." ".$currency_symbol
                                                ; ?></td>
                                            </tr>
                                            <tr class="cart-shipping">
                                                <th>Shipping</th>
                                                <?php
                                                $grand_total=$grand_total+$shipping;
                                                ?>
                                                <td>
                                                    <?= $shipping?>
                                                </td>
                                            </tr>
                                            <tr class="cart-total">
                                                <th>Grand Total</th>
                                                <td><?php
                                                $grand_total_desc=number_format($grand_total, 2);
                                                echo $grand_total_desc." ".$currency_symbol;
                                                ?></td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                    <?php
                                    if ($num_rows>=1) {
                                        echo Modules::run('cart/_attempt_draw_checkout_btn', $query);
                                    } 

                                    ?>                                                    
                                </div>
                            </div>                                            
                        </div>
                    </div>  
                </form>
            </div>                            
        </div>
    </div>
</div>
</div>
<!-- End Of Wishlist Area -->

<script type="text/javascript">
 $('.add').click(function () {
    /*if ($(this).prev().val() < 10000) {*/
        $(this).prev().val(+$(this).prev().val() + 1);
        /* }*/
    });
 $('.sub').click(function () {
    if ($(this).next().val() > 1) {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
});


</script>