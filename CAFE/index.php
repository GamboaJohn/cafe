<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Fog Café</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
     <!-- Style-->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fas fa-mug-hot me-2"></i>
                Black Fog Café
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="fas fa-book-open me-1"></i> Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu"><i class="fas fa-utensils me-1"></i> Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews"><i class="fas fa-star me-1"></i> Reviews</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="login.php" class="btn btn-outline-light">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">BLACK FOG CAFÉ</h1>
            <p class="lead mb-5">Where every coffee tells a story and every moment creates a memory</p>
            <button class="btn btn-primary btn-lg me-3"><i class="fas fa-coffee me-2"></i>Take a sip. Relax, repeat.</button>
            <button class="btn btn-outline-light btn-lg"><i class="far fa-calendar-alt me-2"></i>It's always coffee time</button>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-4 section-title">Our Story</h2>
                    <p class="lead">Founded in 2025, Black Fog Café began as a passion project with a vision to create something extraordinary.</p>
                    <p> envisioned a café that would serve as more than just a place for coffee—but a sanctuary where the aroma of freshly ground beans mingles with the warmth of conversation and community.</p>
                    <p>The name "Black Fog" represents our signature dark roast that creates a mesmerizing aromatic "fog" when brewed, enveloping our café in a comforting embrace that customers have come to love.</p>
                    <p>We source our beans ethically from small farms around the world, ensuring that each cup not only tastes exceptional but also supports sustainable farming practices and fair trade.</p>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-wrapper">
                        <img src="image/about.png" alt="Our Story Image" class="img-fluid rounded" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="section-padding coffee-texture" style="height: 100vh;);">
        <div class="container" style="padding: 30px 0;">
            
        <h3 class="text-center menu-category-title">Signature Brews</h3>
        <p class="text-center mb-4">Discover our expertly crafted coffee creations, each brewed to perfection.</p>
            <ul class="nav nav-pills justify-content-center mb-5" id="menuTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="coffee-tab" data-bs-toggle="pill" data-bs-target="#coffee" type="button">
                        <i class="fas fa-mug-hot me-2"></i>Coffee
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pastries-tab" data-bs-toggle="pill" data-bs-target="#pastries" type="button">
                        <i class="fas fa-bread-slice me-2"></i>Pastries
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="breakfast-tab" data-bs-toggle="pill" data-bs-target="#breakfast" type="button">
                        <i class="fas fa-egg me-2"></i>Breakfast
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="lunch-tab" data-bs-toggle="pill" data-bs-target="#lunch" type="button">
                        <i class="fas fa-hamburger me-2"></i>Lunch
                    </button>
                </li>
            </ul>
            
            <div class="tab-content" id="menuTabContent">
                <!-- Coffee Menu -->
                <div class="tab-pane fade show active" id="coffee" role="tabpanel">
         
                    <div class="row">
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                            <img src="menu/coffee1.jpg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Black Fog Signature</h5>
                                    <p class="card-text">Our namesake dark roast with notes of chocolate, caramel and a subtle smoky finish.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="fw-bold mb-0">₱100</p>
                                        <span class="badge bg-dark">House Special</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                                <img src="menu/Velvet Cloud Cappuccino.jpg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Velvet Cloud Cappuccino</h5>
                                    <p class="card-text">Perfect harmony of espresso and silky microfoam milk, dusted with cocoa.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="fw-bold mb-0">₱120</p>
                                        <span class="badge bg-danger">Popular</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                            <img src="menu/coffee2.jpg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Midnight Mocha</h5>
                                    <p class="card-text">Espresso and steamed milk with our house-made dark chocolate ganache and whipped cream.</p>
                                    <p class="fw-bold">₱130</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pastries Menu -->
                <div class="tab-pane fade" id="pastries" role="tabpanel">
                    <h3 class="text-center menu-category-title">Fresh Baked Delights</h3>
                    <div class="row">
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                                <img src="menu/past1.jpg" class="card-img-top" alt="Almond Croissant" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Almond Croissant</h5>
                                    <p class="card-text">Buttery layers filled with almond cream and topped with sliced almonds.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="fw-bold mb-0">₱110</p>
                                        <span class="badge bg-danger">Best Seller</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                            <img src="menu/past2.jpg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Dark Chocolate Cinnamon Roll</h5>
                                    <p class="card-text">Soft swirls with cinnamon, dark chocolate chips and cream cheese frosting.</p>
                                    <p class="fw-bold">₱100</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                            <img src="menu/past3.jpg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Mixed Berry Scone</h5>
                                    <p class="card-text">Buttery scone packed with seasonal berries and finished with a light vanilla glaze.</p>
                                    <p class="fw-bold">₱105</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Breakfast Menu -->
                <div class="tab-pane fade" id="breakfast" role="tabpanel">
                    <h3 class="text-center menu-category-title">Morning Favorites</h3>
                    <div class="row">
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                                <img src="menu/break1.jpg" class="card-img-top" alt="Truffle Mushroom Toast" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Truffle Mushroom Toast</h5>
                                    <p class="card-text">Sourdough bread topped with creamy mushrooms, poached egg and truffle oil.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="fw-bold mb-0">₱110</p>
                                        <span class="badge bg-success">New</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                            <img src="menu/break2.jpeg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Smoky Breakfast Burrito</h5>
                                    <p class="card-text">Free-range scrambled eggs, black beans, avocado and chipotle sauce in a warm tortilla.</p>
                                    <p class="fw-bold">₱190</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                            <img src="menu/break3.jpg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Açaí Power Bowl</h5>
                                    <p class="card-text">Blended açaí topped with house granola, fresh berries, banana and honey drizzle.</p>
                                    <p class="fw-bold">₱90</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Lunch Menu -->
                <div class="tab-pane fade" id="lunch" role="tabpanel">
                    <h3 class="text-center menu-category-title">Midday Selections</h3>
                    <div class="row">
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                            <img src="menu/lunch1.jpg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Prosciutto Fig Panini</h5>
                                    <p class="card-text">Crusty ciabatta with prosciutto, fig jam, goat cheese and arugula.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="fw-bold mb-0">₱100</p>
                                        <span class="badge bg-dark">Chef's Choice</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                            <img src="menu/lunch2.jpg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Ancient Grain Bowl</h5>
                                    <p class="card-text">Farro and quinoa with roasted seasonal vegetables, avocado and tahini dressing.</p>
                                    <p class="fw-bold">₱159</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 menu-item">
                            <div class="card h-100">
                            <img src="menu/lunch3.jpg" class="card-img-top" alt="Velvet Cloud Cappuccino" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Roasted Tomato Bisque</h5>
                                    <p class="card-text">Slow-roasted tomatoes blended with herbs, cream and served with a gouda cheese dipper.</p>
                                    <p class="fw-bold">₱100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- <div class="text-center mb-1">
                <a href="login.php" class="btn btn-primary btn-lg rounded-pill shadow"><i class="fas fa-book-open me-2"></i>Explore Full Menu</a>
            </div> -->
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold section-title">Customer Stories</h2>
                <p class="lead">The Black Fog experience through the eyes of our community</p>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="review-card h-100">
                        <div class="d-flex mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="fst-italic mb-3">"The atmosphere at Black Fog Café is genuinely magical. Soft jazz playing in the background, the intoxicating aroma of freshly roasted beans, and that signature dark roast - unmatched anywhere else in the city."</p>
                        <div class="d-flex align-items-center">
                            <img src="/api/placeholder/50/50" class="rounded-circle me-3" alt="Customer">
                            <div>
                                <h6 class="mb-0">Maris Racal</h6>
                                <small class="text-muted">Daily Visitor · 3 years</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="review-card h-100">
                        <div class="d-flex mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="fst-italic mb-3">"As a coffee enthusiast who's traveled the world sampling different brews, I can confidently say that Black Fog's signature blend is among the finest I've ever tasted. The prosciutto fig panini is worth every penny too!"</p>
                        <div class="d-flex align-items-center">
                            <img src="/api/placeholder/50/50" class="rounded-circle me-3" alt="Customer">
                            <div>
                                <h6 class="mb-0">Jhostine</h6>
                                <small class="text-muted">Coffee Blogger · @BeanAdventures</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="review-card h-100">
                        <div class="d-flex mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="fst-italic mb-3">"I've been writing my novel at Black Fog Café for months now. The staff knows exactly how I like my coffee and always checks if I need a refill. It's become my second home and creative sanctuary."</p>
                        <div class="d-flex align-items-center">
                            <img src="/api/placeholder/50/50" class="rounded-circle me-3" alt="Customer">
                            <div>
                                <h6 class="mb-0">Esynr</h6>
                                <small class="text-muted">Author · Regular Customer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>
    </section>

    <!-- Coffee Quote -->
    <section class="py-5 bg-dark text-white text-center">
        <div class="container">
            <h3 class="fst-italic">"Life begins after coffee."</h3>
            <p class="mb-0"></p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="mb-3">Black Fog Café</h5>
                    <p>Creating extraordinary coffee moments and fostering community connections since 2010.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#about" class="text-white text-decoration-none">Our Story</a></li>
                        <li class="mb-2"><a href="#menu" class="text-white text-decoration-none">Menu</a></li>
                        <li class="mb-2"><a href="#reviews" class="text-white text-decoration-none">Reviews</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5 class="mb-3">Hours</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">Monday - Friday: 6:30am - 8:00pm</li>
                        <li class="mb-2">Saturday: 7:00am - 9:00pm</li>
                        <li class="mb-2">Sunday: 8:00am - 7:00pm</li>
                    </ul>
                </div>
                
                <div class="col-md-3">
                    <h5 class="mb-3">Contact</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>123 Coffee Lane, Seattle, WA</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i>(555) 123-4567</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i>hello@blackfogcafe.com</li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4 bg-secondary">
            
            <!-- <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0">&copy; 2025 Black Fog Café. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small mb-0">
                        <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-white text-decoration-none">Terms of Service</a>
                    </p>
                </div>
            </div> -->
        </div>
    </footer>

  


    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
    
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
            
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // Add shadow to navbar when scrolling
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('shadow-lg');
                } else {
                    navbar.classList.remove('shadow-lg');
                }
            });
        });
        
        // Fix for the button contains selector
        HTMLElement.prototype.contains = function(text) {
            return this.textContent.includes(text);
        };
    </script>
</body>
</html>