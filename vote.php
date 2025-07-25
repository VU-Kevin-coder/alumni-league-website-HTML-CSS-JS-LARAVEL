<?php 
require_once('includes/header.php'); 
require_once('partials/topnav.php') 
?>
    <style>
/* Vote Page Specific Styles */
.page-header {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/vote-header.jpg');
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

/* Vote Cards */
.card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.card-header {
    padding: 1.25rem;
    font-weight: 600;
}

/* Player Vote Cards */
.player-vote-card {
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 8px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.player-vote-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    border-color: var(--primary-color);
}

.player-vote-card .form-check-input {
    width: 1.5em;
    height: 1.5em;
    margin-top: 0;
    cursor: pointer;
}

.player-vote-card .form-check-label {
    font-weight: 500;
    cursor: pointer;
}

.player-vote-card .card-title {
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
}

.player-vote-card .card-text {
    color: #555;
    margin-bottom: 0.25rem;
}

.player-vote-card .text-muted {
    font-size: 0.9rem;
}

/* Goal Vote Cards */
.video-thumbnail {
    position: relative;
    overflow: hidden;
    height: 200px;
}

.video-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.video-thumbnail:hover img {
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

.video-thumbnail:hover .play-button {
    background-color: rgba(255, 255, 255, 1);
    transform: translate(-50%, -50%) scale(1.1);
}

.goal-vote-btn {
    transition: all 0.3s ease;
}

.goal-vote-btn:hover {
    background-color: var(--primary-color);
    color: white;
}

/* Previous Winners Section */
.bg-light {
    background-color: #f9f9f9 !important;
}

.table-responsive {
    border-radius: 8px;
    overflow: hidden;
}

.table {
    margin-bottom: 0;
}

.table thead th {
    background-color: var(--primary-color);
    color: white;
    border-bottom: none;
    padding: 1rem;
}

.table tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.02);
}

.table tbody tr:hover {
    background-color: rgba(13, 110, 253, 0.05);
}

