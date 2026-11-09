<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Products Page</title>
    <!-- Font Awesome Icons -->
    <style>
       /* Google Fonts Import */
@import url('https://googleapis.com');

/* Global Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #f8f9fa;
    color: #333;
}

/* Header & Navbar */
header {
    background-color: #ffffff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    position: sticky;
    top: 0;
    z-index: 100;
}

.navbar {
    max-width: 1200px;
    margin: 0 auto;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
    font-weight: 700;
    color: #222;
}

.logo span {
    color: #ff4757;
}

.search-bar {
    display: flex;
    width: 40%;
}

.search-bar input {
    width: 100%;
    padding: 8px 15px;
    border: 1px solid #ddd;
    border-right: none;
    border-radius: 4px 0 0 4px;
    outline: none;
}

.search-bar button {
    background-color: #ff4757;
    border: none;
    color: white;
    padding: 0 15px;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
}

.nav-icons a {
    color: #333;
    font-size: 20px;
    margin-left: 20px;
    text-decoration: none;
    position: relative;
}

.badge {
    position: absolute;
    top: -10px;
    right: -10px;
    background-color: #ff4757;
    color: white;
    font-size: 11px;
    padding: 2px 6px;
    border-radius: 50%;
}

/* Main Layout Container */
.container {
    max-width: 1200px;
    margin: 30px auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 250px 1fr;
    gap: 30px;
}

/* Sidebar Filters */
.sidebar {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    height: fit-content;
}

.sidebar h3 {
    margin-bottom: 20px;
    font-size: 18px;
    border-bottom: 2px solid #f1f2f6;
    padding-bottom: 10px;
}

.filter-group {
    margin-bottom: 25px;
}

.filter-group h4 {
    margin-bottom: 12px;
    font-size: 14px;
    color: #777;
}

.filter-group label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    cursor: pointer;
}

.filter-group label input {
    margin-right: 8px;
}

.price-slider {
    width: 100%;
    accent-color: #ff4757;
}

.price-labels {
    display: flex;
    justify-content: space-between;
    font-size: 12px;
    color: #666;
    margin-top: 5px;
}

.filter-group select {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ddd;
    outline: none;
}

/* Products Grid */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 25px;
}

/* Product Card */
.product-card {
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.product-image {
    position: relative;
    background-color: #f1f2f6;
    height: 250px;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.06);
}

.tag {
    position: absolute;
    top: 12px;
    left: 12px;
    padding: 4px 10px;
    border-radius: 4px;
    font-size: 11px;
    font-weight: 600;
    color: white;
    z-index: 10;
}

.tag.sale { background-color: #ff4757; }
.tag.new { background-color: #2ed573; }

.overlay-action {
    position: absolute;
    top: 12px;
    right: -50px;
    transition: right 0.3s ease;
    z-index: 10;
}

.product-card:hover .overlay-action {
    right: 12px;
}

.wishlist-btn {
    background: white;
    border: none;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    color: #333;
    transition: background 0.2s;
}

.wishlist-btn:hover {
    background-color: #ff4757;
    color: white;
}

/* Product Info */
.product-info {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.category {
    font-size: 12px;
    color: #a4b0be;
    text-transform: uppercase;
    margin-bottom: 5px;
    font-weight: 500;
}

.product-title {
    font-size: 15px;
    font-weight: 600;
    color: #2f3542;
    margin-bottom: 8px;
    line-height: 1.4;
    height: 42px; /* fallback for 2 lines text */
    overflow: hidden;
}

.rating {
    font-size: 13px;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 2px;
}

.text-warning { color: #ffa502; }
.rating span { color: #747d8c; margin-left: 5px; }

.price-box {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: auto;
}

.current-price {
    font-size: 18px;
    font-weight: 700;
    color: #ff4757;
}

.old-price {
    font-size: 14px;
    color: #a4b0be;
    text-decoration: line-through;
}

.add-to-cart-btn {
    width: 100%;
    background-color: #2f3542;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 4px;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.add-to-cart-btn:hover {
    background-color: #ff4757;
}

/* Responsive Breakpoints */
@media (max-width: 992px) {
    .container {
        grid-template-columns: 1fr;
    }
    .sidebar {
        display: none; /* Can be toggled using JavaScript later */
    }
    .search-bar {
        width: 50%;
    }
}

@media (max-width: 576px) {
    .navbar {
        flex-direction: column;
        gap: 15px;
    }
    .search-bar {
        width: 100%;
    }
}

    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="navbar">
            <div class="logo">Shop<span>Zone</span></div>
            <div class="search-bar">
                <input type="text" placeholder="Search products...">
                <button><i class="fa fa-search"></i></button>
            </div>
            <div class="nav-icons">
                <a href="#"><i class="fa fa-heart"></i></a>
                <a href="#" class="cart-icon"><i class="fa fa-shopping-cart"></i><span class="badge">3</span></a>
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <div class="container">
        
        <!-- Sidebar Filters -->
        <aside class="sidebar">
            <h3>Filters</h3>
            
            <div class="filter-group">
                <h4>Categories</h4>
                <label><input type="checkbox" checked> All Products</label>
                <label><input type="checkbox"> Electronics</label>
                <label><input type="checkbox"> Fashion & Apparel</label>
                <label><input type="checkbox"> Home Accessories</label>
            </div>

            <div class="filter-group">
                <h4>Price Range</h4>
                <input type="range" min="0" max="500" value="250" class="price-slider">
                <div class="price-labels">
                    <span>$0</span>
                    <span>$500</span>
                </div>
            </div>

            <div class="filter-group">
                <h4>Sort By</h4>
                <select>
                    <option>Popularity</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest Arrivals</option>
                </select>
            </div>
        </aside>

        <!-- Products Grid Area -->
        <main class="products-grid">
            
            <!-- Product Card 1 -->
            <div class="product-card">
                <div class="product-image">
                    <span class="tag sale">Sale</span>
                    <img src="https://unsplash.com" alt="Product Image">
                    <div class="overlay-action">
                        <button class="wishlist-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                </div>
                <div class="product-info">
                    <p class="category">Electronics</p>
                    <h3 class="product-title">Premium Wireless Headies</h3>
                    <div class="rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa-regular fa-star"></i>
                        <span>(45)</span>
                    </div>
                    <div class="price-box">
                        <span class="current-price">$129.00</span>
                        <span class="old-price">$159.00</span>
                    </div>
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-basket"></i> Add to Cart</button>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="product-image">
                    <span class="tag new">New</span>
                    <img src="https://unsplash.com" alt="Product Image">
                    <div class="overlay-action">
                        <button class="wishlist-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                </div>
                <div class="product-info">
                    <p class="category">Gadgets</p>
                    <h3 class="product-title">Minimalist White Smartwatch</h3>
                    <div class="rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <span>(120)</span>
                    </div>
                    <div class="price-box">
                        <span class="current-price">$89.00</span>
                    </div>
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-basket"></i> Add to Cart</button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://unsplash.com" alt="Product Image">
                    <div class="overlay-action">
                        <button class="wishlist-btn"><i class="fa-regular fa-heart"></i></button>
                    </div>
                </div>
                <div class="product-info">
                    <p class="category">Fashion</p>
                    <h3 class="product-title">Classic Retro Sunglasses</h3>
                    <div class="rating">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <span>(18)</span>
                    </div>
                    <div class="price-box">
                        <span class="current-price">$45.00</span>
                    </div>
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-basket"></i> Add to Cart</button>
                </div>
            </div>

        </main>
    </div>

</body>
</html>
