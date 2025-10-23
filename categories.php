<?php $pageTitle='Categories'; include 'header.php';?>
<section class="page-header">
<div class="container">
<h1>Shop by Category</h1>
</div>
</section>
<section class="categories">
<div class="container">
<div class="categories-grid">
<?php foreach($categories as $slug=>$cat):?>
<div class="category-card">
<img src="<?php echo $cat['image'];?>" alt="<?php echo $cat['name'];?>">
<div class="category-overlay">
<h3><?php echo $cat['name'];?></h3>
<a href="category-<?php echo $slug;?>.php" class="btn btn-secondary">View</a>
</div>
<div class="category-title"><h3><?php echo $cat['name'];?></h3></div>
</div>
<?php endforeach;?>
</div>
</div>
</section>
<?php include 'footer.php';?>