/* Submit Button */
.btn-primary {
    padding: 10px 30px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .page-header {
        height: 40vh;
    }
    
    .player-vote-card .col-md-3 {
        width: 30%;
    }
    
    .player-vote-card .col-md-7 {
        width: 50%;
    }
    
    .player-vote-card .col-md-2 {
        width: 20%;
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
    
    .player-vote-card {
        flex-direction: column;
    }
    
    .player-vote-card .row > div {
        width: 100% !important;
    }
    
    .player-vote-card .col-md-3 img {
        border-radius: 8px 8px 0 0 !important;
        width: 100%;
        height: 150px;
        object-fit: cover;
    }
    
    .player-vote-card .form-check {
        padding: 15px;
        text-align: center;
        background-color: #f8f9fa;
    }
    
    .video-thumbnail {
        height: 150px;
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
    
    .card-header h3 {
        font-size: 1.5rem;
    }
    
    .btn-primary {
        width: 100%;
    }
    
    .table th, .table td {
        padding: 0.75rem;
    }
}
    </style>
    <!-- Page Header -->
    <header class="page-header">
        <div class="page-header-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 animate__animated animate__fadeInDown">Vote</h1>
                    <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Have your say in the league</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Vote Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card mb-5 animate__animated animate__fadeIn">
                        <div class="card-header bg-primary text-white">
                            <h3 class="mb-0">Player of the Month - July</h3>
                        </div>
                        <div class="card-body">
                            <p class="lead">Cast your vote for the best performer in July</p>
                            <p>Voting ends on July 31, 2023 at 11:59 PM</p>
                            
                            <form id="playerVoteForm">
                                <!-- Player 1 -->
                                <div class="card mb-3 player-vote-card">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="https://i.pinimg.com/736x/e6/7b/b9/e67bb93b989a77e557eaa417db967489.jpg" class="img-fluid rounded-start" alt="Player">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">John Doe</h5>
                                                <p class="card-text">Stanley FC - Forward</p>
                                                <p class="card-text"><small class="text-muted">4 goals, 2 assists in July</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="playerVote" id="player1" value="John Doe">
                                                <label class="form-check-label" for="player1">
                                                    Vote
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Player 2 -->
                                <div class="card mb-3 player-vote-card">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="https://i.pinimg.com/736x/6b/02/7d/6b027d7d290f1005b1653c1a046e31f2.jpg" class="img-fluid rounded-start" alt="Player">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Mike Smith</h5>
                                                <p class="card-text">Dragons FC - Forward</p>
                                                <p class="card-text"><small class="text-muted">3 goals, 1 assist in July</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="playerVote" id="player2" value="Mike Smith">
                                                <label class="form-check-label" for="player2">
                                                    Vote
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Player 3 -->
                                <div class="card mb-3 player-vote-card">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="https://i.pinimg.com/736x/dd/f7/97/ddf797704899b01079ac17c4fb3e2738.jpg" class="img-fluid rounded-start" alt="Player">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">David Johnson</h5>
                                                <p class="card-text">United FC - Forward</p>
                                                <p class="card-text"><small class="text-muted">2 goals, 3 assists in July</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="playerVote" id="player3" value="David Johnson">
                                                <label class="form-check-label" for="player3">
                                                    Vote
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Player 4 -->
                                <div class="card mb-3 player-vote-card">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <img src="https://i.pinimg.com/736x/69/46/7f/69467f12e720dfc7a965ccaa2551c3c2.jpg" class="img-fluid rounded-start" alt="Player">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">Paul Wilson</h5>
                                                <p class="card-text">Stanley FC - Goalkeeper</p>
                                                <p class="card-text"><small class="text-muted">3 clean sheets in July</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="playerVote" id="player4" value="Paul Wilson">
                                                <label class="form-check-label" for="player4">
                                                    Vote
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit Vote</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="card animate__animated animate__fadeIn animate__delay-1s">
                        <div class="card-header bg-primary text-white">
                            <h3 class="mb-0">Goal of the Month - July</h3>
                        </div>
                        <div class="card-body">
                            <p class="lead">Vote for your favorite goal from July matches</p>
                            <p>Watch the goals below before voting</p>
                            
                            <div class="row g-3 mb-4">
                                <!-- Goal 1 -->
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-img-top video-thumbnail">
                                            <img src="https://i.pinimg.com/1200x/ea/d6/fc/ead6fc9f98f7dd1a74513dc0fefaf175.jpg" alt="Goal Video" class="img-fluid">
                                            <div class="play-button">
                                                <i class="fas fa-play"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">John Doe (Stanley FC)</h5>
                                            <p class="card-text">Volley from outside the box</p>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary goal-vote-btn" data-goal="1">Vote for this goal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Goal 2 -->
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-img-top video-thumbnail">
                                            <img src="https://i.pinimg.com/736x/b4/20/06/b420065de6a8a89293fb41181917c940.jpg" alt="Goal Video" class="img-fluid">
                                            <div class="play-button">
                                                <i class="fas fa-play"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Mike Smith (Dragons FC)</h5>
                                            <p class="card-text">Solo run and finish</p>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary goal-vote-btn" data-goal="2">Vote for this goal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Goal 3 -->
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-img-top video-thumbnail">
                                            <img src="https://i.pinimg.com/1200x/e6/2e/a0/e62ea09348dc182caf9804d7328af6d7.jpg" alt="Goal Video" class="img-fluid">
                                            <div class="play-button">
                                                <i class="fas fa-play"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">David Johnson (United FC)</h5>
                                            <p class="card-text">Free kick top corner</p>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary goal-vote-btn" data-goal="3">Vote for this goal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Goal 4 -->
                                <div class="col-md-6">
                                    <div class="card h-100">
                                        <div class="card-img-top video-thumbnail">
                                            <img src="https://i.pinimg.com/736x/9c/df/9e/9cdf9e95bcc000318d0eaaa2716a5220.jpg" alt="Goal Video" class="img-fluid">
                                            <div class="play-button">
                                                <i class="fas fa-play"></i>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Robert Brown (Lions FC)</h5>
                                            <p class="card-text">Team move and finish</p>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary goal-vote-btn" data-goal="4">Vote for this goal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Previous Winners -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeIn">Previous Winners</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card animate__animated animate__fadeIn">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Player of the Month</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Player</th>
                                            <th>Team</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>June 2023</td>
                                            <td>John Doe</td>
                                            <td>Stanley FC</td>
                                        </tr>
                                        <tr>
                                            <td>May 2023</td>
                                            <td>Mike Smith</td>
                                            <td>Dragons FC</td>
                                        </tr>
                                        <tr>
                                            <td>April 2023</td>
                                            <td>David Johnson</td>
                                            <td>United FC</td>
                                        </tr>
                                        <tr>
                                            <td>March 2023</td>
                                            <td>Paul Wilson</td>
                                            <td>Stanley FC</td>
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
                            <h5 class="mb-0">Goal of the Month</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Player</th>
                                            <th>Team</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>June 2023</td>
                                            <td>Mike Smith</td>
                                            <td>Dragons FC</td>
                                        </tr>
                                        <tr>
                                            <td>May 2023</td>
                                            <td>John Doe</td>
                                            <td>Stanley FC</td>
                                        </tr>
                                        <tr>
                                            <td>April 2023</td>
                                            <td>Robert Brown</td>
                                            <td>Lions FC</td>
                                        </tr>
                                        <tr>
                                            <td>March 2023</td>
                                            <td>David Johnson</td>
                                            <td>United FC</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <img src="assets/images/logo.png" alt="BubzLeague" height="40" class="mb-3">
                    <p>The BubzLeague is an alumni football league bringing together former students in competitive but friendly matches.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-4">League</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="fixtures.php" class="text-white">Fixtures</a></li>
                        <li class="mb-2"><a href="results.php" class="text-white">Results</a></li>
                        <li class="mb-2"><a href="teams.php" class="text-white">Teams</a></li>
                        <li class="mb-2"><a href="players.php" class="text-white">Players</a></li>
                        <li><a href="vote.php" class="text-white">Vote</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-4">About</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="about.php" class="text-white">About Us</a></li>
                        <li class="mb-2"><a href="blog.php" class="text-white">Blog</a></li>
                        <li class="mb-2"><a href="media.php" class="text-white">Media</a></li>
                        <li><a href="contact.php" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="mb-4">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-map-marker-alt me-2"></i> 123 Alumni Street, Football City</li>
                        <li class="mb-3"><i class="fas fa-phone me-2"></i> (123) 456-7890</li>
                        <li><i class="fas fa-envelope me-2"></i> info@bubzleague.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 BubzLeague. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed with <i class="fas fa-heart text-danger"></i> for football lovers</p>
                </div>
            </div>
        </div>
    </footer>

<?php 
require_once('includes/footer.php'); 
require_once('partials/bottomnav.php') 
?>
    <script>
        // Handle player vote form submission
        document.getElementById('playerVoteForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const selectedPlayer = document.querySelector('input[name="playerVote"]:checked');
            
            if (selectedPlayer) {
                alert(`Thank you for voting for ${selectedPlayer.value} as Player of the Month!`);
                // In a real application, you would send this data to the server
            } else {
                alert('Please select a player to vote for!');
            }
        });
        
        // Handle goal vote buttons
        document.querySelectorAll('.goal-vote-btn').forEach(button => {
            button.addEventListener('click', function() {
                const goalNumber = this.getAttribute('data-goal');
                const playerName = this.closest('.card-body').querySelector('.card-title').textContent;
                alert(`Thank you for voting for ${playerName}'s goal as Goal of the Month!`);
                // In a real application, you would send this data to the server
            });
        });
    </script>
</body>
</html>