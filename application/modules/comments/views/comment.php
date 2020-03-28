<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Comments</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php 
			$send_by=1;
			if ($send_by== 1) {
				$class='left';

			}else{
				$class='right';
			} ?>
			<ul class="chat metro">
				<?php 
				$this->load->module('timedate');
				foreach ($query->result() as $row) {
					?>
					<li class="<?= $class?>">
						<img class="avatar" alt="Dennis Ji" src="<?php echo base_url();?>assets/admin/images/logo.jpg">
						<span class="message"><span class="arrow"></span>
						<span class="from">name</span>
						<span class="time"><?= $date_created =$this->timedate->get_nice_date($row->date_created, 'full') ?></span>
						<span class="text">
							<?php

							echo nl2br($row->comment);

							?>
						</span>
					</span>	                                  
				</li>
				<?php 
			}
			?>
		</ul>
		<div class="chat-form">
			<form  action="">
			<textarea></textarea>
			<button class="btn btn-warning" type="submit" name="submit" value="submit">Send message</button>
		</form>
		</div>
	</div>
</div>
</div>
</div>
