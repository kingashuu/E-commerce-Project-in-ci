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

$count = 0;
foreach ($query->result() as $row) {
	$count++;
	$item_title = $row->item_title;
	$price = $row->price;
	$item_qty = $row->item_qty;
	$item_size = $row->item_size;
	$item_colour = $row->item_colour;

	echo form_hidden('item_name_' . $count, $item_title);
	echo form_hidden('amount_' . $count, $price);
	echo form_hidden('item_qty_' . $count, $item_qty);

	if ($item_colour != '') {
		//what the option is calld
		echo form_hidden('on0_' . $count, 'Colour');
		//what the value is 
		echo form_hidden('os0_' . $count, $item_colour);
	}


	if ($item_size != '') {
		//what the option is calld
		echo form_hidden('on1_' . $count, 'Size');
		//what the value is 
		echo form_hidden('os1_' . $count, $item_size);
	}
}

echo form_hidden('shipping_' . $count, $shipping);
?>
<?php
$grand_total = 0;
foreach ($query->result() as $row) {
	$sub_total = $row->price * $row->item_qty;
	$sub_total_desc = number_format($sub_total, 2);
	$grand_total = $grand_total + $sub_total;
}
?>

<div class="button extra-small pull-right">
	<button class="btn btn-success" name="submit" value="submit" type="submit" style="background-color: #01a6a9;">
		<span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
		Procced to checkout</button>
</div>
<!-- <div class="col-md-10 col-md-offset-1" style="text-align: center;">
	<button class="btn btn-success" name="submit" value="submit" type="submit">
		<span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
		Go to checkout</button>
</div> -->



<div class="row">
	<!-- <div class="cart-requerment mt-50 clearfix">
		<div class="col-md-4 col-sm-6 clearfix">




			<!-- <div class="cart-title text-uppercase">
				<h5 class="mb-30"><strong>ESTIMATE SHIPPING AND TAX</strong></h5>
			</div>
			<div class="shopping-tax">
				<div class="row">
					<div class="col-sm-6">
						<div class="cart-show-label show-label">
							<select>
								<option selected="selected" value="position">Country</option>
								<option value="Name">Ethiopia</option>
								<option value="Price">Eritrea</option>
								<option value="Price">usa</option>
							</select>
						</div>
						<div class="cart-show-label show-label mt-15">
							<select>
								<option selected="selected" value="position">State/Province</option>
								<option value="Name">Oromiya</option>
								<option value="Price">Amara</option>
								<option value="Price">Tigrayi</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="cart-show-label show-label">
							<select>
								<option selected="selected" value="position">City</option>
								<option value="Name">Addis Abeba</option>
								<option value="Price">Dire Dawa</option>
								<option value="Price">Makale</option>
								<option value="Price">Behardar</option>
								<option value="Price">Hawasa</option>
							</select>
						</div>
						<div class="cart-show-label show-label mt-15">
							<select>
								<option selected="selected" value="position">Zip/Postal Code</option>
								<option value="Name">1200</option>
								<option value="Price">1201</option>
								<option value="Price">1202</option>
								<option value="Price">1203</option>
								<option value="Price">1204</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<a class="button extra-small pull-right mt-20" href="#" title="Add to Cart">
				<span>Get a Quote</span>
			</a>
		</div>
		<div class="col-md-4 col-sm-6 clearfix">
			<div class="counpon-info ml-35">
				<div class="cart-title text-uppercase">
					<h5 class="mb-30"><strong>COUPON DISCOUNT</strong></h5>
				</div>
				<div class="coupon-discount">
					<label class="pb-10">Enter Your Coupon Code Here</label>
					<input type="text">
				</div>
				<a class="button extra-small pull-right mt-35" href="#" title="Add to Cart">
					<span>Apply Coupon</span>
				</a>
			</div>
		</div>
		<div class="col-md-offset-0 col-md-4 col-sm-offset-3 col-sm-6 clearfix">
			<div class="counpon-total ml-35">
				<div class="cart-title text-uppercase">
					<h5 class="mb-30"><strong>CART TOTAL</strong></h5>
				</div>
				<table>
					<tbody>
						<tr class="cart-subtotal">
							<th>Subtotal</th>

							<td>
								<?php
								//$grand_total_sub = number_format($grand_total, 2);
								//echo $grand_total_sub . " " . $currency_symbol; 
								?></td>
						</tr>
						<tr class="cart-shipping">
							<th>Shipping</th>
							<?php
							//$grand_total = $grand_total + $shipping;
							?>
							<td>
								<?php //= $shipping 
								?>
							</td>
						</tr>
						<tr class="cart-total">
							<th>Grand Total</th>
							<td><?php
								// $grand_total_desc = number_format($grand_total, 2);
								// echo $grand_total_desc . " " . $currency_symbol;
								?></td>
						</tr>
					</tbody>
				</table>
				<?php
				//if ($num_rows > 0) {
				//$user_type = 'public';

				//echo Modules::run('cart/_attempt_draw_checkout_btn', $query);
				//$this->load->module('cart/cart');
				//$draw_checkout_btn = $this->cart->_attempt_draw_checkout_btn($query);
				//echo $draw_checkout_btn;
				//}

				?>
				<div class="button extra-small pull-right">
					<button class="btn btn-success" name="submit" value="submit" type="submit" style="background-color: #01a6a9;">
						<span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
						Procced to checkout paypal</button>
				</div>
			</div>
		</div>
	</div> -->
</div>
</form>
</div> -->
</div>
</div>
</div>
</div>

<?php
echo form_close();

// if ($on_test_mode == TRUE) {
// 	echo "<div style='clear: both; text-align: center; margin-top: 24px;'>";
// 	echo form_open('paypal/submit_test');
// 	echo "Enter Number of orders you'd like to simulate:";
// 	echo form_input('num_orders');
// 	echo form_submit('submit', 'Submit');
// 	echo form_hidden('custom', $custom);

// 	echo form_close();
// 	echo "</div>";
// }
