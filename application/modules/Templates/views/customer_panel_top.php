<?php 
 function _attempt_make_active($link_text)
 {
 	if ((current_url()==base_url().'youraccount/welcome') AND ($link_text=="Your Messages")) {
 		echo 'class="active"';
 	}
 }
 ?>
<ul class="nav nav-tabs" style="margin-top: 24px;">
  <li role="presentation"<?= _attempt_make_active('Your Messages') ?>>
  	<a href="<?= base_url() ?>youraccount/welcome">Your Messages</a></li>
  <li role="presentation"><a href="<?= base_url() ?>yourorders/browse">Your Order </a></li>
  <li role="presentation"><a href="#">Update Profile</a></li>
  <li role="presentation"><a href="<?= base_url()?>youraccount/logout"> Log Out</a></li>
</ul>
