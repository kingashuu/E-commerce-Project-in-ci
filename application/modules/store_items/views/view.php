 <?php
 echo Modules::run('templates/_draw_breadcrumbs',$breadcrumbs_data);
 if (isset($flash)) {
 	echo $flash;
 }
 ?>
 <!-- Start page content -->
 <section id="page-content" class="page-wrapper">
 	<!-- Start Shop Full Grid View -->
 	<div class="product-details-area section-padding">
 		<div class="container">
 			<div class="row">
            
 				<div class="col-sm-5">
 					<div class="single-product-image">
 						<div id="product-img-content">
 							<div id="my-tab-content" class="tab-content mb-30">
 								<div class="tab-pane b-img active" id="view1">
 									<a class="venobox" href="<?= base_url()?>big_pics/<?= $big_pic ?>" data-gall="gallery" title="">
 										<img src="<?= base_url()?>big_pics/<?= $big_pic ?>" alt="<?= $item_title?>"></a>
 									</div>
 								</div>
 								<div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
 									
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="col-sm-7">
 						<div class="product-details-content">
 							<div class="product-content text-uppercase">
 								<a title="Slim Shirt With Stretch" href="product-details.html"><?= $item_title?></a>
 								<div class="rating-icon pb-30 mt-10">
 									<i class="zmdi zmdi-star"></i>
 									<i class="zmdi zmdi-star"></i>
 									<i class="zmdi zmdi-star"></i>
 									<i class="zmdi zmdi-star-half"></i>
 									<i class="zmdi zmdi-star-half"></i>
 								</div>
 								<div class="product-price pb-30">
 									<span class="new-price"><?= $item_price_desc." ".$currency_symbol?></span>
 									<span class="old-price"><?= $item_was_price." ".$currency_symbol?></span>
 								</div>
 							</div>
 							<div class="product-view pb-30">
 								<h4 class="product-details-tilte text-uppercase">overview</h4>
 								
 								<p><?php echo $item_description_limt ;?> </p>
 							</div>
 							
 							<?= modules::run('cart/_draw_add_to_cart', $update_id);
 							?>
 						</div>
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-md-12">
 						<div class="product-details-content pt-90">
 							<div class="p-details-tab">
 								<ul class="nav nav-tabs text-uppercase mb-20" role="tablist">
 									<li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
 									<li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
 									<li role="presentation"><a href="#tag" aria-controls="tag" role="tab" data-toggle="tab">Product Tags</a></li>
 								</ul>                             
 							</div>
 							<div class="clearfix"></div>
 							<div class="tab-content review">
 								<div role="tabpanel" class="tab-pane active" id="description">
 									<p><?php echo $item_description ;?></p>
 								</div>
 								<div role="tabpanel" class="tab-pane" id="reviews">
 									<table class="table-data-sheet">
 										<tbody>
 											<tr class="odd">
 												<td>Compositions</td>
 												<td>Cotton</td>
 											</tr>
 											<tr class="even">
 												<td>Styles</td>
 												<td>Casual</td>
 											</tr>
 											<tr class="odd">
 												<td>Properties</td>
 												<td>Short Sleeve</td>
 											</tr>
 										</tbody>
 									</table>
 								</div>
 								<div role="tabpanel" class="tab-pane" id="tag">
 									<div id="product-comments-block-tab">
 										<a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
 									</div>
 								</div>
 							</div>                                
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>
 	<!-- End Of Shop Full Grid View -->