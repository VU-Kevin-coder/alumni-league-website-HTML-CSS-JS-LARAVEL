<?php 
require_once('includes/header.php'); 
require_once('partials/topnav.php') 
?>
<style>
    /* Blog Page Styling */
.page-header {
    position: relative;
    height: 60vh;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center;
    background-size: cover;
    display: flex;
    align-items: center;
    text-align: center;
    color: white;
    margin-bottom: 3rem;
}

.page-header h1 {
    font-size: 4rem;
    font-weight: 800;
    letter-spacing: -1px;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    margin-bottom: 1rem;
}

.page-header .lead {
    font-size: 1.5rem;
    font-weight: 300;
    opacity: 0.9;
}

/* Featured Post */
.featured {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 3rem;
}

.featured:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.featured .card-img-top {
    height: 350px;
    object-fit: cover;
    object-position: center;
}

.featured .card-body {
    padding: 2rem;
}

.featured .card-title {
    font-size: 2rem;
    font-weight: 700;
    margin: 1rem 0;
    line-height: 1.3;
}

.featured .card-text {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #555;
    margin-bottom: 1.5rem;
}

.featured .btn {
    padding: 0.75rem 2rem;
    font-weight: 600;
    border-radius: 50px;
}

/* Blog Post Cards */
.blog-post-card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.blog-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.blog-post-card .card-img-top {
    height: 200px;
    object-fit: cover;
    object-position: center;
}

.blog-post-card .card-body {
    padding: 1.5rem;
    flex: 1;
}

.blog-post-card .card-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0.75rem 0;
    line-height: 1.4;
}

