<?php 
require_once('includes/header.php'); 
require_once('partials/topnav.php') 
?>
    <style>
        /* Contact Page Specific Styles */
.page-header {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/contact-header.jpg');
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

/* Contact Form */
#contactForm {
    background-color: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

#contactForm .form-label {
    font-weight: 600;
    color: #495057;
}

#contactForm .form-control,
#contactForm .form-select {
    padding: 0.75rem 1rem;
    border: 1px solid #ced4da;
    border-radius: 8px;
    transition: all 0.3s ease;
}

#contactForm .form-control:focus,
#contactForm .form-select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

#contactForm textarea {
    resize: vertical;
    min-height: 150px;
}

#contactForm .form-check-input {
    width: 1.25em;
    height: 1.25em;
    margin-top: 0.15em;
}

#contactForm .form-check-label {
    color: #495057;
}

#contactForm .btn-primary {
    padding: 0.75rem 2rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    border-radius: 50px;
    transition: all 0.3s ease;
}

#contactForm .btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
}

/* Contact Info Cards */
.contact-info .card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.5rem;
    transition: all 0.3s ease;
}

.contact-info .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.contact-info .card-body {
    padding: 1.5rem;
}

.contact-info i {
    color: var(--primary-color);
    margin-right: 1rem;
}

.contact-info h5 {
    color: var(--dark-color);
    margin-bottom: 0.5rem;
}

.contact-info p {
    color: #6c757d;
    margin-bottom: 0;
}

/* Map Section */
.bg-light {
    background-color: #f9f9f9 !important;
}

.ratio-16x9 {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}
/* Responsive Adjustments */
@media (max-width: 992px) {
    .page-header {
        height: 40vh;
    }
    
    .contact-info .d-flex {
        flex-direction: column;
        text-align: center;
    }
    
    .contact-info i {
        margin-right: 0;
        margin-bottom: 1rem;
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
    
    #contactForm {
        margin-bottom: 2rem;
    }
    
    .accordion-button {
        padding: 1rem;
        font-size: 1rem;
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
    
    #contactForm {
        padding: 1.5rem;
    }
    
    .contact-info .card-body {
        padding: 1rem;
    }
    
    .accordion-button {
        padding: 0.75rem;
        font-size: 0.95rem;
    }
    
    .accordion-body {
        padding: 1rem;
    }
}
    </style>

    <!-- Page Header -->
    <header class="page-header">
        <div class="page-header-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 animate__animated animate__fadeInDown">Contact Us</h1>
                    <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Get in touch with the BubzLeague team</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 animate__animated animate__fadeIn">
                    <h2 class="mb-4">Send Us a Message</h2>
                    <form id="contactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" required>
                                    <option value="" selected disabled>Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="team">Team Registration</option>
                                    <option value="player">Player Registration</option>
                                    <option value="sponsorship">Sponsorship</option>
                                    <option value="media">Media Inquiry</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter">
                                    <label class="form-check-label" for="newsletter">
                                        Subscribe to our newsletter
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 animate__animated animate__fadeIn animate__delay-1s">
                    <h2 class="mb-4">Contact Information</h2>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h5>Address</h5>
                                    <p class="mb-0">123 Alumni Street<br>Football City, FC 12345</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-phone fa-2x text-primary"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h5>Phone</h5>
                                    <p class="mb-0">(123) 456-7890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-envelope fa-2x text-primary"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h5>Email</h5>
                                    <p class="mb-0">info@bubzleague.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-clock fa-2x text-primary"></i>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h5>Office Hours</h5>
                                    <p class="mb-0">Monday - Friday: 9:00 AM - 5:00 PM<br>
                                    Saturday: 10:00 AM - 2:00 PM<br>
                                    Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 animate__animated animate__fadeIn">Our Location</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="ratio ratio-16x9 animate__animated animate__fadeIn">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1668.38425867959!2d32.57863524406638!3d0.2834227748379834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sug!4v1745661688854!5m2!1sen!2sug" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    .accordion-button {
        background-color: #fff;
        color: #1a1a2e;
        font-weight: 600;
        font-size: 1.1rem;
        padding: 1.25rem 1.75rem;
        border-radius: 8px !important;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
    }

    .accordion-button:not(.collapsed) {
        background-color: #6366f1;
        color: white;
        box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
    }

    .accordion-button:hover {
        background-color: #f8f9fa;
    }

    .accordion-button:not(.collapsed):hover {
        background-color: #4f46e5;
    }

    .accordion-button:focus {
        box-shadow: 0 0 0 0.25rem rgba(99, 102, 241, 0.25);
        border-color: rgba(99, 102, 241, 0.25);
    }

    .accordion-button::after {
        background-size: 1.25rem;
        transition: transform 0.3s ease;
    }

    .accordion-button:not(.collapsed)::after {
        filter: brightness(0) invert(1);
    }
    /* Icon styling */
    .accordion-button i {
        margin-right: 1rem;
        font-size: 1.25rem;
        width: 1.5em;
        text-align: center;
    }

    .accordion-button:not(.collapsed) i {
        color: white;
    }

    /* Answer section styling */
    .accordion-collapse {
        border-radius: 0 0 8px 8px;
    }

    .accordion-body {
        padding: 1.5rem;
        background-color: #f9f9ff;
        border: 1px solid rgba(99, 102, 241, 0.1);
        border-top: none;
        border-radius: 0 0 8px 8px;
    }
