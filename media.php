   <?php 
require_once('includes/header.php'); 
require_once('partials/topnav.php') 
?>
   <style>
        /* Media Page Specific Styles */
.page-header {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/media-header.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 50vh;
    min-height: 400px;
    position: relative;
    display: flex;
    align-items: center;
    color: white;
    margin-bottom: 40px;
}

.page-header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.page-header h1 {
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin-bottom: 20px;
}

.page-header .lead {
    font-size: 1.5rem;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

/* Gallery Section */
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    transition: all 0.3s ease;
    margin: 10px;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.gallery-item img {
    transition: transform 0.5s ease;
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: flex-end;
    padding: 15px;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-caption {
    color: white;
    transform: translateY(20px);
    transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-caption {
    transform: translateY(0);
}

.gallery-caption h6 {
    font-weight: 600;
    margin-bottom: 5px;
}

.gallery-caption small {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.8rem;
}

/* Video Section */
.video-card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.video-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.video-thumbnail {
    position: relative;
    overflow: hidden;
}

.video-thumbnail img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.video-card:hover .video-thumbnail img {
    transform: scale(1.05);
}

.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.9;
    transition: all 0.3s ease;
}

.play-button i {
    color: var(--primary-color);
    font-size: 1.5rem;
    margin-left: 5px;
}

.video-card:hover .play-button {
    background-color: rgba(255, 255, 255, 1);
    transform: translate(-50%, -50%) scale(1.1);
}

.video-card .card-body {
    padding: 1.25rem;
}

.video-card .card-title {
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
}

.video-card .card-text {
    margin-bottom: 1rem;
}

/* Lightbox Customization */
.lightbox .lb-image {
    border-radius: 5px;
}

.lb-data .lb-caption {
    font-size: 1rem;
    line-height: 1.4;
}

.lb-data .lb-number {
    color: var(--primary-color);
    font-weight: 500;
}

.lb-nav a.lb-prev,
.lb-nav a.lb-next {
    opacity: 1;
}

.lb-nav a.lb-prev:hover,
.lb-nav a.lb-next:hover {
    opacity: 0.8;
}

/* Filter Dropdown */
.dropdown-menu {
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 0.5rem 0;
}

.dropdown-item {
    padding: 0.5rem 1.5rem;
    transition: all 0.2s ease;
}

.dropdown-item:hover {
    background-color: rgba(13, 110, 253, 0.1);
    color: var(--primary-color);
}

.dropdown-divider {
    margin: 0.5rem 0;
}

/* Pagination */
.pagination .page-item .page-link {
    color: var(--primary-color);
    border: none;
    margin: 0 5px;
    border-radius: 50% !important;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.pagination .page-item.active .page-link {
    background-color: var(--primary-color);
    color: white;
}

.pagination .page-item .page-link:hover {
    background-color: rgba(13, 110, 253, 0.1);
}

.pagination .page-item.disabled .page-link {
    color: #6c757d;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .page-header {
        height: 40vh;
    }
    
    .gallery-item img {
        height: 200px;
    }
}

@media (max-width: 768px) {
    .page-header {
        height: 35vh;
    }
    
    .page-header h1 {
        font-size: 2.5rem;
    }
    
    .page-header .lead {
        font-size: 1.2rem;
    }
    
    .gallery-item img {
        height: 180px;
    }
    
    .video-thumbnail img {
        height: 180px;
    }
}

@media (max-width: 576px) {
    .page-header {
        height: 30vh;
        min-height: 300px;
    }
    
    .page-header h1 {
        font-size: 2rem;
    }
    
    .page-header .lead {
        font-size: 1rem;
    }
    
    .gallery-item img {
        height: 150px;
    }
    
    .video-thumbnail img {
        height: 150px;
    }
    
    .pagination .page-item .page-link {
        width: 35px;
        height: 35px;
        font-size: 0.9rem;
    }
}
    </style>

    <!-- Page Header -->
    <header class="page-header">
        <div class="page-header-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 animate__animated animate__fadeInDown">Media</h1>
                    <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Photos and videos from the league</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Media Content -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h2 class="animate__animated animate__fadeIn">Gallery</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="dropdown animate__animated animate__fadeIn">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown">
                            Filter by Team
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">All Teams</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Stanley FC</a></li>
                            <li><a class="dropdown-item" href="#">Dragons FC</a></li>
                            <li><a class="dropdown-item" href="#">United FC</a></li>
                            <li><a class="dropdown-item" href="#">Lions FC</a></li>
                            <li><a class="dropdown-item" href="#">Rangers FC</a></li>
                            <li><a class="dropdown-item" href="#">Wolves FC</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <!-- Photo 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item animate__animated animate__fadeIn">
                        <a href="https://i.pinimg.com/736x/6e/4a/d1/6e4ad167b3b796d8aaa8fe2bcc39ef63.jpg" data-lightbox="gallery" data-title="Stanley FC celebrating victory">
                            <img src="https://i.pinimg.com/736x/6e/4a/d1/6e4ad167b3b796d8aaa8fe2bcc39ef63.jpg" alt="Gallery Image" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <div class="gallery-caption">
                                    <h6>Stanley FC celebrating victory</h6>
                                    <small>Matchweek 4 - July 8, 2023</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item animate__animated animate__fadeIn animate__delay-1s">
                        <a href="https://i.pinimg.com/736x/22/c8/ca/22c8ca4cd0dfe9fae6e11336b9277069.jpg" data-lightbox="gallery" data-title="John Doe scoring his second goal">
                            <img src="https://i.pinimg.com/736x/22/c8/ca/22c8ca4cd0dfe9fae6e11336b9277069.jpg" alt="Gallery Image" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <div class="gallery-caption">
                                    <h6>John Doe scoring his second goal</h6>
                                    <small>Matchweek 4 - July 8, 2023</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item animate__animated animate__fadeIn animate__delay-2s">
                        <a href="https://i.pinimg.com/736x/57/83/02/578302e8ae77a9e93504298d2b61a281.jpg" data-lightbox="gallery" data-title="Dragons FC midfield action">
                            <img src="https://i.pinimg.com/736x/57/83/02/578302e8ae77a9e93504298d2b61a281.jpg" alt="Gallery Image" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <div class="gallery-caption">
                                    <h6>Dragons FC midfield action</h6>
                                    <small>Matchweek 4 - July 8, 2023</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item animate__animated animate__fadeIn animate__delay-3s">
                        <a href="https://i.pinimg.com/1200x/a6/45/63/a64563cfb5feda239afcb4b6549b8762.jpg" data-lightbox="gallery" data-title="United FC defensive wall">
                            <img src="https://i.pinimg.com/1200x/a6/45/63/a64563cfb5feda239afcb4b6549b8762.jpg" alt="Gallery Image" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <div class="gallery-caption">
                                    <h6>United FC defensive wall</h6>
                                    <small>Matchweek 4 - July 8, 2023</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item animate__animated animate__fadeIn">
                        <a href="https://i.pinimg.com/1200x/4b/7c/95/4b7c95865c17336717925990021dd121.jpg" data-lightbox="gallery" data-title="Lions FC goalkeeper save">
                            <img src="https://i.pinimg.com/1200x/4b/7c/95/4b7c95865c17336717925990021dd121.jpg" alt="Gallery Image" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <div class="gallery-caption">
                                    <h6>Lions FC goalkeeper save</h6>
                                    <small>Matchweek 3 - July 1, 2023</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item animate__animated animate__fadeIn animate__delay-1s">
                        <a href="https://i.pinimg.com/736x/e2/33/18/e233188566109723c2fa2b06ab6e9461.jpg" data-lightbox="gallery" data-title="Rangers FC free kick">
                            <img src="https://i.pinimg.com/736x/e2/33/18/e233188566109723c2fa2b06ab6e9461.jpg" alt="Gallery Image" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <div class="gallery-caption">
                                    <h6>Rangers FC free kick</h6>
                                    <small>Matchweek 3 - July 1, 2023</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item animate__animated animate__fadeIn animate__delay-2s">
                        <a href="https://i.pinimg.com/1200x/4e/b0/59/4eb05921de32f7147e491554dcff5125.jpg" data-lightbox="gallery" data-title="Wolves FC attacking move">
                            <img src="https://i.pinimg.com/1200x/4e/b0/59/4eb05921de32f7147e491554dcff5125.jpg" alt="Gallery Image" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <div class="gallery-caption">
                                    <h6>Wolves FC attacking move</h6>
                                    <small>Matchweek 3 - July 1, 2023</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item animate__animated animate__fadeIn animate__delay-3s">
                        <a href="https://i.pinimg.com/736x/6e/4a/d1/6e4ad167b3b796d8aaa8fe2bcc39ef63.jpg" data-lightbox="gallery" data-title="Tigers FC team huddle">
                            <img src="https://i.pinimg.com/736x/6e/4a/d1/6e4ad167b3b796d8aaa8fe2bcc39ef63.jpg" alt="Gallery Image" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <div class="gallery-caption">
                                    <h6>Tigers FC team huddle</h6>
                                    <small>Matchweek 2 - June 24, 2023</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Videos Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeIn">Latest Videos</h2>
            <div class="row g-4">
                <!-- Video 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card video-card h-100 animate__animated animate__fadeIn">
                        <div class="card-img-top video-thumbnail">
                            <img src="https://i.pinimg.com/736x/6e/4a/d1/6e4ad167b3b796d8aaa8fe2bcc39ef63.jpg" alt="Video Thumbnail" class="img-fluid">
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Stanley FC vs Rangers FC Highlights</h5>
                            <p class="card-text text-muted">Matchweek 4 - July 8, 2023</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">3:42</small>
                                <span class="badge bg-primary">Highlights</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card video-card h-100 animate__animated animate__fadeIn animate__delay-1s">
                        <div class="card-img-top video-thumbnail">
                            <img src="https://i.pinimg.com/1200x/4b/7c/95/4b7c95865c17336717925990021dd121.jpg" alt="Video Thumbnail" class="img-fluid">
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">John Doe: All Goals This Season</h5>
                            <p class="card-text text-muted">Season 8 - 8 Goals</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">4:15</small>
                                <span class="badge bg-success">Player Focus</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card video-card h-100 animate__animated animate__fadeIn animate__delay-2s">
                        <div class="card-img-top video-thumbnail">
                            <img src="https://i.pinimg.com/736x/26/6b/90/266b904daeac44dc1fb516cc03a5352d.jpg" alt="Video Thumbnail" class="img-fluid">
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Dragons FC vs United FC Highlights</h5>
                            <p class="card-text text-muted">Matchweek 4 - July 8, 2023</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">3:18</small>
                                <span class="badge bg-primary">Highlights</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">View All Videos</a>
            </div>
        </div>
    </section>

<?php 
require_once('includes/footer.php'); 
require_once('partials/bottomnav.php') 
?>
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

</body>
</html>