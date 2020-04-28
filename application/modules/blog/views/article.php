
<div class="breadcrumbs-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs text-center text-white">
					<h3 class="text-uppercase">Blog Details</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
$this->load->module('timedate');
	foreach ($query->result() as $row) {
			$page_title = $row->page_title;
			$picture = $row->picture;
			$page_keywords= $row->page_keywords;
			$page_description = $row->page_description;
			$page_content = $row->page_content;

			$picture = base_url().'blog_pics/'.$row->picture;
			// $thumbnail_name = str_replace('.', '_thumb.', $picture);
			// $thumbnail_path = base_url() . 'blog_pics/' . $thumbnail_name;
			$date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
			$author = $row->author;
		}
?>

	
<!-- End Of Breadcrumbs Area -->
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
	<!-- Start Blog Page Area -->
	<div class="blog-details-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-md-push-3 col-xs-12">
					<div class="single-blog fix">
						<div class="post-thumbnail mb-50 blog-image">
							<a href="#">
								<img src="<?= $picture?>" alt="<?= $page_title?>" class="img-responsive">
			 				</a>
						</div>
						<div class="postinfo-wrapper pl-100">
							<div class="post-date text-uppercase ptb-10">
								<span class="day"><?= $date_published ?></span>
							</div>
							<div class="post-info ">
								<h3 class="blog-post-title mb-20 text-uppercase">
									<a href="#"><?= $page_title?></a>
								</h3>
								<div class="entry-meta ptb-10 mb-30 text-uppercase">
									Posted by
									<span class="author vcard">
										<a title="#" class="url fn n" href="#"><?= $author?></a>
									</span>
								
								</div>
								<div class="entry-summary">
									<blockquote>
										<p>
										<?php
											echo $page_description;
											?>
										</p>
									</blockquote>
									<p><?php echo $page_content;?></p>
								</div>
								<div class="entry-meta ptb-10 mb-30 text-uppercase">
									<a href="#">3 comments </a>
									<span class="author vcard">/ Tags:</span>
									/
									<a href="#">fashion</a>
									,
									<a href="#">t-shirt</a>
									,
									<a href="#">white</a>
								</div>
								<div class="share-icon text-uppercase mb-50 pt-30">
									<h5>Share this post</h5>
									<ul>
										<li>
											<a target="_blank" class="facebook" href="#">
												<i class="zmdi zmdi-facebook"></i>
											</a>
										</li>
										<li>
											<a target="_blank" class="twitter" href="#">
												<i class="zmdi zmdi-twitter"></i>
											</a>
										</li>
										<li>
											<a target="_blank" class="pinterest" href="#">
												<i class="zmdi zmdi-pinterest"></i>
											</a>
										</li>
										<li>
											<a target="_blank" class="google-plus" href="#">
												<i class="zmdi zmdi-google-plus"></i>
											</a>
										</li>
										<li>
											<a target="_blank" class="linkedin" href="#">
												<i class="zmdi zmdi-linkedin"></i>
											</a>
										</li>
									</ul>
								</div>
								<div class="author-info mb-30">
									<div class="author-avatar b-img">
										<img src="images/blog/avatar.png" alt="">
									</div>
									<div class="author-description pl-20">
										<h6>
											About the Author:
											<a href="#">Admin</a>
										</h6>
										<p>Cras id nulla at metus congue auctor. Suspendisse auctor dictum orci quis interdum. Nullam et eleifend metus. Integer in est orci. Duis hendrerit ex metus, vel tempor sem aliquet nec. Donec ornare hendrerit bibendum. Nullam dui erat, tempus eu nisl vitae, venenatis gravida ipsum. Suspendisse potenti.</p>
									</div>
								</div>
								<div class="reply-comment-area mb-20">
									<h4 class="mb-50 pt-20">3 comments</h4>
									<div class="single-reply mb-20">
										<div class="comment-author">
											<img src="images/testimonial/1.jpg" alt="">
										</div>
										<div class="comment-info p-10">
											<div class="comment-author-info mb-10">
												<a href="#">
													<b>admin</b>
												</a>
												Post author
												<span>October 6, 2014 at 1:38 am</span>
												<a href="#">Reply</a>
											</div>
											<p>just a nice post</p>
										</div>
									</div>
									<div class="single-reply pl-30 mb-20">
										<div class="comment-author">
											<img src="images/testimonial/2.jpg" alt="">
										</div>
										<div class="comment-info p-10">
											<div class="comment-author-info mb-10">
												<a href="#">
													<b>admin</b>
												</a>
												Post author
												<span>October 6, 2014 at 1:38 am</span>
												<a href="#">Reply</a>
											</div>
											<p>just a nice post</p>
										</div>
									</div>
									<div class="single-reply">
										<div class="comment-author">
											<img src="images/testimonial/1.jpg" alt="">
										</div>
										<div class="comment-info p-10">
											<div class="comment-author-info mb-10">
												<a href="#">
													<b>admin</b>
												</a>
												Post author
												<span>October 6, 2014 at 1:38 am</span>
												<a href="#">Reply</a>
											</div>
											<p>just a nice post</p>
										</div>
									</div>
								</div>
								<div class="user-comment-form-area">
									<h4 class="mb-50 pt-20">3 comments</h4>
									<form action="#">
										<p class="mb-20">Your email address will not be published. Required fields are marked
											<span class="required">*</span>
										</p>
										<div class="row">
											<div class="col-md-4">
												<p class="form-row">
													<label>Name<span class="required">*</span></label>
													<input type="text">
												</p>
											</div>
											<div class="col-md-4">
												<p class="form-row">
													<label>Email<span class="required">*</span></label>
													<input type="text">
												</p>
											</div>
											<div class="col-md-4">
												<p class="form-row">
													<label>Website<span class="required">*</span></label>
													<input type="text">
												</p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<p class="form-row">
													<label>Comment</label>
													<textarea></textarea>
												</p>
											</div>
										</div>
									</form>
									<a class="button extra-small text-uppercase" href="#">
										<span>read more</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-md-pull-9 col-xs-12">
					<div class="left-blog-sidebar">
						<div class="blog-sidebar mb-30 fix">
							<h4 class="aside-title text-uppercase pb-20 mb-30">Search</h4>
							<form action="#" id="blog-search">
								<input type="text" placeholder="Search">
								<button class="submit"><i class="zmdi zmdi-search"></i></button>
							</form>
						</div>
						<div class="blog-sidebar mb-30 fix">
							<h4 class="aside-title text-uppercase pb-20 mb-30">Categories</h4>
							<ul>
								<li><a href="#">Dresses</a></li>
								<li><a href="#">shoes</a></li>
								<li><a href="#">Handbags</a></li>
								<li><a href="#">Clothing</a></li>
							</ul>
						</div>
						<div class="blog-sidebar post mb-30 fix">
							<h4 class="aside-title text-uppercase pb-20 mb-30">Recent Post</h4>
							<ul>
								<li>
									<div class="post-thumb b-img">
										<a href="blog-details.html">
											<img src="<?php echo base_url();?>assets/public_template/images/product/product-details/s-1.jpg" alt="">
										</a>
									</div>
									<div class="post-info">
										<a href="blog-details.html">Blog image post</a>
										<span>March 10, 2015</span>
									</div>
								</li>
								<li>
									<div class="post-thumb b-img">
										<a href="blog-details.html">
											<img src="<?php echo base_url();?>assets/public_template/images/product/product-details/s-2.jpg" alt="">
										</a>
									</div>
									<div class="post-info">
										<a href="blog-details.html">Blog image post</a>
										<span>March 10, 2015</span>
									</div>
								</li>
							<li>
									<div class="post-thumb b-img">
										<a href="blog-details.html">
											<img src="<?php echo base_url();?>assets/public_template/images/product/product-details/s-3.jpg" alt="">
										</a>
									</div>
									<div class="post-info">
										<a href="blog-details.html">Blog image post</a>
										<span>March 10, 2015</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="blog-sidebar mb-30 fix">
							<h4 class="aside-title text-uppercase pb-20 mb-30">Popular Tags</h4>
							<ul class="tags-list">
								<li><a href="#">Clothing</a></li>
								<li><a href="#">accessories</a></li>
								<li><a href="#">fashion</a></li>
								<li><a href="#">footwear</a></li>
								<li><a href="#">good</a></li>
								<li><a href="#">kid</a></li>
								<li><a href="#">men</a></li>
								<li><a href="#">women</a></li>
							</ul>
							<div class="actions">
								<a href="#">View All Tags</a>
							</div>
						</div>
						<div class="blog-sidebar fix">
							<h4 class="aside-title text-uppercase pb-20 mb-30">Blog Archives</h4>
							<ul>
								<li><a href="#">January 2016</a></li>
								<li><a href="#">December 2015</a></li>
								<li><a href="#">November 2015</a></li>
								<li><a href="#">September 2015</a></li>
								<li><a href="#">August 2015</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Blog Page Area -->

</section>