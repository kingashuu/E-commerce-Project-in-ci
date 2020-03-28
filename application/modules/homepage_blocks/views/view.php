<h1><?=$block_title?></h1>
<p class="text-success"><?= $showing_statement?></p>
<?= $pagination?>
<div class="row">
<?php
foreach ($query->result() as $row) {
	$item_title=$row->item_title;
	$small_pic=$row->small_pic;
	$item_price=$row->item_price;
	$was_price=$row->was_price;
	$small_pic_path=base_url()."small_pics/".$small_pic;
	$item_page= base_url().$item_segments.$row->item_url;

	?>
	<div class="col-md-2 img-thumbnail" style=" margin: 6px; min-height: 300px;">
		<div>
			<a href="<?= $item_page?>">
				<img class=" img-responsive" style="width: 100%;" src="<?= $small_pic_path?>" title="<?= $item_title ?>"></a>
		</div>
		<br>
		<h6><a href="<?= $item_page?>"><?= $item_title?></a></h6>
		<div style="clear: both; color: red; font-weight: bold;" style=" margin: 10px;"><?= number_format($item_price,2).$currency_symbol?>
			<?php
		if ($was_price>0) {
		?>
		
		<span style="font-weight: normal; color: #999; text-decoration:line-through;"><?=number_format($was_price).$currency_symbol?></span>
		<?php
	}
	?>
		</div>
		<div style=" margin: 10px;">
			<span style="color: rgba(243,158,20,0.99)">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star-half-empty"></i>
				</span>
		</div>
		<div style=" margin: 10px;">
			<a href="<?= $item_page?>"><button class="btn btn-primary" type="submit">
					<span class="fa fa-shopping-cart" aria-hidden="true"></span> Shop Now</button></a>
		</div>
		
	</div>
	<?php
}
?>
</div>
<?= $pagination?>