.blog-post-card .card-text {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.blog-post-card .card-footer {
    background: transparent;
    border-top: none;
    padding: 0 1.5rem 1.5rem;
}

.blog-post-card .btn-sm {
    padding: 0.4rem 1.25rem;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 500;
}

/* Badges */
.badge {
    font-weight: 600;
    padding: 0.4rem 0.8rem;
    border-radius: 6px;
    font-size: 0.8rem;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

.bg-primary {
    background-color: #6366f1 !important;
}

.bg-success {
    background-color: #10b981 !important;
}

.bg-warning {
    background-color: #f59e0b !important;
    color: #1f2937 !important;
}

.bg-info {
    background-color: #3b82f6 !important;
}

.bg-secondary {
    background-color: #64748b !important;
}

/* Sidebar */
.card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 2rem;
}

.card-header {
    padding: 1.25rem 1.5rem;
    font-weight: 700;
    border-bottom: none;
}

.list-group-item {
    border: none;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    padding: 1rem 1.25rem;
    transition: all 0.2s ease;
}

.list-group-item:last-child {
    border-bottom: none;
}

.list-group-item:hover {
    background-color: #f8f9fa;
    transform: translateX(5px);
}

.list-group-item h6 {
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.list-group-item small {
    color: #6b7280;
}

.list-group-item .small {
    color: #6b7280;
    font-size: 0.85rem;
}

/* Pagination */
.pagination {
    margin-top: 3rem;
}

.page-item {
    margin: 0 0.25rem;
}

.page-link {
    border: none;
    color: #4b5563;
    font-weight: 600;
    border-radius: 8px !important;
    padding: 0.5rem 1rem;
    transition: all 0.2s ease;
}

.page-link:hover {
    background-color: #e5e7eb;
    color: #1f2937;
}

.page-item.active .page-link {
    background-color: #6366f1;
    border-color: #6366f1;
}

.page-item.disabled .page-link {
    color: #9ca3af;
    background-color: transparent;
}

/* Form Styles */
.form-control {
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    padding: 0.75rem 1rem;
    transition: all 0.2s ease;
}

.form-control:focus {
    border-color: #6366f1;
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
}

.btn-primary {
    background-color: #6366f1;
    border-color: #6366f1;
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.2s ease;
}

.btn-primary:hover {
    background-color: #4f46e5;
    border-color: #4f46e5;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
}

.btn-outline-primary {
    color: #6366f1;
    border-color: #6366f1;
    transition: all 0.2s ease;
}

.btn-outline-primary:hover {
    background-color: #6366f1;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .page-header {
        height: 50vh;
    }
    
    .page-header h1 {
        font-size: 3rem;
    }
    
    .page-header .lead {
        font-size: 1.25rem;
    }
    
    .featured .card-img-top {
        height: 300px;
    }
}

@media (max-width: 768px) {
    .page-header {
        height: 40vh;
    }
    
    .page-header h1 {
        font-size: 2.5rem;
    }
    
    .featured .card-img-top {
        height: 250px;
    }
    
    .featured .card-title {
        font-size: 1.75rem;
    }
}

@media (max-width: 576px) {
    .page-header {
        height: 35vh;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
    
    .page-header .lead {
        font-size: 1rem;
    }
    
    .featured .card-img-top {
        height: 200px;
    }
    
    .featured .card-title {
        font-size: 1.5rem;
    }
}
</style>
    <!-- Page Header -->
    <header class="page-header">
        <div class="page-header-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 animate__animated animate__fadeInDown">Blog</h1>
                    <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Latest news and updates</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Blog Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Featured Post -->
                    <div class="card featured mb-4 animate__animated animate__fadeIn">
                        <img src="https://i.pinimg.com/736x/f0/55/a0/f055a097737aff6d68f695694cd4549b.jpg" class="card-img-top" alt="Featured Post">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-primary">Featured</span>
                                <small class="text-muted">Posted 2 days ago</small>
                            </div>
                            <h2 class="card-title">Stanley FC Extends Lead at the Top</h2>
                            <p class="card-text">Stanley FC secured a crucial 2-1 victory against Rangers FC to extend their lead at the top of the BubzLeague table. John Doe scored both goals for Stanley, taking his season tally to 8 goals in 5 matches...</p>
                            <a href="blog/stanley-extends-lead.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                    <!-- Blog Posts -->
                    <div class="row g-4">
                        <!-- Post 1 -->
                        <div class="col-md-6">
                            <div class="card h-100 blog-post-card animate__animated animate__fadeIn">
                                <img src="https://i.pinimg.com/736x/f0/55/a0/f055a097737aff6d68f695694cd4549b.jpg" class="card-img-top" alt="Blog Post">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-success">Player Focus</span>
                                        <small class="text-muted">5 days ago</small>
                                    </div>
                                    <h5 class="card-title">John Doe: The Goal Machine</h5>
                                    <p class="card-text">With 8 goals in 5 matches, John Doe is proving to be the most lethal striker in the league this season.</p>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <a href="blog/john-doe-goal-machine.html" class="btn btn-sm btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Post 2 -->
                        <div class="col-md-6">
                            <div class="card h-100 blog-post-card animate__animated animate__fadeIn animate__delay-1s">
                                <img src="https://i.pinimg.com/736x/f0/55/a0/f055a097737aff6d68f695694cd4549b.jpg" class="card-img-top" alt="Blog Post">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-warning text-dark">Announcement</span>
                                        <small class="text-muted">1 week ago</small>
                                    </div>
                                    <h5 class="card-title">League Expansion Plans for Next Season</h5>
                                    <p class="card-text">The BubzLeague committee has announced plans to expand the league to 10 teams for the next season.</p>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <a href="blog/league-expansion.html" class="btn btn-sm btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Post 3 -->
                        <div class="col-md-6">
                            <div class="card h-100 blog-post-card animate__animated animate__fadeIn animate__delay-2s">
                                <img src="https://i.pinimg.com/736x/f0/55/a0/f055a097737aff6d68f695694cd4549b.jpg" class="card-img-top" alt="Blog Post">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-info">Match Analysis</span>
                                        <small class="text-muted">2 weeks ago</small>
                                    </div>
                                    <h5 class="card-title">Dragons FC vs United FC: Tactical Breakdown</h5>
                                    <p class="card-text">A deep dive into the tactical battle that saw Dragons FC maintain their unbeaten run.</p>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <a href="blog/dragons-united-analysis.html" class="btn btn-sm btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Post 4 -->
                        <div class="col-md-6">
                            <div class="card h-100 blog-post-card animate__animated animate__fadeIn animate__delay-3s">
                                <img src="https://i.pinimg.com/736x/f0/55/a0/f055a097737aff6d68f695694cd4549b.jpg" class="card-img-top" alt="Blog Post">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-secondary">History</span>
                                        <small class="text-muted">3 weeks ago</small>
                                    </div>
                                    <h5 class="card-title">The Origins of BubzLeague</h5>
                                    <p class="card-text">How a group of alumni friends turned their weekend kickabouts into a competitive league.</p>
                                </div>
                                <div class="card-footer bg-transparent">
                                    <a href="blog/league-origins.html" class="btn btn-sm btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="card mb-4 animate__animated animate__fadeIn">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Categories</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    Match Reports
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    Player Focus
                                    <span class="badge bg-primary rounded-pill">8</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    Match Analysis
                                    <span class="badge bg-primary rounded-pill">5</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    Announcements
                                    <span class="badge bg-primary rounded-pill">12</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    League History
                                    <span class="badge bg-primary rounded-pill">7</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4 animate__animated animate__fadeIn animate__delay-1s">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Popular Posts</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <a href="blog/stanley-extends-lead.html" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Stanley FC Extends Lead</h6>
                                        <small>2 days ago</small>
                                    </div>
                                    <p class="mb-1 small">Stanley's impressive run continues</p>
                                </a>
                                <a href="blog/john-doe-goal-machine.html" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">John Doe: The Goal Machine</h6>
                                        <small>5 days ago</small>
                                    </div>
                                    <p class="mb-1 small">Stanley's star striker on fire</p>
                                </a>
                                <a href="blog/league-expansion.html" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">League Expansion Plans</h6>
                                        <small>1 week ago</small>
                                    </div>
                                    <p class="mb-1 small">League to expand to 10 teams</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card animate__animated animate__fadeIn animate__delay-2s">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Subscribe</h5>
                        </div>
                        <div class="card-body">
                            <p>Get the latest posts delivered to your inbox</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
require_once('includes/footer.php'); 
require_once('partials/bottomnav.php') 
?>
</body>
</html>