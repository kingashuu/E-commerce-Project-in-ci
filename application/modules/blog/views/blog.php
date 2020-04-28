  <section id="page-content" class="page-wrapper">
  	<!-- Start Blog Page Area -->
  	<div class="blog-page-area section-padding">
  		<div class="container">
  			<div class="row">
  					<?php
  					$this->load->module('timedate');
  					foreach ($query->result() as $row) {
  						$article_preview =  word_limiter($row->page_content, 50);
  						$picture = $row->picture;
  						$thumbnail_name = str_replace('.', '_thumb.', $picture);
  						$thumbnail_path = base_url() . 'blog_pics/' . $thumbnail_name;
  						$date_published = $this->timedate->get_nice_date($row->date_published, 'mini');
  						$blog_url= base_url().'blog/article/'.$row->page_url;

  						?>
  				<div class="blog-list mb-30x clearfixx">
  						<div class="col-md-4 col-sm-6 mb-30">
  							<div class="single-blog">
  								<div class="blog-image">
  									<a href="#">
  										<img alt="" src="<?= $thumbnail_path?>">
  									</a>
  								</div>
  								<div class="blog-content pb-20 text-center">
  									<div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i><span>Date :</span> <?= $date_published?> </div>
  									<h5><a class="blog-title text-capitalize" href="<?= $blog_url?>"><?php echo $row->page_title; ?></a></h5>
  									<div class="post-info-author mt-30">
  										<span class="author mr-20">
  											<i class="zmdi zmdi-account"></i>
  											By
  											<a href="#" title="Posts by admin"> <?= $row->author?> </a>
  										</span>
  										<span class="comments-count mr-20">
  											<i class="zmdi zmdi-favorite"></i>
  											20 Likes
  										</span>
  										<span class="comments-count">
  											<i class="zmdi zmdi-comments"></i>
  											02 Comments
  										</span>
  									</div>
  								</div>
  								<div class="blog-content blog-content-overlay pb-20 text-center">
  									<div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : <?= $date_published?> </div>
  									<h5><a class="blog-title text-capitalize" href="<?= $blog_url?>"><?php echo $row->page_title; ?></a></h5>
  									<p><?php echo $article_preview; ?></p>
  									<div class="post-info-author mt-30">
  										<span class="author mr-20">
  											<i class="zmdi zmdi-account"></i>
  											By
  											<a href="#" title="Posts by admin"> <?= $row->author?></a>
  										</span>
  										<span class="comments-count mr-20">
  											<i class="zmdi zmdi-favorite"></i>
  											20 Likes
  										</span>
  										<span class="comments-count">
  											<i class="zmdi zmdi-comments"></i>
  											02 Comments
  										</span>
  									</div>
  									<a href="<?= $blog_url?>" class="button extra-small mt-60 text-uppercase">
  										<span>Read More</span>
  									</a>
  								</div>
  							</div>
  						</div>
  				</div>
  						<?php 
  					} ?>
  			</div>
  		</div>
  	</div>
  </section>