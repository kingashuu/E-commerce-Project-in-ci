

<div class="breadcrumbs-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center text-white">
                   <h3 class="text-uppercase">go to checkout</h3> 

               </div>
           </div>
       </div>
   </div>
</div>


<section id="page-content" class="page-wrapper">
    <!-- Start Wishlist Area -->
    <div class="my-account-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="procced-checkout">
                        <h1 class="procced-title text-uppercase pb-15 mb-20"><strong>Please create an account</strong></h1>
                        
                        <p>You do not need to creat an account whith us, however, if you do then be able to enjoy</p>
                        <p>
                         <ul>
                          <li>Order tracking</li>
                          <li>Downloadable Form Order</li>
                          <li>Priority Technical Support</li>
                      </ul>
                  </p>
                  <p><b>Createing an account is free!</b>. And  it's also onli takes minute..   </p>
                  <p>Would you like to create an account ?</p>
              </div>
          </div>
      </div>
      <div class="row">

        <?php echo form_open('cart/submit_choice'); ?>
        <div class="addresses-lists">
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <div class="myaccount-link-list">                               
                    <div class="panel panel-success mb-5">
                        <div class="panel-heading">
                            <h4 class="panel-title">

                                <i class="zmdi zmdi-thumbs-up"></i>

                                <button class="btn" name="submit" value="Yes - Let's Do It" type="submit">Yes - Let's Do It</button>

                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <div class="myaccount-link-list">                               
                    <div class="panel panel-danger mb-5">
                        <div class="panel-heading">
                            <h4 class="panel-title">

                                <i class="zmdi zmdi-thumbs-down"></i>
                                <button class="btn" name="submit" value="No Thanks" type="submit">No Thanks</button>

                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <div class="myaccount-link-list">                               
                    <div class="panel panel-info mb-5">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a  href="<?= base_url()?>youraccount/login">
                                    <i class="zmdi zmdi-sign-in"></i>
                                    <span class="btn"  name="submit"  type="button">Already Have Account (login)</span>
                                </a>

                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        echo form_hidden('checkout_token', $checkout_token);
        echo form_close(); 
        ?>
    </div>
</div>
</div>
<!-- End Of Wishlist Area -->


</section>