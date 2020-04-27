<section id="page-content" class="page-wrapper">
	<!-- Start Wishlist Area -->
	<div class="wishlist-area section-padding">
	<div class="container ">
<div class="row">
	<div class="col-md-12">

		<p style="margin-top: 24px;">Message Sent on <?= $date_created?></p>

		<p style="margin-top: 30px">
			<a href="<?= base_url()?>yourmessages/create/<?= $code?>">
				<button class="btn btn-large btn-default" type="submit">Reply</button>
			</a>
		</p>

		<h4 style="margin-top: 48px;">Subject: <?= $subject?></h4>
		<p><?= $message?></p>
	</div>
</div>
</div>
</div>
</section>