<?php require_once 'config.php';require_once 'functions.php';$cC=getCartCount();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($pageTitle)?$pageTitle.' - ':'';?><?php echo SITE_NAME;?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<header id="header">
<nav class="navbar">
<div class="container">
<div class="nav-wrapper">
<div class="logo"><a href="index.php"><h1><?php echo SITE_NAME;?></h1></a></div>
<div class="search-bar"><form action="search.php" method="GET"><input type="text" name="q" placeholder="Search..."><button type="submit"><i class="fas fa-search"></i></button></form></div>
<ul class="nav-menu" id="navMenu">
<li><a href="index.php" class="nav-link">Home</a></li>
<li class="dropdown"><a href="all-products.php" class="nav-link">Shop</a></li>
<li><a href="about.php" class="nav-link">About</a></li>
<li class="dropdown">
<a href="#" class="nav-link">Help <i class="fas fa-chevron-down"></i></a>
<ul class="submenu">
<li><a href="privacy-policy.php">Privacy Policy</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="refund-policy.php">Refund Policy</a></li>
</ul>
</li>
<li><a href="cart.php" class="nav-link cart-link"><i class="fas fa-shopping-cart"></i> <span id="cartCount"><?php echo $cC;?></span></a></li>
</ul>
<div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
</div>
</div>
</nav>
</header>