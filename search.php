<?php $pageTitle='Search'; include 'header.php';$q=isset($_GET['q'])?strtolower($_GET['q']):'';$results=[];
if($q){foreach($products as $p){if(strpos(strtolower($p['name']),$q)!==false){$results[]=$p;}}}?>
<section class="page-header"><div class="container"><h1>Search Results for "<?php echo htmlspecialchars($q);?>"</h1></div></section>
<section class="products"><div class="container">
<?php if(empty($results)):?>
<p style="text-align:center;padding:40px;">No products found</p>
<?php else:?>
<div class="products-grid">
<?php foreach($results as $p):?>
<div class="product-card"><a href="product.php?id=<?php echo $p['id'];?>"><img src="<?php echo $p['image'];?>" alt="<?php echo $p['name'];?>"></a>
<div class="product-info"><h3><a href="product.php?id=<?php echo $p['id'];?>"><?php echo $p['name'];?></a></h3>
<div class="product-rating"><?php echo getStarRating($p['rating']);?></div>
<p class="product-price"><?php echo formatPrice($p['price']);?></p>
<div class="product-buttons"><button class="btn btn-buy" onclick="addToCartQuick(<?php echo $p['id'];?>)">Add to Cart</button></div>
</div></div>
<?php endforeach;?>
</div>
<?php endif;?>
</div></section>
<?php include 'footer.php';?>