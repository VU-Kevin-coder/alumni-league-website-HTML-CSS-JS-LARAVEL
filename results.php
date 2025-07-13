<?php 
require_once('includes/header.php'); 
require_once('partials/topnav.php') 
?>
<style>

    /* Page Header */
    .page-header {
        position: relative;
        height: 300px;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/header-bg.jpg') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        margin-bottom: 30px;
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
    }

    .page-header p {
        font-weight: 300;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    /* Results Section */
    .matchweek-header {
        padding: 10px 15px;
        background-color: #f1f1f1;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .matchweek-header h4 {
        font-weight: 600;
        margin: 0;
    }

    .result-item {
        background-color: white;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .result-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .match-row {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 10px;
    }

    .team-info {
        display: flex;
        align-items: center;
        min-width: 120px;
        flex: 1;
    }

    .team-info.home {
        justify-content: flex-end;
        text-align: right;
    }

    .team-info.away {
        justify-content: flex-start;
        text-align: left;
    }

    .team-name {
        font-weight: 600;
        margin: 0 8px;
        white-space: nowrap;
        font-size: 0.9rem;
    }

    .team-logo img {
        max-height: 30px;
        width: auto;
    }

    .score-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-width: 80px;
        padding: 0 10px;
    }

    .match-score {
        margin-bottom: 2px;
    }

    .match-status {
        font-size: 0.7rem;
        color: #6c757d;
    }

    .match-date {
        font-size: 0.8rem;
        color: #6c757d;
        white-space: nowrap;
    }

    .match-actions {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    /* Statistics Section */
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-header {
        border-radius: 10px 10px 0 0 !important;
    }

    .table th {
        border-top: none;
        font-weight: 600;
    }

    .table td {
        vertical-align: middle;
    }

 
    /* Responsive Adjustments */
    @media (max-width: 576px) {
        .team-name {
            font-size: 0.8rem;
            margin: 0 5px;
        }
        
        .team-logo img {
            max-height: 25px;
        }
        
        .score-info {
            min-width: 70px;
            padding: 0 5px;
        }
        
        .match-score .badge {
            font-size: 0.9rem !important;
        }
        
        .match-date {
            font-size: 0.7rem;
        }
        
        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
    }

    /* Animation Delays */
    .animate__delay-1s {
        animation-delay: 0.5s;
    }

    .animate__delay-2s {
        animation-delay: 1s;
    }

    .animate__delay-3s {
        animation-delay: 1.5s;
    }

    .animate__delay-4s {
        animation-delay: 2s;
    }

    .animate__delay-5s {
        animation-delay: 2.5s;
    }

    /* Custom Button Styles */
    .btn-outline-primary {
        border-width: 2px;
        font-weight: 500;
    }

    .btn-outline-primary:hover {
        color: white;
    }

    /* Hover effects for table rows */
    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.05);
    }
</style>

<!-- Page Header -->
<header class="page-header">
    <div class="page-header-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center text-white">
                <h1 class="display-3 animate__animated animate__fadeInDown">Match Results</h1>
                <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Latest scores and statistics</p>
            </div>
        </div>
    </div>
</header>

