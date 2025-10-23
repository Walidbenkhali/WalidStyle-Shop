<?php $pageTitle='Shop'; include 'header.php';?>
<section class="page-header">
<div class="container">
<h1>Shop</h1>
</div>
</section>
<section class="products">
<div class="container">
<div class="products-grid">
<?php foreach($products as $prod):?>
<div class="product-card">
<a href="product.php?id=<?php echo $prod['id'];?>"><img src="<?php echo $prod['image'];?>" alt="<?php echo $prod['name'];?>"></a>
<div class="product-info">
<h3><a href="product.php?id=<?php echo $prod['id'];?>"><?php echo $prod['name'];?></a></h3>
<div class="product-rating"><?php echo getStarRating($prod['rating']);?><span>(<?php echo $prod['rating'];?>)</span></div>
<p class="product-price"><?php echo formatPrice($prod['price']);?></p>
<div class="product-buttons">
<button class="btn btn-buy" onclick="addToCartQuick(<?php echo $prod['id'];?>)">Add to Cart</button>
<a href="product.php?id=<?php echo $prod['id'];?>" class="btn btn-secondary">Buy Now</a>
</div>
</div>
</div>
<?php endforeach;?>
</div>
</div>
</section>
<?php include 'footer.php';?>