<?php 
echo form_open($form_location); 
echo form_hidden('upload', '1');
echo form_hidden('cmd', '_cart');
echo form_hidden('business', $paypal_email);
echo form_hidden('currency_code', $currency_code);
echo form_hidden('custom', $custom);
//for the view file 
echo form_hidden('return', $return);
echo form_hidden('cancel_return', $cancel_return);

 $count=0;
foreach ($query->result() as $row) {
	$count++;
	$item_title = $row->item_title;
	$price = $row->price;
	$item_qty= $row->item_qty;
	$item_size= $row->item_size;
	$item_colour= $row->item_colour;
	
	echo form_hidden('item_name_'.$count, $item_title);
 	echo form_hidden('amount_'.$count, $price);
 	echo form_hidden('item_qty_'.$count, $item_qty);
 	
 	if ($item_colour!='') {
 		//what the option is calld
 		echo form_hidden('on0_'.$count, 'Colour');
 		//what the value is 
 		echo form_hidden('os0_'.$count, $item_colour);
 	}


 	if ($item_size!='') {
 		//what the option is calld
 		echo form_hidden('on1_'.$count, 'Size');
 		//what the value is 
 		echo form_hidden('os1_'.$count, $item_size);
 	}
 }

echo form_hidden('shipping_'.$count, $shipping);
?>
<div class="button extra-small pull-right">
<button class="btn btn-success" name="submit" value="submit" type="submit" style="background-color: #01a6a9;">
	<span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
	 Procced to checkout</button>
</div> 
<?php
echo form_close();

if ($on_test_mode==TRUE) {
	echo "<div style='clear: both; text-align: center; margin-top: 24px;'>";
	echo form_open('paypal/submit_test');
	echo "Enter Number of orders you'd like to simulate:";
	echo form_input('num_orders');
	echo form_submit('submit', 'Submit');
	echo form_hidden('custom', $custom);

	echo form_close();
	echo "</div>";
}
