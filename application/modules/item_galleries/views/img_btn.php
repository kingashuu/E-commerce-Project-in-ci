<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white picture"></i><span class="break"></span>Image Option</h2>
			<div class="box-icon">

				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">

			<p> <?= $btn_info ?> </p>
			<?php
			if ($got_pic == FALSE) {
				?>
				
			<a href="<?= base_url() ?>item_galleries/upload_image/<?= $update_id ?>">
				<button type="button" class="btn btn-primary">upload Image</button>
			</a>
			<?php
			}else{
				echo "<img src='".$pic_path."'>";
			}
			?>
			<a href="<?= base_url() ?>item_galleries/deleteconf/<?= $update_id ?>">
				<button type="button" class="btn btn-danger"<?= $btn_style?>>Delete</button>
			</a>



		</div>

	</div><!--/span-->

	</div><!--/row-->