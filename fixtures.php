<?php 
require_once('includes/header.php'); 
require_once('partials/topnav.php') 
?>
    <style>
        /* Fixtures Page Specific Styles */
.page-header {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/fixtures-header.jpg');
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

/* Fixtures List */
.fixtures-list {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.matchweek-header {
    background-color: #f8f9fa;
    padding: 1rem 1.5rem;
    border-bottom: 1px solid #e9ecef;
}

.matchweek-header h4 {
    margin: 0;
    font-size: 1.25rem;
    color: var(--dark-color);
}

.matchweek-header .badge {
    font-size: 0.9rem;
    padding: 0.5rem 0.75rem;
}

.fixture-item {
    padding: 1.5rem;
    border-bottom: 1px solid #e9ecef;
    transition: all 0.3s ease;
}

.fixture-item:last-child {
    border-bottom: none;
}

.fixture-item:hover {
    background-color: rgba(13, 110, 253, 0.05);
}

.team-name {
    font-weight: 600;
    font-size: 1.1rem;
    color: var(--dark-color);
}

.match-time {
    font-size: 0.95rem;
}

.match-time .date {
    font-weight: 600;
    color: var(--dark-color);
}

.match-time .time {
    font-weight: 600;
    color: var(--primary-color);
    margin: 0.25rem 0;
}

.match-time .stadium {
    color: #6c757d;
    font-size: 0.85rem;
}

.fixture-item .btn {
    margin: 0.25rem;
    padding: 0.375rem 0.75rem;
    font-size: 0.85rem;
    border-radius: 50px;
}

/* Calendar Section */
.bg-light {
    background-color: #f9f9f9 !important;
}

#leagueCalendar {
    min-height: 500px;
}

.fc {
    font-family: inherit;
}

.fc-header-toolbar {
    margin-bottom: 1rem !important;
}

.fc-toolbar-title {
    font-size: 1.25rem;
    font-weight: 600;
}

.fc-button {
    background-color: white !important;
    border: 1px solid #ced4da !important;
    color: #495057 !important;
    text-transform: capitalize !important;
    font-weight: 500 !important;
    transition: all 0.3s ease !important;
}

.fc-button:hover {
    background-color: #f8f9fa !important;
}

.fc-button-primary:not(:disabled).fc-button-active {
    background-color: var(--primary-color) !important;
    border-color: var(--primary-color) !important;
    color: white !important;
}

.fc-daygrid-event {
    padding: 0.25rem 0.5rem !important;
    border-radius: 4px !important;
    font-size: 0.85rem !important;
}

.fc-event-title {
    font-weight: 500 !important;
}

/* Filter Dropdown */
.dropdown-menu {
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 0.5rem 0;
}

.dropdown-item {
    padding: 0.5rem 1.5rem;
    transition: all 0.2s ease;
}

.dropdown-item:hover, .dropdown-item:focus {
    background-color: rgba(13, 110, 253, 0.1);
    color: var(--primary-color);
}

.dropdown-divider {
    margin: 0.5rem 0;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .page-header {
        height: 40vh;
    }
    
    .team-name {
        font-size: 1rem;
    }
    
    .match-time {
        font-size: 0.9rem;
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
    
    .fixture-item {
        padding: 1rem;
    }
    
    .team-name {
        text-align: center !important;
        margin-bottom: 0.5rem;
    }
    
    .match-time {
        margin-bottom: 0.5rem;
    }
    
    .fixture-item .btn {
        display: block;
        width: 100%;
        margin: 0.25rem 0;
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
    
    .matchweek-header h4 {
        flex-direction: column;
        align-items: flex-start !important;
    }
    
    .matchweek-header .badge {
        margin-bottom: 0.5rem;
        margin-right: 0 !important;
    }
    
    #leagueCalendar {
        min-height: 400px;
    }
    
    .fc-toolbar {
        flex-direction: column;
    }
    
    .fc-toolbar-title {
        margin: 0.5rem 0 !important;
    }
}
    /* Optional: Add some additional styling for better mobile display */
    @media (max-width: 767.98px) {
        .team-name {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .match-time {
            font-size: 0.9rem;
        }
        
        .fixture-item {
            padding: 10px 0;
        }
    }
    </style>

    <!-- Page Header -->
    <header class="page-header">
        <div class="page-header-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 animate__animated animate__fadeInDown">League Fixtures</h1>
                    <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Upcoming matches and schedule</p>
                </div>
            </div>
        </div>
    </header>

<!-- Fixtures Content -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="animate__animated animate__fadeIn">Season 8 Fixtures</h2>
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
                        <li><a class="dropdown-item" href="#">Matchweek 5</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="fixtures-list">
            <!-- Matchweek 5 -->
            <div class="matchweek-header animate__animated animate__fadeIn">
                <h4 class="d-flex align-items-center">
                    <span class="badge bg-primary me-3">Matchweek 5</span>
                    <span>July 15 - July 16, 2023</span>
                </h4>
            </div>
            
            <div class="fixture-item animate__animated animate__fadeIn">
                <div class="row align-items-center">
                    <div class="col-5 col-md-3 text-end">
                        <div class="team-name">Stanley FC</div>
                    </div>
                    <div class="col-2 col-md-2 text-center py-2">
                        <div class="match-time">
                            <div class="date d-none d-sm-block">Sat, Jul 15</div>
                            <div class="time">15:00</div>
                            <div class="stadium d-none d-sm-block">Alumni Stadium</div>
                        </div>
                    </div>
                    <div class="col-5 col-md-3 text-start">
                        <div class="team-name">Rangers FC</div>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-end pt-2 pt-md-0">
                        <a href="#" class="btn btn-sm btn-outline-primary">Preview</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Add to Calendar</a>
                    </div>
                </div>
            </div>
            
            <div class="fixture-item animate__animated animate__fadeIn animate__delay-1s">
                <div class="row align-items-center">
                    <div class="col-5 col-md-3 text-end">
                        <div class="team-name">Dragons FC</div>
                    </div>
                    <div class="col-2 col-md-2 text-center py-2">
                        <div class="match-time">
                            <div class="date d-none d-sm-block">Sat, Jul 15</div>
                            <div class="time">17:30</div>
                            <div class="stadium d-none d-sm-block">Alumni Stadium</div>
                        </div>
                    </div>
                    <div class="col-5 col-md-3 text-start">
                        <div class="team-name">United FC</div>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-end pt-2 pt-md-0">
                        <a href="#" class="btn btn-sm btn-outline-primary">Preview</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Add to Calendar</a>
                    </div>
                </div>
            </div>
            
            <!-- Matchweek 6 -->
            <div class="matchweek-header mt-5 animate__animated animate__fadeIn animate__delay-2s">
                <h4 class="d-flex align-items-center">
                    <span class="badge bg-primary me-3">Matchweek 6</span>
                    <span>July 22 - July 23, 2023</span>
                </h4>
            </div>
            
            <div class="fixture-item animate__animated animate__fadeIn animate__delay-2s">
                <div class="row align-items-center">
                    <div class="col-5 col-md-3 text-end">
                        <div class="team-name">Wolves FC</div>
                    </div>
                    <div class="col-2 col-md-2 text-center py-2">
                        <div class="match-time">
                            <div class="date d-none d-sm-block">Sat, Jul 22</div>
                            <div class="time">15:00</div>
                            <div class="stadium d-none d-sm-block">Alumni Stadium</div>
                        </div>
                    </div>
                    <div class="col-5 col-md-3 text-start">
                        <div class="team-name">Lions FC</div>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-end pt-2 pt-md-0">
                        <a href="#" class="btn btn-sm btn-outline-primary">Preview</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Add to Calendar</a>
                    </div>
                </div>
            </div>
            
            <div class="fixture-item animate__animated animate__fadeIn animate__delay-3s">
                <div class="row align-items-center">
                    <div class="col-5 col-md-3 text-end">
                        <div class="team-name">Tigers FC</div>
                    </div>
                    <div class="col-2 col-md-2 text-center py-2">
                        <div class="match-time">
                            <div class="date d-none d-sm-block">Sun, Jul 23</div>
                            <div class="time">14:00</div>
                            <div class="stadium d-none d-sm-block">Alumni Stadium</div>
                        </div>
                    </div>
                    <div class="col-5 col-md-3 text-start">
                        <div class="team-name">Stanley FC</div>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-end pt-2 pt-md-0">
                        <a href="#" class="btn btn-sm btn-outline-primary">Preview</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Add to Calendar</a>
                    </div>
                </div>
            </div>
            
            <!-- Matchweek 7 -->
            <div class="matchweek-header mt-5 animate__animated animate__fadeIn animate__delay-4s">
                <h4 class="d-flex align-items-center">
                    <span class="badge bg-primary me-3">Matchweek 7</span>
                    <span>July 29 - July 30, 2023</span>
                </h4>
            </div>
            
            <div class="fixture-item animate__animated animate__fadeIn animate__delay-4s">
                <div class="row align-items-center">
                    <div class="col-5 col-md-3 text-end">
                        <div class="team-name">United FC</div>
                    </div>
                    <div class="col-2 col-md-2 text-center py-2">
                        <div class="match-time">
                            <div class="date d-none d-sm-block">Sat, Jul 29</div>
                            <div class="time">15:00</div>
                            <div class="stadium d-none d-sm-block">Alumni Stadium</div>
                        </div>
                    </div>
                    <div class="col-5 col-md-3 text-start">
                        <div class="team-name">Wolves FC</div>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-end pt-2 pt-md-0">
                        <a href="#" class="btn btn-sm btn-outline-primary">Preview</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Add to Calendar</a>
                    </div>
                </div>
            </div>
            
            <div class="fixture-item animate__animated animate__fadeIn animate__delay-5s">
                <div class="row align-items-center">
                    <div class="col-5 col-md-3 text-end">
                        <div class="team-name">Rangers FC</div>
                    </div>
                    <div class="col-2 col-md-2 text-center py-2">
                        <div class="match-time">
                            <div class="date d-none d-sm-block">Sun, Jul 30</div>
                            <div class="time">14:00</div>
                            <div class="stadium d-none d-sm-block">Alumni Stadium</div>
                        </div>
                    </div>
                    <div class="col-5 col-md-3 text-start">
                        <div class="team-name">Dragons FC</div>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-end pt-2 pt-md-0">
                        <a href="#" class="btn btn-sm btn-outline-primary">Preview</a>
                        <a href="#" class="btn btn-sm btn-outline-secondary">Add to Calendar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Calendar Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeIn">League Calendar</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card animate__animated animate__fadeIn">
                        <div class="card-body">
                            <div id="leagueCalendar"></div>
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
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js"></script>
    <script>
        // Initialize calendar
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('leagueCalendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,listMonth'
                },
                events: [
                    {
                        title: 'Stanley FC vs Rangers FC',
                        start: '2023-07-15T15:00:00',
                        end: '2023-07-15T17:00:00',
                        backgroundColor: '#0d6efd',
                        borderColor: '#0d6efd'
                    },
                    {
                        title: 'Dragons FC vs United FC',
                        start: '2023-07-15T17:30:00',
                        end: '2023-07-15T19:30:00',
                        backgroundColor: '#0d6efd',
                        borderColor: '#0d6efd'
                    },
                    {
                        title: 'Wolves FC vs Lions FC',
                        start: '2023-07-22T15:00:00',
                        end: '2023-07-22T17:00:00',
                        backgroundColor: '#0d6efd',
                        borderColor: '#0d6efd'
                    },
                    {
                        title: 'Tigers FC vs Stanley FC',
                        start: '2023-07-23T14:00:00',
                        end: '2023-07-23T16:00:00',
                        backgroundColor: '#0d6efd',
                        borderColor: '#0d6efd'
                    },
                    {
                        title: 'United FC vs Wolves FC',
                        start: '2023-07-29T15:00:00',
                        end: '2023-07-29T17:00:00',
                        backgroundColor: '#0d6efd',
                        borderColor: '#0d6efd'
                    },
                    {
                        title: 'Rangers FC vs Dragons FC',
                        start: '2023-07-30T14:00:00',
                        end: '2023-07-30T16:00:00',
                        backgroundColor: '#0d6efd',
                        borderColor: '#0d6efd'
                    }
                ]
            });
            calendar.render();
        });
    </script>
</body>
</html>