</style>
<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center mb-5 animate__animated animate__fadeIn">Frequently Asked Questions</h2>
                
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm animate__animated animate__fadeIn">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button btn collapsed bg-white text-dark fw-bold px-4 py-3" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" 
                                    aria-expanded="false" aria-controls="collapseOne">
                                <i class="fas fa-question-circle me-3 text-primary"></i>
                                How do I register my team for the BubzLeague?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse" 
                             aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 bg-light">
                                <p>Team registration is done online through our website. Visit the "Teams" section and click on "Register a Team" to begin the process. You'll need to provide team details, player information, and pay the registration fee. Our team will review your application and contact you within 3-5 business days.</p>
                                <p class="mb-0">If you need assistance, feel free to <a href="contact">contact us</a> directly.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm animate__animated animate__fadeIn animate__delay-1s">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-white text-dark fw-bold px-4 py-3" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" 
                                    aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-question-circle me-3 text-primary"></i>
                                What are the league fees and payment options?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" 
                             aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 bg-light">
                                <p>The league fees for the 2023 season are:</p>
                                <ul class="mb-3">
                                    <li>Team registration: $500 (includes up to 15 players)</li>
                                    <li>Additional players: $30 per player</li>
                                    <li>Referee fees: $20 per match (shared between teams)</li>
                                </ul>
                                <p class="mb-0">We accept payments via credit card (Visa, MasterCard, Amex), PayPal, and bank transfer. Payment plans are available upon request.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm animate__animated animate__fadeIn animate__delay-2s">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed bg-white text-dark fw-bold px-4 py-3" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" 
                                    aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-question-circle me-3 text-primary"></i>
                                When and where are matches played?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" 
                             aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 bg-light">
                                <p>Matches are typically played on Saturdays at the Alumni Stadium (123 Alumni Street). The regular season runs from April through September with the following schedule:</p>
                                <ul class="mb-3">
                                    <li>Morning matches: 9:00 AM - 12:00 PM</li>
                                    <li>Afternoon matches: 2:00 PM - 5:00 PM</li>
                                </ul>
                                <p class="mb-0">The full schedule is available on our <a href="fixtures">fixtures page</a> once the season begins.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm animate__animated animate__fadeIn animate__delay-3s">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed bg-white text-dark fw-bold px-4 py-3" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" 
                                    aria-expanded="false" aria-controls="collapseFour">
                                <i class="fas fa-question-circle me-3 text-primary"></i>
                                What equipment do players need to provide?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" 
                             aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 bg-light">
                                <p>All players must provide their own:</p>
                                <ul class="mb-3">
                                    <li>Football boots (cleats) appropriate for grass surfaces</li>
                                    <li>Shin guards (mandatory for all players)</li>
                                    <li>Team jersey (provided by the league after registration)</li>
                                    <li>Black shorts and socks (unless otherwise specified)</li>
                                </ul>
                                <p class="mb-0">The league provides match balls, goals, and other field equipment.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm animate__animated animate__fadeIn animate__delay-4s">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed bg-white text-dark fw-bold px-4 py-3" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" 
                                    aria-expanded="false" aria-controls="collapseFive">
                                <i class="fas fa-question-circle me-3 text-primary"></i>
                                How can I become a sponsor for BubzLeague?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" 
                             aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 bg-light">
                                <p>We welcome sponsors at various levels:</p>
                                <ul class="mb-3">
                                    <li><strong>Team Sponsor:</strong> $1,000 - Logo on team jerseys</li>
                                    <li><strong>League Sponsor:</strong> $3,000 - Logo on all jerseys and website</li>
                                    <li><strong>Field Sponsor:</strong> $5,000 - Naming rights for the season</li>
                                    <li><strong>Event Sponsor:</strong> Varies - Sponsor specific events or tournaments</li>
                                </ul>
                                <p class="mb-0">For sponsorship inquiries, please <a href="contact">contact us</a> or email sponsorships@bubzleague.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5 animate__animated animate__fadeIn">
                    <p class="lead">Still have questions?</p>
                    <a href="contact" class="btn btn-primary btn-lg px-4">Contact Us Directly</a>
                </div>
            </div>
        </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // In a real application, you would send the form data to the server here
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });     
    </script>
<?php 
require_once('includes/footer.php'); 
require_once('partials/bottomnav.php') 
?>
</body>
</html>