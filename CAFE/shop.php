<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Fog Café - Shop</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c1e1e;
            --accent-color: #b87333;
            --light-accent: #d4a76a;
            --dark-bg: #1a1a1a;
            --light-text: #f8f9fa;
            --medium-bg: #2d2d2d;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        
        .navbar {
            background-color: var(--primary-color);
            padding: 15px 0;
        }
        
        .navbar-brand {
            font-weight: 600;
            color: var(--light-accent) !important;
        }
        
        .nav-link {
            color: var(--light-text) !important;
            margin: 0 5px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--light-accent) !important;
        }
        
        .user-greeting {
            color: var(--light-accent);
            font-weight: 500;
            margin-right: 15px;
        }
        
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        
        .btn-primary:hover {
            background-color: var(--light-accent);
            border-color: var(--light-accent);
        }
        
        .btn-outline-light:hover {
            color: var(--primary-color);
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        .section-title {
            color: var(--primary-color);
            position: relative;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background-color: var(--accent-color);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .page-header {
            background-color: var(--dark-bg);
            color: var(--light-text);
            padding: 60px 0;
            position: relative;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
        }
        
        .product-card {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            overflow: hidden;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        .product-card img {
            height: 200px;
            object-fit: cover;
            transition: all 0.5s ease;
        }
        
        .product-card:hover img {
            transform: scale(1.05);
        }
        
        .category-filter {
            margin-bottom: 30px;
        }
        
        .category-filter .btn {
            margin: 0 5px 10px;
            border-radius: 20px;
            padding: 8px 20px;
            background-color: #f8f9fa;
            color: #333;
            border: none;
        }
        
        .category-filter .btn.active {
            background-color: var(--accent-color);
            color: white;
        }
        
        .product-price {
            color: var(--accent-color);
            font-weight: bold;
            font-size: 1.1rem;
        }
        
        .cart-icon {
            position: relative;
        }
        
        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--accent-color);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
        }
        
        .toast-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1060;
        }
        
        .cart-item {
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
        }
        
        .cart-item:last-child {
            border-bottom: none;
        }
        
        .quantity-control {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .quantity-control button {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid #dee2e6;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        
        .quantity-input {
            width: 40px;
            text-align: center;
            border: none;
            margin: 0 5px;
        }
        
        footer {
            background-color: var(--primary-color);
            color: var(--light-text);
            padding: 60px 0 30px;
        }
        
        footer a {
            color: var(--light-text);
            transition: all 0.3s ease;
        }
        
        footer a:hover {
            color: var(--light-accent);
        }
        
        .social-icons a {
            display: inline-block;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            text-align: center;
            line-height: 36px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .empty-cart {
            text-align: center;
            padding: 30px 0;
        }
        
        .empty-cart i {
            font-size: 60px;
            color: #dee2e6;
            margin-bottom: 15px;
        }

        /* Payment Methods Styles */
        .payment-methods {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        .payment-method {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #dee2e6;
        }

        .payment-method:hover {
            background-color: #f8f9fa;
        }

        .payment-method.active {
            border-color: var(--accent-color);
            background-color: rgba(184, 115, 51, 0.1);
        }

        .payment-method input[type="radio"] {
            margin-right: 10px;
        }

        .payment-method-label {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .payment-icon {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            object-fit: contain;
        }

        /* Location Input Styles */
        .delivery-address {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        /* Order Tracking Styles */
        .order-status {
            padding: 30px 20px;
        }

        .order-steps {
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            position: relative;
        }

        .order-steps:before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 4px;
            background-color: #e9ecef;
            z-index: 1;
        }

        .step {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 25%;
        }

        .step-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            color: #6c757d;
            transition: all 0.3s ease;
        }

        .step.active .step-icon {
            background-color: var(--accent-color);
            color: white;
        }

        .step.completed .step-icon {
            background-color: #28a745;
            color: white;
        }

        .step-label {
            font-size: 0.8rem;
            text-align: center;
            color: #6c757d;
        }

        .step.active .step-label {
            color: var(--accent-color);
            font-weight: bold;
        }

        .step.completed .step-label {
            color: #28a745;
            font-weight: bold;
        }

        .order-details {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .order-delivery-info {
            margin-top: 20px;
        }

        .no-orders {
            text-align: center;
            padding: 30px 0;
        }

        .no-orders i {
            font-size: 60px;
            color: #dee2e6;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <i class="fas fa-mug-hot me-2"></i>
                Black Fog Café
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto text-center">
                    <span class="user-greeting" id="userGreeting">
                        <i class="fas fa-user me-1"></i> Hi, <span id="userName">Guest</span>
                    </span>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <button class="btn btn-outline-light position-relative" data-bs-toggle="modal" data-bs-target="#trackOrderModal">
                            <i class="fas fa-truck"></i>
                            <span class="cart-badge" id="orderBadge">0</span>
                        </button>
                    </li>
                    <li class="nav-item me-2">
                        <button class="btn btn-outline-light position-relative" data-bs-toggle="modal" data-bs-target="#cartModal">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-badge" id="cartBadge">0</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button id="logoutBtn" class="btn btn-outline-light">
                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Shop Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold section-title">Café Collection</h2>
                <p class="lead">Handpicked selections from our café to enjoy at home</p>
            </div>
            
            <!-- Category Filters -->
            <div class="category-filter text-center">
                <button class="btn active" data-filter="all">All Products</button>
                <button class="btn" data-filter="coffee">Coffee Beans</button>
                <button class="btn" data-filter="Pastries">Pastries</button>
                <button class="btn" data-filter="Breakfast">Breakfast</button>
                <button class="btn" data-filter="Lunch">Lunch</button>
            </div>
            
            <!-- Products Grid -->
            <div class="row g-4" id="productsContainer">
                <!-- Products will be generated dynamically by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Shopping Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Your Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="cartItems">
                        <!-- Cart items will be displayed here -->
                    </div>
                    <div id="emptyCart" class="empty-cart">
                        <i class="fas fa-shopping-cart"></i>
                        <h5>Your cart is empty</h5>
                        <p>Add some delicious items from our shop!</p>
                    </div>

                    <!-- Delivery Address Section -->
                    <div class="delivery-address" id="deliveryAddressSection" style="display: none;">
                        <h6>Delivery Address:</h6>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="deliveryAddress" placeholder="Enter your delivery address">
                        </div>
                    </div>

                    <!-- Payment Methods Section -->
                    <div class="payment-methods" id="paymentMethods" style="display: none;">
                        <h6>Select Payment Method:</h6>
                        <div class="payment-method active">
                            <input type="radio" id="cashOnDelivery" name="paymentMethod" value="cash" checked>
                            <label for="cashOnDelivery" class="payment-method-label">
                                <i class="fas fa-money-bill-wave payment-icon" style="color: #28a745;"></i>
                                <span>Cash on Delivery</span>
                            </label>
                        </div>
                        <div class="payment-method">
                            <input type="radio" id="gcash" name="paymentMethod" value="gcash">
                            <label for="gcash" class="payment-method-label">
                                <img src="https://www.gcash.com/favicon.ico" class="payment-icon" alt="GCash">
                                <span>GCash</span>
                            </label>
                        </div>
                        <div class="payment-method">
                            <input type="radio" id="paymaya" name="paymentMethod" value="paymaya">
                            <label for="paymaya" class="payment-method-label">
                                <img src="https://www.paymaya.com/favicon.ico" class="payment-icon" alt="PayMaya">
                                <span>PayMaya</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <div>
                        <h5>Total: <span id="cartTotal">₱0.00</span></h5>
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue Shopping</button>
                        <button type="button" class="btn btn-primary" id="checkoutBtn">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Track Order Modal -->
    <div class="modal fade" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="trackOrderModalLabel">Track Your Orders</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="noOrders" class="no-orders">
                        <i class="fas fa-truck"></i>
                        <h5>You have no active orders</h5>
                        <p>Your order history will appear here once you place an order.</p>
                    </div>
                    <div id="orderTracking" style="display: none;">
                        <!-- Order tracking content will be displayed here -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="toast-container">
        <div class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" id="addToCartToast">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="fas fa-check-circle me-2"></i> Item added to your cart!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Logout functionality
        document.getElementById('logoutBtn').addEventListener('click', function() {
            // Clear both localStorage and sessionStorage login data
            localStorage.removeItem('cafeLoggedInUser');
            sessionStorage.removeItem('cafeLoggedInUser');
            
            // Redirect to index.php
            window.location.href = 'index.php';
        });

        // Check if user is logged in - if not, redirect to index.php
        const loggedInUser = localStorage.getItem('cafeLoggedInUser') || sessionStorage.getItem('cafeLoggedInUser');
        if (!loggedInUser) {
            window.location.href = 'index.php';
        } else {
            // Update the greeting with the user's email
            document.getElementById('userName').textContent = loggedInUser;
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Product data
            const products = [
                // Coffee items
                {
                    id: 1,
                    name: "Black Fog Signature",
                    description: "Our namesake dark roast with notes of chocolate, caramel and a subtle smoky finish.",
                    price: 100,
                    image: "menu/coffee1.jpg",
                    category: "coffee",
                    badge: "House Special"
                },
                {
                    id: 2,
                    name: "Velvet Cloud Cappuccino",
                    description: "Perfect harmony of espresso and silky microfoam milk, dusted with cocoa.",
                    price: 120,
                    image: "menu/Velvet Cloud Cappuccino.jpg",
                    category: "coffee",
                    badge: "Popular"
                },
                {
                    id: 3,
                    name: "Midnight Mocha",
                    description: "Espresso and steamed milk with our house-made dark chocolate ganache and whipped cream.",
                    price: 130,
                    image: "menu/coffee2.jpg",
                    category: "coffee"
                },

                // Pastries items
                {
                    id: 4,
                    name: "Almond Croissant",
                    description: "Buttery layers filled with almond cream and topped with sliced almonds.",
                    price: 110,
                    image: "menu/past1.jpg",
                    category: "Pastries",
                    badge: "Best Seller"
                },
                {
                    id: 5,
                    name: "Dark Chocolate Cinnamon Roll",
                    description: "Soft swirls with cinnamon, dark chocolate chips and cream cheese frosting.",
                    price: 100,
                    image: "menu/past2.jpg",
                    category: "Pastries"
                },
                {
                    id: 6,
                    name: "Mixed Berry Scone",
                    description: "Buttery scone packed with seasonal berries and finished with a light vanilla glaze.",
                    price: 105,
                    image: "menu/past3.jpg",
                    category: "Pastries"
                },

                // Breakfast items
                {
                    id: 7,
                    name: "Truffle Mushroom Toast",
                    description: "Sourdough bread topped with creamy mushrooms, poached egg and truffle oil.",
                    price: 110,
                    image: "menu/break1.jpg",
                    category: "Breakfast",
                    badge: "New"
                },
                {
                    id: 8,
                    name: "Smoky Breakfast Burrito",
                    description: "Free-range scrambled eggs, black beans, avocado and chipotle sauce in a warm tortilla.",
                    price: 190,
                    image: "menu/break2.jpeg",
                    category: "Breakfast"
                },
                {
                    id: 9,
                    name: "Açaí Power Bowl",
                    description: "Blended açaí topped with house granola, fresh berries, banana and honey drizzle.",
                    price: 90,
                    image: "menu/break3.jpg",
                    category: "Breakfast"
                },

                // Lunch items
                {
                    id: 10,
                    name: "Prosciutto Fig Panini",
                    description: "Crusty ciabatta with prosciutto, fig jam, goat cheese and arugula.",
                    price: 100,
                    image: "menu/lunch1.jpg",
                    category: "Lunch",
                    badge: "Chef's Choice"
                },
                {
                    id: 11,
                    name: "Ancient Grain Bowl",
                    description: "Farro and quinoa with roasted seasonal vegetables, avocado and tahini dressing.",
                    price: 159,
                    image: "menu/lunch2.jpg",
                    category: "Lunch"
                },
                {
                    id: 12,
                    name: "Roasted Tomato Bisque",
                    description: "Slow-roasted tomatoes blended with herbs, cream and served with a gouda cheese dipper.",
                    price: 100,
                    image: "menu/lunch3.jpg",
                    category: "Lunch"
                }
            ];
            
            // MODIFIED: Initialize cart from localStorage with user-specific key
            const cartKey = `blackFogCart_${loggedInUser}`;
            let cart = JSON.parse(localStorage.getItem(cartKey)) || [];
            
            // MODIFIED: Initialize orders from localStorage with user-specific key
            const ordersKey = `blackFogOrders_${loggedInUser}`;
            let orders = JSON.parse(localStorage.getItem(ordersKey)) || [];
            
            // Update cart badge
            function updateCartBadge() {
                const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
                document.getElementById('cartBadge').textContent = totalItems;
            }
            
            // Update orders badge
            function updateOrderBadge() {
                document.getElementById('orderBadge').textContent = orders.length;
            }
            
            // Render products
            function renderProducts(productList = products) {
                const productsContainer = document.getElementById('productsContainer');
                productsContainer.innerHTML = '';
                
                productList.forEach(product => {
                    const productCard = document.createElement('div');
                    productCard.className = 'col-md-6 col-lg-3 product-item';
                    productCard.dataset.category = product.category;
                    
                    productCard.innerHTML = `
                        <div class="card product-card h-100">
                            <img src="${product.image}" class="card-img-top" alt="${product.name}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">${product.name}</h5>
                                <p class="card-text flex-grow-1">${product.description}</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="product-price">₱${product.price.toFixed(2)}</span>
                                    <button class="btn btn-primary add-to-cart" data-id="${product.id}">
                                        <i class="fas fa-cart-plus me-2"></i>Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    productsContainer.appendChild(productCard);
                });
                
                // Add event listeners to "Add to Cart" buttons
                document.querySelectorAll('.add-to-cart').forEach(button => {
                    button.addEventListener('click', function() {
                        const productId = parseInt(this.dataset.id);
                        addToCart(productId);
                    });
                });
            }
            
            // Filter products by category
            function filterProducts() {
                const filterButtons = document.querySelectorAll('.category-filter .btn');
                
                filterButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        // Remove active class from all buttons
                        filterButtons.forEach(btn => btn.classList.remove('active'));
                        
                        // Add active class to clicked button
                        this.classList.add('active');
                        
                        const category = this.dataset.filter;
                        
                        if (category === 'all') {
                            renderProducts();
                        } else {
                            const filteredProducts = products.filter(
                                product => product.category === category
                            );
                            renderProducts(filteredProducts);
                        }
                    });
                });
            }

            // MODIFIED: Add to cart function with image storage
            function addToCart(productId) {
                const product = products.find(p => p.id === productId);
                if (!product) return;

                const existingItem = cart.find(item => item.id === productId);
                
                if (existingItem) {
                    existingItem.quantity += 1;
                } else {
                    cart.push({
                        id: product.id,
                        name: product.name,
                        price: product.price,
                        quantity: 1,
                        image: product.image // Store image in cart item
                    });
                }
                
                // MODIFIED: Save to localStorage with user-specific key
                localStorage.setItem(cartKey, JSON.stringify(cart));
                
                // Update cart badge
                updateCartBadge();
                
                // Show toast notification
                const toast = new bootstrap.Toast(document.getElementById('addToCartToast'));
                toast.show();
                
                // Update cart modal if open
                if (document.querySelector('#cartModal.show')) {
                    renderCart();
                }
            }

            // MODIFIED: Render cart items with images
            function renderCart() {
                const cartItemsContainer = document.getElementById('cartItems');
                const emptyCartDiv = document.getElementById('emptyCart');
                const deliveryAddressSection = document.getElementById('deliveryAddressSection');
                const paymentMethods = document.getElementById('paymentMethods');
                
                if (cart.length === 0) {
                    cartItemsContainer.innerHTML = '';
                    emptyCartDiv.style.display = 'block';
                    deliveryAddressSection.style.display = 'none';
                    paymentMethods.style.display = 'none';
                } else {
                    emptyCartDiv.style.display = 'none';
                    deliveryAddressSection.style.display = 'block';
                    paymentMethods.style.display = 'block';
                    
                    let cartHTML = '';
                    let total = 0;
                    
                    cart.forEach(item => {
                        const itemTotal = item.price * item.quantity;
                        total += itemTotal;
                        
                        cartHTML += `
                            <div class="cart-item" data-id="${item.id}">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="d-flex align-items-center">
                                            <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
                                            <h6>${item.name}</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <span>₱${item.price.toFixed(2)}</span>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="quantity-control">
                                            <button class="decrement-btn" data-id="${item.id}">-</button>
                                            <input type="text" class="quantity-input" value="${item.quantity}" readonly>
                                            <button class="increment-btn" data-id="${item.id}">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <span>₱${itemTotal.toFixed(2)}</span>
                                    </div>
                                    <div class="col-md-1 text-end">
                                        <button class="btn btn-sm btn-outline-danger remove-btn" data-id="${item.id}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    
                    cartItemsContainer.innerHTML = cartHTML;
                    document.getElementById('cartTotal').textContent = `₱${total.toFixed(2)}`;
                    
                    // Add event listeners to quantity buttons
                    document.querySelectorAll('.increment-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const id = parseInt(this.dataset.id);
                            updateCartItem(id, 1);
                        });
                    });
                    
                    document.querySelectorAll('.decrement-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const id = parseInt(this.dataset.id);
                            updateCartItem(id, -1);
                        });
                    });
                    
                    document.querySelectorAll('.remove-btn').forEach(button => {
                        button.addEventListener('click', function() {
                            const id = parseInt(this.dataset.id);
                            removeFromCart(id);
                        });
                    });
                }
            }

            // MODIFIED: Update cart item quantity with user-specific key
            function updateCartItem(productId, change) {
                const item = cart.find(item => item.id === productId);
                if (!item) return;
                
                item.quantity += change;
                
                if (item.quantity <= 0) {
                    cart = cart.filter(item => item.id !== productId);
                }
                
                // MODIFIED: Save to localStorage with user-specific key
                localStorage.setItem(cartKey, JSON.stringify(cart));
                
                // Update cart badge
                updateCartBadge();
                
                // Re-render cart
                renderCart();
            }

            // MODIFIED: Remove from cart with user-specific key
            function removeFromCart(productId) {
                cart = cart.filter(item => item.id !== productId);
                
                // MODIFIED: Save to localStorage with user-specific key
                localStorage.setItem(cartKey, JSON.stringify(cart));
                
                // Update cart badge
                updateCartBadge();
                
                // Re-render cart
                renderCart();
            }

            // MODIFIED: Checkout function with user-specific keys
            function checkout() {
                if (cart.length === 0) return;
                
                const deliveryAddress = document.getElementById('deliveryAddress').value;
                const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
                
                if (!deliveryAddress) {
                    alert('Please enter your delivery address');
                    return;
                }
                
                // Create new order with images
                const order = {
                    id: Date.now(),
                    date: new Date().toLocaleString(),
                    items: cart.map(item => ({
                        ...item,
                        image: products.find(p => p.id === item.id)?.image || ''
                    })),
                    total: cart.reduce((total, item) => total + (item.price * item.quantity), 0),
                    deliveryAddress,
                    paymentMethod,
                    status: 'preparing'
                };
                
                // Add to orders with user-specific key
                orders.unshift(order);
                localStorage.setItem(ordersKey, JSON.stringify(orders));
                updateOrderBadge();
                
                // Clear cart with user-specific key
                cart = [];
                localStorage.setItem(cartKey, JSON.stringify(cart));
                updateCartBadge();
                
                // Close cart modal
                const cartModal = bootstrap.Modal.getInstance(document.getElementById('cartModal'));
                cartModal.hide();
                
                // Show success message instead of receipt
                alert('Your order has been placed successfully!');
            }

            // MODIFIED: Render order tracking with images
            function renderOrderTracking() {
                const orderTracking = document.getElementById('orderTracking');
                const noOrders = document.getElementById('noOrders');
                
                if (orders.length === 0) {
                    noOrders.style.display = 'block';
                    orderTracking.style.display = 'none';
                } else {
                    noOrders.style.display = 'none';
                    orderTracking.style.display = 'block';
                    
                    let trackingHTML = '';
                    
                    orders.forEach(order => {
                        // Determine step status
                        let step1Class = 'active';
                        let step2Class = '';
                        let step3Class = '';
                        let step4Class = '';
                        
                        if (order.status === 'on-the-way') {
                            step1Class = 'completed';
                            step2Class = 'active';
                        } else if (order.status === 'delivered') {
                            step1Class = 'completed';
                            step2Class = 'completed';
                            step3Class = 'completed';
                            step4Class = 'active';
                        }
                        
                        // Add order items with images
                        let orderItemsHTML = '';
                        order.items.forEach(item => {
                            orderItemsHTML += `
                                <div class="d-flex align-items-center mb-2">
                                    <img src="${item.image}" alt="${item.name}" style="width: 40px; height: 40px; object-fit: cover; margin-right: 10px;">
                                    <div>
                                        <div>${item.name}</div>
                                        <small class="text-muted">${item.quantity}x ₱${item.price.toFixed(2)}</small>
                                    </div>
                                </div>
                            `;
                        });
                        
                        trackingHTML += `
                            <div class="order-details mb-4">
                                <h5>Order #${order.id}</h5>
                                <p class="mb-1"><strong>Date:</strong> ${order.date}</p>
                                <p class="mb-1"><strong>Total:</strong> ₱${order.total.toFixed(2)}</p>
                                <p><strong>Status:</strong> ${getStatusText(order.status)}</p>
                                
                                <div class="order-items mb-3">
                                    <h6>Items:</h6>
                                    ${orderItemsHTML}
                                </div>
                                
                                <div class="order-status">
                                    <div class="order-steps">
                                        <div class="step ${step1Class}">
                                            <div class="step-icon"><i class="fas fa-utensils"></i></div>
                                            <div class="step-label">Preparing</div>
                                        </div>
                                        <div class="step ${step2Class}">
                                            <div class="step-icon"><i class="fas fa-motorcycle"></i></div>
                                            <div class="step-label">On the way</div>
                                        </div>
                                        <div class="step ${step3Class}">
                                            <div class="step-icon"><i class="fas fa-home"></i></div>
                                            <div class="step-label">Delivered</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="order-delivery-info">
                                    <p><strong>Delivery to:</strong> ${order.deliveryAddress}</p>
                                    <p><strong>Payment method:</strong> ${getPaymentMethodName(order.paymentMethod)}</p>
                                </div>
                            </div>
                        `;
                    });
                    
                    orderTracking.innerHTML = trackingHTML;
                }
            }

            // Get payment method name
            function getPaymentMethodName(method) {
                switch (method) {
                    case 'cash': return 'Cash on Delivery';
                    case 'gcash': return 'GCash';
                    case 'paymaya': return 'PayMaya';
                    default: return method;
                }
            }

            // Get status text
            function getStatusText(status) {
                switch (status) {
                    case 'preparing': return 'Being prepared';
                    case 'on-the-way': return 'On the way';
                    case 'delivered': return 'Delivered';
                    default: return status;
                }
            }

            // Initialize the page
            function init() {
                renderProducts();
                filterProducts();
                updateCartBadge();
                updateOrderBadge();
                
                // Event listeners
                document.getElementById('checkoutBtn').addEventListener('click', checkout);
                
                // Cart modal show event
                document.getElementById('cartModal').addEventListener('show.bs.modal', function() {
                    renderCart();
                });
                
                // Track order modal show event
                document.getElementById('trackOrderModal').addEventListener('show.bs.modal', function() {
                    renderOrderTracking();
                });
            }

            // Start the application
            init();
        });
    </script>
</body>
</html>