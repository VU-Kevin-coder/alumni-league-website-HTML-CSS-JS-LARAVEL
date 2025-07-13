<?php 
require_once('includes/header.php'); 
require_once('partials/topnav.php') 
?>

    <!-- Login Content -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow animate__animated animate__fadeIn">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <img src="assets/images/bubzleague.png" alt="BubzLeague" height="60" class="mb-3">
                                <h2>Login to Your Account</h2>
                                <p class="text-muted">Access your player profile, team management, and more</p>
                            </div>
                            
                            <form id="loginForm">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                            
                            <div class="text-center mt-3">
                                <a href="#" class="text-decoration-none">Forgot password?</a>
                            </div>
                            
                            <hr class="my-4">
                            
                            <div class="text-center">
                                <p class="mb-0">Don't have an account? <a href="register.html" class="text-decoration-none">Register here</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-3 animate__animated animate__fadeIn animate__delay-1s">
                        <p class="text-muted">Are you an admin? <a href="admin/login.php" class="text-decoration-none">Login to admin panel</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 
require_once('includes/footer.php'); 
require_once('partials/bottomnav.php') 
?>
    <script>
        // Handle login form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // In a real application, you would validate and send the data to the server
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Simple validation
            if (email && password) {
                alert('Login successful! Redirecting to your dashboard...');
                // In a real application, you would redirect after successful login
                // window.location.href = 'dashboard.html';
            } else {
                alert('Please enter both email and password.');
            }
        });
    </script>
</body>
</html>