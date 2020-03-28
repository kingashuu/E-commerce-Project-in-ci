<div class="row-fluid">

	<div class="span12 statbox " style="background-color: #932F6D; color: #fff">
	<div class="span4">
		<img src="<?= base_url() ?>assets/admin/img/paypal_logo.png">
	</div>
	<div class="span8">
   <h2>FEEDBACK FROM PAYPAL</h2>
   <p>
   	<b>Transmission Time :</b> <?= $date_created ?><br>
   	<b>Payment Status :</b> <?= $payment_status ?><br>
   	<b>Transaction ID :</b> <?= $txn_id ?><br>
   	<b>Payment Gross :</b> <?= $mc_gross?><br>
   	<b>Payer ID :</b> <?= $payer_id?><br>
   	<b>Payer Email:</b> <?=$payer_email ?><br>
   	<b>Payer Status:</b> <?= $payer_status?><br>
   	<b>Payment Date:</b> <?= $payment_date?><br>
   <!-- payer's details -->
   <b>Payer's Name:</b> <?= $first_name.' '.$last_name?><br>
   <b>Payer's Company</b> <?= $payer_business_name?><br>
   <b>Address Line 1:</b> <?= $address_name?><br>
   <b>Address Line 2:</b> <?= $address_street?><br>
   <b>City:</b> <?= $address_city?><br>
   <b>State:</b> <?= $address_state?><br>
   <b>Postcode/Zip</b> <?= $address_zip?><br>
   <b>Country</b> <?= $address_country?><br>


   	
   </p>

				
		

	</div>
		<div class="footer">
			<a href="https://www.paypal.com/"> chack paypal more info</a>
		</div>	
	</div>
	
</div>