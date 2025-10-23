<?php $pageTitle='Home'; include 'header.php';?>
<section id="home" class="hero">
<div class="hero-slideshow">
<div class="slide active"><img src="https://images.unsplash.com/photo-1445205170230-053b83016050?w=1920&h=1080&fit=crop" alt="Fashion"></div>
<div class="slide"><img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=1920&h=1080&fit=crop" alt="Clothing"></div>
<div class="slide"><img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=1920&h=1080&fit=crop" alt="Style"></div>
<div class="hero-overlay"></div>
</div>
<div class="container">
<div class="hero-content">
<h1 class="hero-title">Discover Your Style</h1>
<p class="hero-subtitle">Premium fashion collection</p>
<a href="all-products.php" class="btn btn-primary">Shop Now</a>
</div>
</div>
</section>
<section class="why-choose-us">
<div class="container">
<h2 class="section-title">Why Choose Us</h2>
<div class="features-grid">
<div class="feature-card"><i class="fas fa-shipping-fast"></i><h3>Fast Delivery</h3><p>2-3 days worldwide</p></div>
<div class="feature-card"><i class="fas fa-undo"></i><h3>Money Back</h3><p>30-day guarantee</p></div>
<div class="feature-card"><i class="fas fa-certificate"></i><h3>Quality Guarantee</h3><p>Premium materials</p></div>
<div class="feature-card"><i class="fas fa-headset"></i><h3>24/7 Support</h3><p>Always here</p></div>
</div>
</div>
</section>
<section id="categories" class="categories">
<div class="container">
<h2 class="section-title">Shop by Category</h2>
<div class="categories-grid">
<?php foreach($categories as $slug=>$cat):?>
<div class="category-card">
<img src="<?php echo $cat['image'];?>" alt="<?php echo $cat['name'];?>">
<div class="category-overlay">
<h3><?php echo $cat['name'];?></h3>
<a href="category-<?php echo $slug;?>.php" class="btn btn-secondary">Explore</a>
</div>
<div class="category-title"><h3><?php echo $cat['name'];?></h3></div>
</div>
<?php endforeach;?>
</div>
</div>
</section>
<section id="products" class="products">
<div class="container">
<h2 class="section-title">Featured Products</h2>
<div class="products-grid">
<?php $featured=array_slice($products,0,4,true);foreach($featured as $prod):?>
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
<div style="text-align:center;margin-top:40px">
<a href="all-products.php" class="btn btn-primary">View All Products</a>
</div>
</div>
</section>
<section class="about">
<div class="container">
<h2 class="section-title">About Us</h2>
<div class="about-content">
<div class="about-text">
<p><?php echo SITE_NAME;?> is your destination for premium fashion. We curate the finest selection of clothing and accessories.</p>
</div>
<div class="about-icons">
<div class="about-icon-card"><i class="fas fa-award"></i><h4>Premium Quality</h4></div>
<div class="about-icon-card"><i class="fas fa-globe"></i><h4>Worldwide Shipping</h4></div>
<div class="about-icon-card"><i class="fas fa-shield-alt"></i><h4>Secure Shopping</h4></div>
</div>
</div>
</div>
</section>
<section class="newsletter">
<div class="container">
<div class="newsletter-content">
<h2>Subscribe Newsletter</h2>
<p>Get exclusive offers delivered to your inbox</p>
<form class="newsletter-form" onsubmit="handleNewsletterSubmit(event)">
<input type="email" id="newsletterEmail" placeholder="Enter email" required>
<button type="submit" class="btn btn-primary">Subscribe</button>
</form>
</div>
</div>
</section>
<?php include 'footer.php';?>