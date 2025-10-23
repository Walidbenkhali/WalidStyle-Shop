<?php $pageTitle='Cart'; include 'header.php';$c=getCart();$t=getCartTotal();?>
<section class="page-header"><div class="container"><h1>Shopping Cart</h1></div></section>
<section class="cart-section"><div class="container">
<?php if(empty($c)):?>
<div class="empty-cart"><i class="fas fa-shopping-cart"></i><h2>Cart Empty</h2>
<p>Add products to get started!</p><a href="all-products.php" class="btn btn-primary">Shop Now</a></div>
<?php else:?>
<div class="cart-content">
<div class="cart-items"><table class="cart-table"><thead><tr><th>Product</th><th>Price</th><th>Size</th><th>Color</th><th>Qty</th><th>Total</th><th>Action</th></tr></thead><tbody>
<?php foreach($c as $k=>$i):?>
<tr><td class="cart-product"><img src="<?php echo $i['image'];?>" alt="<?php echo $i['name'];?>"><span><?php echo $i['name'];?></span></td>
<td><?php echo formatPrice($i['price']);?></td><td><?php echo $i['size'];?></td><td><?php echo $i['color'];?></td><td><?php echo $i['quantity'];?></td>
<td><?php echo formatPrice($i['price']*$i['quantity']);?></td>
<td><button class="btn-remove" onclick="removeFromCartAction('<?php echo $k;?>')"><i class="fas fa-trash"></i></button></td></tr>
<?php endforeach;?>
</tbody></table></div>
<div class="cart-summary"><h3>Summary</h3>
<div class="summary-row"><span>Subtotal:</span><span><?php echo formatPrice($t);?></span></div>
<div class="summary-row"><span>Shipping:</span><span>Free</span></div>
<div class="summary-row total"><span>Total:</span><span><?php echo formatPrice($t);?></span></div>
<a href="checkout.php" class="btn btn-primary btn-block">Checkout</a>
<a href="all-products.php" class="btn btn-secondary btn-block">Continue Shopping</a>
</div></div>
<?php endif;?>
</div></section>
<?php include 'footer.php';?>