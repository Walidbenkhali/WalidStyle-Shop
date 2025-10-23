# 🎨 Customization Guide - WalidStyle Shop

**Author:** Walid Ben Khali

This guide helps you customize every aspect of WalidStyle Shop.

---

## 📦 Adding Products

### Step 1: Open config.php

### Step 2: Add New Product

```php
$products = [
    // ... existing products
    7 => [
        'id' => 7,
        'name' => 'Your Product Name',
        'category' => 'hoodies', // Choose: hoodies, tshirts, jeans, accessories
        'price' => 59.99,
        'image' => 'https://images.unsplash.com/your-image',
        'rating' => 4.7,
        'reviews' => 120,
        'description' => 'Detailed product description here',
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Black', 'White', 'Navy', 'Red'],
        'stock' => 50
    ]
];
```

### Tips:
- ID must be unique
- Use Unsplash for free images
- Category must match existing categories
- Stock number affects availability

---

## 🏷️ Changing Products

Simply edit the values in `config.php`:

```php
2 => [
    'name' => 'NEW NAME',        // Change name
    'price' => 39.99,            // Change price
    'image' => 'new-url.jpg',    // Change image
    'description' => 'NEW DESC',  // Change description
    // ... etc
]
```

---

## 📂 Adding Categories

### Step 1: Add to config.php

```php
$categories = [
    // ... existing
    'shoes' => [
        'name' => 'Shoes',
        'description' => 'Premium footwear',
        'image' => 'https://image-url.jpg'
    ]
];
```

### Step 2: Create Category Page

Copy `category-hoodies.php` to `category-shoes.php`

Change:
```php
$categorySlug = 'shoes';
```

### Step 3: Add Menu Link

Edit `header.php` - add link if needed

---

## 🎨 Changing Colors

### Method 1: Edit style.css

```css
:root {
    --primary: #YOUR-COLOR;
    --secondary: #YOUR-COLOR;
    --accent: #YOUR-COLOR;
}
```

### Method 2: Use Color Picker

1. Go to coolors.co
2. Generate palette
3. Copy hex codes
4. Paste in style.css

### Recommended Palettes

**Option 1 - Dark Blue:**
```css
--primary: #1a2332;
--secondary: #f5f1e8;
--accent: #d4a574;
```

**Option 2 - Modern:**
```css
--primary: #2c3e50;
--secondary: #ecf0f1;
--accent: #e74c3c;
```

**Option 3 - Fresh:**
```css
--primary: #27ae60;
--secondary: #ecf0f1;
--accent: #f39c12;
```

---

## 🔤 Changing Fonts

### Step 1: Choose Font

Go to fonts.google.com and choose a font

### Step 2: Add to header.php

```html
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
```

### Step 3: Update style.css

```css
body {
    font-family: 'Roboto', sans-serif;
}
```

### Popular Font Combinations

**Option 1 - Clean:**
```css
font-family: 'Roboto', sans-serif;
```

**Option 2 - Modern:**
```css
font-family: 'Montserrat', sans-serif;
```

**Option 3 - Elegant:**
```css
font-family: 'Playfair Display', serif;
```

---

## 🖼️ Changing Slideshow Images

### Edit index.php

Find hero section and replace URLs:

```html
<div class="slide active">
    <img src="YOUR-IMAGE-URL.jpg" alt="Your Description">
</div>
```

### Best Practices:
- Use high-quality images (1920x1080)
- Compress images (tinypng.com)
- Use Unsplash for free photos
- Keep file size under 500KB

### Recommended Unsplash Searches:
- "fashion model"
- "clothing store"
- "shopping"
- "lifestyle fashion"

---

## 📝 Editing Text Content

### Homepage Text

Edit `index.php`:
```php
<h1>Your Title</h1>
<p>Your description</p>
```

### About Page

Edit `about.php` - change all text

### Footer Text

Edit `footer.php` - update copyright, links, etc.

---

## 🔗 Adding Social Media Links

Edit `footer.php`:

```html
<a href="https://facebook.com/yourpage"><i class="fab fa-facebook-f"></i></a>
<a href="https://instagram.com/yourpage"><i class="fab fa-instagram"></i></a>
```

---

## 📧 Contact Information

Edit `footer.php`:

```html
<li><i class="fas fa-envelope"></i> your@email.com</li>
<li><i class="fas fa-phone"></i> +1 234 567 8900</li>
```

Also edit `contact.php` if needed

---

## 🎯 SEO Optimization

### Update Meta Tags

Edit `header.php`:

```html
<title>Your Site Name</title>
<meta name="description" content="Your site description">
<meta name="keywords" content="fashion, shop, clothing">
```

### Update Site Name

Edit `config.php`:

```php
define('SITE_NAME', 'Your Shop Name');
```

---

## 🚀 Advanced Customization

### Adding New Pages

1. Create new PHP file: `yourpage.php`
2. Include header: `<?php include 'header.php'; ?>`
3. Add your content
4. Include footer: `<?php include 'footer.php'; ?>`
5. Add link in menu

### Modifying Cart Behavior

Edit `cart-handler.php` for backend
Edit `script.js` for frontend

### Custom CSS

Add to bottom of `style.css`:

```css
/* My Custom Styles */
.my-custom-class {
    /* Your styles */
}
```

---

## ⚠️ Important Notes

- Always backup before editing
- Test on localhost first
- Keep original files as backup
- Use proper PHP syntax
- Validate HTML/CSS after changes

---

**Need Help?**

Contact: Walid Ben Khali
Email: info@walidstyle.com

---

**Made with ❤️ by Walid Ben Khali**
