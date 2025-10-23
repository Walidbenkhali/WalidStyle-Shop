<?php include 'header.php';$id=isset($_GET['id'])?(int)$_GET['id']:1;$p=getProduct($id);if(!$p){header('Location:index.php');exit;}$pageTitle=$p['name'];?>
<section class="product-detail"><div class="container"><div class="product-detail-grid">
<div class="product-image-large"><img src="<?php echo $p['image'];?>" alt="<?php echo $p['name'];?>"></div>
<div class="product-details"><h1><?php echo $p['name'];?></h1>
<div class="product-rating-large"><?php echo getStarRating($p['rating']);?><span>(<?php echo $p['reviews'];?> reviews)</span></div>
<p class="product-price-large"><?php echo formatPrice($p['price']);?></p>
<p class="product-description"><?php echo $p['description'];?></p>
<form onsubmit="addToCartFromProduct(event,<?php echo $p['id'];?>)">
<div class="product-options">
<div class="option-group"><label>Size:</label><select id="productSize" required><?php foreach($p['sizes'] as $s):?><option value="<?php echo $s;?>"><?php echo $s;?></option><?php endforeach;?></select></div>
<div class="option-group"><label>Color:</label><select id="productColor" required><?php foreach($p['colors'] as $c):?><option value="<?php echo $c;?>"><?php echo $c;?></option><?php endforeach;?></select></div>
<div class="option-group"><label>Qty:</label><input type="number" id="productQuantity" value="1" min="1" max="<?php echo $p['stock'];?>"></div>
</div>
<button type="submit" class="btn btn-primary btn-large">Add to Cart</button>
</form>
</div></div></div></section>
<?php include 'footer.php';?>