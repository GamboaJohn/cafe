<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Fog Café - Login/Register</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --cafe-dark: #2a1e12;
            --cafe-medium: #5d4037;
            --cafe-accent: #8d6e63;
            --cafe-light: #efebe9;
            --cafe-highlight: #d7ccc8;
        }
        
        body {
            font-family: 'Georgia', serif;
            color: var(--cafe-dark);
            background-color: var(--cafe-light);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .navbar {
            background-color: var(--cafe-dark) !important;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .navbar-brand, .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
        }
        
        .navbar-nav .nav-link:hover {
            color: var(--cafe-highlight) !important;
        }
        
        footer {
            background-color: var(--cafe-dark);
            color: white;
            padding: 70px 0 20px;
            margin-top: auto;
        }
        
        .social-icons i {
            font-size: 24px;
            margin-right: 15px;
            color: white;
            transition: transform 0.3s;
        }
        
        .social-icons i:hover {
            transform: translateY(-5px);
        }
        
        .btn-primary {
            background-color: var(--cafe-medium);
            border-color: var(--cafe-medium);
        }
        
        .btn-primary:hover {
            background-color: var(--cafe-accent);
            border-color: var(--cafe-accent);
        }
        
        .btn-outline-primary {
            color: var(--cafe-medium);
            border-color: var(--cafe-medium);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--cafe-medium);
            border-color: var(--cafe-medium);
        }
        
        .login-register-container {
            max-width: 500px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
        }
        
        .login-register-container:before {
            content: '';
            position: absolute;
            left: -20px;
            top: -20px;
            width: 100px;
            height: 100px;
            background-color: var(--cafe-medium);
            opacity: 0.1;
            border-radius: 50%;
            z-index: -1;
        }
        
        .login-register-container:after {
            content: '';
            position: absolute;
            right: -20px;
            bottom: -20px;
            width: 100px;
            height: 100px;
            background-color: var(--cafe-medium);
            opacity: 0.1;
            border-radius: 50%;
            z-index: -1;
        }
        
        .form-control:focus {
            border-color: var(--cafe-accent);
            box-shadow: 0 0 0 0.25rem rgba(141, 110, 99, 0.25);
        }
        
        .form-label {
            color: var(--cafe-dark);
            font-weight: 500;
        }
        
        .form-floating>label {
            color: var(--cafe-accent);
        }
        
        .nav-tabs .nav-link {
            color: var(--cafe-accent);
            font-weight: 500;
            border: none;
            padding: 15px 20px;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--cafe-dark);
            background-color: transparent;
            border-bottom: 3px solid var(--cafe-medium);
        }
        
        .nav-tabs {
            border-bottom: 1px solid var(--cafe-highlight);
        }
        
        .login-register-title {
            font-family: 'Playfair Display', serif;
            color: var(--cafe-dark);
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
        }
        
        .login-register-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            background-color: var(--cafe-medium);
        }
        
        .coffee-icon {
            color: var(--cafe-medium);
            margin-right: 10px;
        }
        
        .input-group-text {
            background-color: var(--cafe-light);
            border-color: #ced4da;
            color: var(--cafe-medium);
        }
        
        .forgot-password {
            color: var(--cafe-accent);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }
        
        .forgot-password:hover {
            color: var(--cafe-dark);
            text-decoration: underline;
        }
        
        .form-check-input:checked {
            background-color: var(--cafe-medium);
            border-color: var(--cafe-medium);
        }
        
        .coffee-texture {
            background-color: var(--cafe-highlight);
            background-image: url('images/hero.jpg');
            background-blend-mode: multiply;
            padding: 50px 0;
        }
        
        .alert {
            display: none;
            margin-bottom: 20px;
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login/Register Section -->
    <section class="py-5">
        <div class="container">
            <div class="login-register-container">
                <h2 class="login-register-title">Welcome to Black Fog Café</h2>
                
                <!-- Alerts -->
                <div class="alert alert-success" id="successAlert" role="alert">
                    <i class="fas fa-check-circle me-2"></i><span id="successMessage"></span>
                </div>
                
                <div class="alert alert-danger" id="errorAlert" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i><span id="errorMessage"></span>
                </div>
                
                <ul class="nav nav-tabs mb-4" id="authTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">
                            <i class="fas fa-sign-in-alt coffee-icon"></i>Login
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">
                            <i class="fas fa-user-plus coffee-icon"></i>Register
                        </button>
                    </li>
                </ul>
                
                <div class="tab-content" id="authTabContent">
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form id="loginForm">
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="loginEmail" placeholder="you@coffee" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
                                </div>
                            </div>
                            
                           
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 py-2 mb-3">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </button>
                            
                            <div class="text-center">
                                <p class="mb-0">Don't have an account? <a href="#" class="forgot-password" id="showRegisterTab">Create one</a></p>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Register Form - Simplified to just email and password -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form id="registerForm">
                            <div class="mb-3">
                                <label for="registerEmail" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="registerEmail" placeholder="you@coffee" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="registerPassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="registerPassword" placeholder="Create a password" required>
                                </div>
                                <div class="form-text">Password must be at least 8 characters with letters, numbers and symbols</div>
                            </div>
                            
                            <div class="mb-4 form-check">
                                <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
                                <label class="form-check-label" for="termsCheck">
                                    I agree to the <a href="#" class="forgot-password">Terms of Service</a> and <a href="#" class="forgot-password">Privacy Policy</a>
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 py-2 mb-3">
                                <i class="fas fa-user-plus me-2"></i>Create Account
                            </button>
                            
                            <div class="text-center">
                                <p class="mb-0">Already have an account? <a href="#" class="forgot-password" id="showLoginTab">Sign in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coffee Quote -->
    <section class="py-4 bg-dark text-white text-center">
        <div class="container">
            <h3 class="fst-italic">"Life begins after coffee."</h3>
            <p class="mb-0">— Unknown</p>
        </div>
    </section>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle tab switching links
            document.getElementById('showRegisterTab').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('register-tab').click();
            });
            
            document.getElementById('showLoginTab').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('login-tab').click();
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
            
            // Helper functions for showing alerts
            function showAlert(type, message) {
                const alertElement = document.getElementById(type + 'Alert');
                const messageElement = document.getElementById(type + 'Message');
                
                messageElement.textContent = message;
                alertElement.style.display = 'block';
                
                // Auto hide after 5 seconds
                setTimeout(() => {
                    alertElement.style.display = 'none';
                }, 5000);
            }
            
            // Registration form submission
            document.getElementById('registerForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const email = document.getElementById('registerEmail').value;
                const password = document.getElementById('registerPassword').value;
                
                // Simple validation
                if (password.length < 8) {
                    showAlert('error', 'Password must be at least 8 characters long.');
                    return;
                }
                
                // Check if user already exists
                const users = JSON.parse(localStorage.getItem('cafeUsers') || '[]');
                const userExists = users.some(user => user.email === email);
                
                if (userExists) {
                    showAlert('error', 'An account with this email already exists.');
                    return;
                }
                
                // Add new user
                users.push({
                    email: email,
                    password: password  // In a real app, you should hash this password!
                });
                
                // Save to localStorage
                localStorage.setItem('cafeUsers', JSON.stringify(users));
                
                // Show success message
                showAlert('success', 'Account created successfully! Please login.');
                
                // Clear form and switch to login tab
                document.getElementById('registerForm').reset();
                document.getElementById('login-tab').click();
            });
            
            // Login form submission
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                const email = document.getElementById('loginEmail').value;
                const password = document.getElementById('loginPassword').value;
                const rememberMe = document.getElementById('rememberMe').checked;
                
                // Get users from localStorage
                const users = JSON.parse(localStorage.getItem('cafeUsers') || '[]');
                
                // Check if credentials match
                const user = users.find(user => user.email === email && user.password === password);
                
                if (user) {
                    // Store login status if remember me is checked
                    if (rememberMe) {
                        localStorage.setItem('cafeLoggedInUser', email);
                    } else {
                        sessionStorage.setItem('cafeLoggedInUser', email);
                    }
                    
                    // Show success message
                    showAlert('success', 'Login successful! Redirecting to shop...');
                    
                    // Redirect to shop.php after a short delay
                    setTimeout(() => {
                        window.location.href = 'shop.php';
                    }, 1500);
                } else {
                    showAlert('error', 'Invalid email or password. Please try again.');
                }
            });
            
            // Check if user is already logged in
            const loggedInUser = localStorage.getItem('cafeLoggedInUser') || sessionStorage.getItem('cafeLoggedInUser');
            if (loggedInUser) {
                // Redirect to shop.php immediately if user is already logged in
                window.location.href = 'shop.php';
            }
        });
    </script>
</body>
</html>