# 🛍️ WalidStyle Shop - Complete E-Commerce Platform

![Version](https://img.shields.io/badge/Version-1.0.0-blue)
![PHP](https://img.shields.io/badge/PHP-8.0+-purple)
![License](https://img.shields.io/badge/License-MIT-green)

> Modern responsive e-commerce website built with PHP. No database required!

**Author:** Walid Ben Khali  
**Year:** 2025

---

## 📋 Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Installation](#installation)
- [How to Use](#how-to-use)
- [How to Customize](#how-to-customize)
- [Project Structure](#project-structure)
- [Design System](#design-system)

---

## 🎯 Overview

WalidStyle Shop is a complete standalone e-commerce website designed for fashion retail.

---

## ✨ Features

### Shopping Features
- Full shopping cart system
- Product browsing
- Product detail pages
- Checkout process
- Search functionality
- Newsletter subscription

### Design & UX
- Responsive (Mobile/Tablet/Desktop)
- Hero slideshow
- Smooth animations
- Mobile hamburger menu
- Professional colors

### Pages
- Homepage, All Products, Categories
- Product details, Cart, Checkout
- About, Contact
- Privacy Policy, Refund Policy

---

## 🚀 Installation

### Prerequisites
- PHP 7.4+
- Web server (Apache/Nginx)
- No database needed!

### Quick Start

1. Extract to web server directory
2. Open: http://localhost/walidstyle-shop/
3. Done!

---

## 📖 How to Use

### Adding New Products

Edit `config.php`:

```php
7 => [
    'id' => 7,
    'name' => 'Product Name',
    'category' => 'hoodies',
    'price' => 59.99,
    'image' => 'https://image-url.jpg',
    'rating' => 4.7,
    'reviews' => 120,
    'description' => 'Description here',
    'sizes' => ['S','M','L','XL'],
    'colors' => ['Black','White'],
    'stock' => 50
],
```

### Changing Products
Edit values in the `$products` array in `config.php`

### Adding Categories

1. Add to `$categories` in `config.php`:
```php
'newcat' => [
    'name' => 'Category Name',
    'description' => 'Description',
    'image' => 'https://image-url.jpg'
]
```

2. Create page: `category-newcat.php` (copy existing category page)

### Changing Colors

Edit `style.css`:
```css
:root {
    --primary: #1a2332;
    --secondary: #f5f1e8;
    --accent: #d4a574;
}
```

### Changing Fonts

Add font link in `header.php`:
```html
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
```

Edit `style.css`:
```css
body {
    font-family: 'Roboto', sans-serif;
}
```

### Changing Slideshow

Edit `index.php` hero section - replace image URLs

---

## 📁 Project Structure

```
walidstyle-shop/
├── config.php (Products database)
├── functions.php (Helper functions)
├── header.php (Header with menu)
├── footer.php (Footer with links)
├── index.php (Homepage)
├── all-products.php
├── categories.php
├── product.php
├── cart.php
├── checkout.php
├── about.php
├── contact.php
├── privacy-policy.php
├── refund-policy.php
├── search.php
├── category-*.php (4 files)
├── cart-handler.php
├── style.css
├── script.js
└── README.md
```

---

## 🎨 Design System

### Colors
- Midnight Blue: #1a2332 (Primary)
- Cream: #f5f1e8 (Secondary)
- Gold: #d4a574 (Accent)

### Typography
- Font: Segoe UI, Tahoma, Geneva, Verdana
- Responsive sizes
- Clean hierarchy

### Responsive
- Mobile: < 768px
- Tablet: 768-968px
- Desktop: > 968px

---

## 🛠️ Technologies

- HTML5, CSS3, JavaScript
- PHP 8.0+
- Font Awesome 6.4.0
- No frameworks needed!

---

## 📄 License

MIT License - Copyright © 2025 Walid Ben Khali

---

## 📧 Contact

**Walid Ben Khali**
- Email: walidbenkhali2@gmail.com

---

**Made with ❤️ by Walid Ben Khali**
