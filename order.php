<?php
session_start();
if (isset($_POST["checkout-btn"])) {
    $order_number = rand(10000, 9999999);
	$file = "order.txt";
    file_put_contents($file, $order_number ."\n",LOCK_EX | FILE_APPEND);
}
?>
<HTML>
<HEAD>
<TITLE>High quality Plastic Barrel ,Drum 200 Litre HDPE Open Top Blue Plastic Drum plastic chemical barrel</TITLE>
<link href="./assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/one-page-checkout.css" type="text/css"
	rel="stylesheet" />
<script src="./vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="./vendor/jquery/jquery-ui.js"></script>
</HEAD>
<BODY>
<?php if(!empty($order_number)){?>

			<div class="order-message order-success">
			You order number is <?php echo $order_number;?>.
		<span class="btn-message-close"
					onclick="this.parentElement.style.display='none';" title="Close">&times;</span>

			</div>
<?php }?>
<div id="shopping-cart" tabindex="1">
				<div id="tbl-cart">
					<div id="txt-heading">
						<div id="cart-heading">Our Bank Details</div>
						<div id="close"></div>
					</div>
					<div id="cart-item">
        				<?php require_once 'bank.php'; ?>
						
           			 </div>
					 
				</div>
			</div>
<div id="shopping-cart" tabindex="1">
				<div id="tbl-cart">
					<div id="txt-heading">
						<div id="cart-heading">Your Order Details</div>
						<div id="close"></div>
					</div>
					<div id="cart-item">
        				<?php require_once './view/shopping-cart.php'; ?>
						
           			 </div>
					 
				</div>
			</div>
<div id="shopping-cart" tabindex="1">			
<div class="billing-detail-heading">Shipping details</div>
<form action="done.php" method="post">
<div class="row">
	<div class="form-label inline-block">
		Name <span class="required error"></span>

	</div>
	<div class="inline-block">
		<div id="first-name-info"></div>
		<input class="input-box-330" type="text" name="first-name"
			id="first-name">
	</div>
</div>
<div class="row">
	<div class="form-label">Address</div>
	<div class="inline-block">
		<input class="input-box-330" class="input-box-330" type="text"
			name="address">
	</div>
</div>
<div class="row">
	<div class="form-label">City</div>
	<div class="inline-block">
		<input class="input-box-330" type="text" name="city">
	</div>
</div>
<div class="row">
	<div class="form-label">Province</div>
	<div class="inline-block">
		<input class="input-box-330" type="text" name="state">
	</div>
</div>
<div class="row">
	<div class="form-label">Zipcode</div>
	<div class="inline-block">
		<input class="input-box-330" type="text" name="zipcode">
	</div>
</div>

<div class="row">
	<div class="form-label">
		Email Address<span class="required error"></span>
	</div>
	<div class="inline-block">
		<div id="email-info"></div>
		<input class="input-box-330" type="text" name="email" id="email">

	</div>
</div>
<div class="info-label">An Invoice receipt and Tracking number be sent to your email upon completing purchase.</div>
<div class="row">
				<div id="inline-block">
					<input type="submit" class="checkout" name="checkout-btn"
						id="checkout-btn" value="I Have Paid">
				</div>
			</div>
</form>
</div>
</BODY>
</HTML>