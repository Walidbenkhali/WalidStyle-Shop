<?php $pageTitle='Hoodies'; include 'header.php';$slug='hoodies';$info=getCategoryInfo($slug);$prods=getProductsByCategory($slug);?>
<section class="page-header"><div class="container"><h1><?php echo $info['name'];?></h1></div></section>
<section class="products"><div class="container"><div class="products-grid">
<?php foreach($prods as $p):?>
<div class="product-card"><a href="product.php?id=<?php echo $p['id'];?>"><img src="<?php echo $p['image'];?>" alt="<?php echo $p['name'];?>"></a>
<div class="product-info"><h3><a href="product.php?id=<?php echo $p['id'];?>"><?php echo $p['name'];?></a></h3>
<div class="product-rating"><?php echo getStarRating($p['rating']);?><span>(<?php echo $p['rating'];?>)</span></div>
<p class="product-price"><?php echo formatPrice($p['price']);?></p>
<div class="product-buttons"><button class="btn btn-buy" onclick="addToCartQuick(<?php echo $p['id'];?>)">Add to Cart</button>
<a href="product.php?id=<?php echo $p['id'];?>" class="btn btn-secondary">Buy Now</a></div></div></div>
<?php endforeach;?>
</div></div></section>
<?php include 'footer.php';?>