<!-- Results Content -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="animate__animated animate__fadeIn">Season 8 Results</h2>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="dropdown animate__animated animate__fadeIn">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown">
                        Filter by Matchweek
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">All Matchweeks</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Matchweek 1</a></li>
                        <li><a class="dropdown-item" href="#">Matchweek 2</a></li>
                        <li><a class="dropdown-item" href="#">Matchweek 3</a></li>
                        <li><a class="dropdown-item" href="#">Matchweek 4</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="results-list">
            <!-- Matchweek 4 -->
            <div class="matchweek-header animate__animated animate__fadeIn">
                <h4 class="d-flex align-items-center">
                    <span class="badge bg-primary me-3">Matchweek 4</span>
                    <span>July 8 - July 9, 2023</span>
                </h4>
            </div>
            
            <div class="result-item animate__animated animate__fadeIn">
                <div class="match-row">
                    <div class="team-info home">
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/49/cd/84/49cd84918a7233a5e8cf5ca616074120.jpg" alt="Stanley FC" class="img-fluid">
                        </div>
                        <div class="team-name">Stanley FC</div>
                    </div>
                    
                    <div class="score-info">
                        <div class="match-score">
                            <span class="badge bg-success fs-6">2 - 1</span>
                        </div>
                        <div class="match-status">FT</div>
                        <div class="match-date">Sat, Jul 8</div>
                    </div>
                    
                    <div class="team-info away">
                        <div class="team-name">Rangers FC</div>
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/92/e0/28/92e028a1252516e9be7bc87421e79514.jpg" alt="Rangers FC" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Match Report</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Highlights</a>
                </div>
            </div>
            
            <div class="result-item animate__animated animate__fadeIn animate__delay-1s">
                <div class="match-row">
                    <div class="team-info home">
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/49/cd/84/49cd84918a7233a5e8cf5ca616074120.jpg" alt="Dragons FC" class="img-fluid">
                        </div>
                        <div class="team-name">Dragons FC</div>
                    </div>
                    
                    <div class="score-info">
                        <div class="match-score">
                            <span class="badge bg-success fs-6">3 - 0</span>
                        </div>
                        <div class="match-status">FT</div>
                        <div class="match-date">Sat, Jul 8</div>
                    </div>
                    
                    <div class="team-info away">
                        <div class="team-name">United FC</div>
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/1200x/35/ad/0e/35ad0e12224d59eae1abb02c2da9e383.jpg" alt="United FC" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Match Report</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Highlights</a>
                </div>
            </div>
            
            <!-- Matchweek 3 -->
            <div class="matchweek-header mt-5 animate__animated animate__fadeIn animate__delay-2s">
                <h4 class="d-flex align-items-center">
                    <span class="badge bg-primary me-3">Matchweek 3</span>
                    <span>July 1 - July 2, 2023</span>
                </h4>
            </div>
            
            <div class="result-item animate__animated animate__fadeIn animate__delay-2s">
                <div class="match-row">
                    <div class="team-info home">
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/49/cd/84/49cd84918a7233a5e8cf5ca616074120.jpg" alt="Wolves FC" class="img-fluid">
                        </div>
                        <div class="team-name">Wolves FC</div>
                    </div>
                    
                    <div class="score-info">
                        <div class="match-score">
                            <span class="badge bg-success fs-6">1 - 3</span>
                        </div>
                        <div class="match-status">FT</div>
                        <div class="match-date">Sat, Jul 1</div>
                    </div>
                    
                    <div class="team-info away">
                        <div class="team-name">Lions FC</div>
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/05/28/14/0528145e8b3cf6e5a232dfb0e4b8446a.jpg" alt="Lions FC" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Match Report</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Highlights</a>
                </div>
            </div>
            
            <div class="result-item animate__animated animate__fadeIn animate__delay-3s">
                <div class="match-row">
                    <div class="team-info home">
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/49/cd/84/49cd84918a7233a5e8cf5ca616074120.jpg" alt="Tigers FC" class="img-fluid">
                        </div>
                        <div class="team-name">Tigers FC</div>
                    </div>
                    
                    <div class="score-info">
                        <div class="match-score">
                            <span class="badge bg-success fs-6">0 - 2</span>
                        </div>
                        <div class="match-status">FT</div>
                        <div class="match-date">Sun, Jul 2</div>
                    </div>
                    
                    <div class="team-info away">
                        <div class="team-name">Stanley FC</div>
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/13/e1/e5/13e1e5ee88fe474b7027355263ba0c6d.jpg" alt="Stanley FC" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Match Report</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Highlights</a>
                </div>
            </div>
            
            <!-- Matchweek 2 -->
            <div class="matchweek-header mt-5 animate__animated animate__fadeIn animate__delay-4s">
                <h4 class="d-flex align-items-center">
                    <span class="badge bg-primary me-3">Matchweek 2</span>
                    <span>June 24 - June 25, 2023</span>
                </h4>
            </div>
            
            <div class="result-item animate__animated animate__fadeIn animate__delay-4s">
                <div class="match-row">
                    <div class="team-info home">
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/49/cd/84/49cd84918a7233a5e8cf5ca616074120.jpg" alt="United FC" class="img-fluid">
                        </div>
                        <div class="team-name">United FC</div>
                    </div>
                    
                    <div class="score-info">
                        <div class="match-score">
                            <span class="badge bg-success fs-6">2 - 1</span>
                        </div>
                        <div class="match-status">FT</div>
                        <div class="match-date">Sat, Jun 24</div>
                    </div>
                    
                    <div class="team-info away">
                        <div class="team-name">Wolves FC</div>
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/92/1d/1e/921d1e0d763d44b9e41e379095321720.jpg" alt="Wolves FC" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Match Report</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Highlights</a>
                </div>
            </div>
            
            <div class="result-item animate__animated animate__fadeIn animate__delay-5s">
                <div class="match-row">
                    <div class="team-info home">
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/49/cd/84/49cd84918a7233a5e8cf5ca616074120.jpg" alt="Rangers FC" class="img-fluid">
                        </div>
                        <div class="team-name">Rangers FC</div>
                    </div>
                    
                    <div class="score-info">
                        <div class="match-score">
                            <span class="badge bg-success fs-6">1 - 1</span>
                        </div>
                        <div class="match-status">FT</div>
                        <div class="match-date">Sun, Jun 25</div>
                    </div>
                    
                    <div class="team-info away">
                        <div class="team-name">Dragons FC</div>
                        <div class="team-logo">
                            <img src="https://i.pinimg.com/736x/c1/96/d4/c196d457404bde6559375113d30425b4.jpg" alt="Dragons FC" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary me-2">Match Report</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Highlights</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeIn">Season Statistics</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card animate__animated animate__fadeIn">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Top Scorers</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Player</th>
                                            <th>Team</th>
                                            <th>Goals</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>Stanley FC</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mike Smith</td>
                                            <td>Dragons FC</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>David Johnson</td>
                                            <td>United FC</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Robert Brown</td>
                                            <td>Lions FC</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>James Wilson</td>
                                            <td>Rangers FC</td>
                                            <td>3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card animate__animated animate__fadeIn animate__delay-1s">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Top Assists</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Player</th>
                                            <th>Team</th>
                                            <th>Assists</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>David Johnson</td>
                                            <td>United FC</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John Doe</td>
                                            <td>Stanley FC</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Steven Taylor</td>
                                            <td>Dragons FC</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Michael Brown</td>
                                            <td>Stanley FC</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Paul Wilson</td>
                                            <td>Stanley FC</td>
                                            <td>3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="players.php" class="btn btn-primary">View All Player Stats</a>
            </div>
        </div>
    </section>

<?php 
require_once('includes/footer.php'); 
require_once('partials/bottomnav.php') 
?>
</body>
</html>