<?php $pageTitle='Checkout'; include 'header.php';$c=getCart();$t=getCartTotal();if(empty($c)){header('Location:cart.php');exit;}?>
<section class="page-header"><div class="container"><h1>Checkout</h1></div></section>
<section class="checkout-section"><div class="container">
<div class="checkout-grid">
<div class="checkout-form"><h2>Billing Info</h2>
<form onsubmit="processCheckout(event)">
<div class="form-row"><div class="form-group"><label>First Name *</label><input type="text" required></div>
<div class="form-group"><label>Last Name *</label><input type="text" required></div></div>
<div class="form-group"><label>Email *</label><input type="email" required></div>
<div class="form-group"><label>Phone *</label><input type="tel" required></div>
<div class="form-group"><label>Address *</label><input type="text" required></div>
<div class="form-row"><div class="form-group"><label>City *</label><input type="text" required></div>
<div class="form-group"><label>Zip *</label><input type="text" required></div></div>
<div class="form-group"><label>Payment *</label><select required>
<option>Select payment</option><option value="card">Card</option><option value="paypal">PayPal</option><option value="cod">Cash</option>
</select></div>
<button type="submit" class="btn btn-primary btn-block">Place Order</button>
</form>
</div>
<div class="order-summary"><h2>Order Summary</h2>
<div class="order-items">
<?php foreach($c as $i):?>
<div class="order-item"><img src="<?php echo $i['image'];?>" alt="<?php echo $i['name'];?>">
<div><h4><?php echo $i['name'];?></h4><p>Qty: <?php echo $i['quantity'];?></p></div>
<span><?php echo formatPrice($i['price']*$i['quantity']);?></span></div>
<?php endforeach;?>
</div>
<div class="order-total">
<div class="total-row"><span>Total:</span><span><?php echo formatPrice($t);?></span></div>
</div>
</div>
</div>
</div></section>
<?php include 'footer.php';?>