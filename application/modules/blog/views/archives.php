<h4 class="aside-title text-uppercase pb-20 mb-30">Blog Archives</h4>
<ul></ul>
<?php 
     $this->load->module('timedate');
	 foreach ($query_arc->result() as $row) {
	 	$date_published = $this->timedate->get_nice_date($row->date_published, 'short');
	 	$blog_url= base_url().'blog/article/'.$row->page_url;
 ?>
 		 	
	<li><a href="<?= $blog_url?>"><?= $date_published ?></a></li>
 		 <?php 
 		 } ?>

</ul>