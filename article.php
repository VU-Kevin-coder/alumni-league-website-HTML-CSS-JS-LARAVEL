<?php 
require_once('includes/header.php'); 
require_once('partials/topnav.php') 
?>

<style>
    /* Blog Post Styles */
    .blog-header {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url('../images/blog-header-bg.jpg') no-repeat center center;
        background-size: cover;
        height: 60vh;
        min-height: 500px;
        display: flex;
        align-items: center;
        color: white;
        margin-bottom: 40px;
        position: relative;
    }

    .blog-header-content {
        position: relative;
        z-index: 2;
    }

    .blog-title {
        font-size: 3rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    .blog-meta {
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
        font-size: 0.95rem;
    }

    .blog-meta-item {
        display: flex;
        align-items: center;
        margin-right: 1.5rem;
    }

    .blog-meta-item i {
        margin-right: 0.5rem;
        color: #6366f1;
    }

    .blog-content {
        line-height: 1.8;
        font-size: 1.1rem;
        color: #4b5563;
    }

    .blog-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 2rem 0;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .blog-content h2, 
    .blog-content h3, 
    .blog-content h4 {
        margin-top: 2.5rem;
        margin-bottom: 1.5rem;
        color: #1a1a2e;
        font-weight: 700;
    }

    .blog-content h2 {
        font-size: 2rem;
    }

    .blog-content h3 {
        font-size: 1.5rem;
    }

    .blog-content blockquote {
        border-left: 4px solid #6366f1;
        padding-left: 1.5rem;
        margin: 2rem 0;
        font-style: italic;
        color: #6b7280;
    }

    .blog-tags {
        display: flex;
        flex-wrap: wrap;
        margin: 2rem 0;
    }

    .blog-tag {
        background-color: #e0e7ff;
        color: #6366f1;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        margin-right: 0.75rem;
        margin-bottom: 0.75rem;
        font-size: 0.85rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .blog-tag:hover {
        background-color: #6366f1;
        color: white;
        text-decoration: none;
    }

    .author-card {
        background-color: #f9f9ff;
        border-radius: 10px;
        padding: 2rem;
        margin: 3rem 0;
        display: flex;
        align-items: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .author-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 2rem;
        border: 3px solid #6366f1;
    }

    .author-name {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #1a1a2e;
    }

    .author-bio {
        color: #6b7280;
        margin-bottom: 1rem;
    }

    .social-links a {
        display: inline-block;
        width: 36px;
        height: 36px;
        line-height: 36px;
        text-align: center;
        background-color: #e0e7ff;
        color: #6366f1;
        border-radius: 50%;
        margin-right: 0.75rem;
        transition: all 0.3s ease;
    }

    .social-links a:hover {
        background-color: #6366f1;
        color: white;
        transform: translateY(-3px);
    }

    .related-posts {
        margin: 4rem 0;
    }

    .related-post-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
    }

    .related-post-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .related-post-card img {
        height: 200px;
        object-fit: cover;
        width: 100%;
    }

    .related-post-card .card-body {
        padding: 1.5rem;
    }

    .related-post-card .card-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
    }

    .related-post-card .card-text {
        color: #6b7280;
        font-size: 0.95rem;
        margin-bottom: 1rem;
    }

    .related-post-card .read-more {
        color: #6366f1;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
    }

    .related-post-card .read-more i {
        margin-left: 0.5rem;
        transition: transform 0.3s ease;
    }

    .related-post-card .read-more:hover i {
        transform: translateX(3px);
    }

    .comments-section {
        margin: 4rem 0;
    }

    .comment-card {
        border: none;
        border-radius: 10px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .comment-header {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .comment-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 1rem;
    }

    .comment-author {
        font-weight: 700;
        margin-bottom: 0.25rem;
    }

    .comment-date {
        color: #6b7280;
        font-size: 0.85rem;
    }

    .comment-reply {
        color: #6366f1;
        font-weight: 600;
        text-decoration: none;
        font-size: 0.9rem;
    }

    .comment-reply:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .blog-title {
            font-size: 2.25rem;
        }
        
        .author-card {
            flex-direction: column;
            text-align: center;
        }
        
        .author-avatar {
            margin-right: 0;
            margin-bottom: 1.5rem;
        }
    }
</style>

<!-- Blog Header -->
<header class="blog-header">
    <div class="page-header-overlay"></div>
    <div class="container blog-header-content">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="blog-meta justify-content-center">
                    <div class="blog-meta-item">
                        <i class="far fa-calendar-alt"></i>
                        <span>June 15, 2023</span>
                    </div>
                    <div class="blog-meta-item">
                        <i class="far fa-user"></i>
                        <span>By Admin</span>
                    </div>
                    <div class="blog-meta-item">
                        <i class="far fa-comments"></i>
                        <span>5 Comments</span>
                    </div>
                </div>
                <h1 class="blog-title">Stanley FC Extends Lead at the Top With Impressive Victory</h1>
                <div class="blog-tags justify-content-center">
                    <a href="#" class="blog-tag">Match Report</a>
                    <a href="#" class="blog-tag">Stanley FC</a>
                    <a href="#" class="blog-tag">League News</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Blog Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <article class="blog-content">
                    <p class="lead">In a thrilling match that kept fans on the edge of their seats, Stanley FC secured a crucial 2-1 victory against Rangers FC to extend their lead at the top of the BubzLeague table.</p>
                    
                    <img src="https://i.pinimg.com/736x/8d/e9/1b/8de91bc7c69e69d068f9195bad913c9b.jpg" alt="Stanley FC celebrating victory" class="img-fluid">
                    
                    <h2>Match Overview</h2>
                    <p>John Doe scored both goals for Stanley, taking his season tally to 8 goals in 5 matches. The first came in the 23rd minute with a stunning free kick from just outside the box, while the second was a clinical finish in the 68th minute after a beautiful through ball from midfielder Alex Smith.</p>
                    
                    <p>Rangers pulled one back in the 75th minute through their captain Michael Johnson, setting up a tense final 15 minutes. However, Stanley's defense held firm, with goalkeeper Tom Wilson making two crucial saves in the dying minutes to preserve the victory.</p>
                    
                    <blockquote>
                        "This was a massive result for us against a very good Rangers side. The boys showed great character to see out the game after they pulled one back."
                        <footer>- Stanley FC Manager, David Williams</footer>
                    </blockquote>
                    
                    <h2>Tactical Analysis</h2>
                    <p>Stanley set up in their usual 4-3-3 formation, but with a slight tweak that saw their wingers tuck in more to overload the midfield. This tactical adjustment proved crucial in controlling large portions of the game.</p>
                    
                    <img src="https://i.pinimg.com/736x/8e/f5/9d/8ef59dc3c90a3abd56c87a5901709132.jpg" alt="Stanley FC tactical formation" class="img-fluid">
                    
                    <p>Key statistics from the match:</p>
                    <ul>
                        <li>Possession: Stanley 58% - 42% Rangers</li>
                        <li>Shots on target: Stanley 6 - 4 Rangers</li>
                        <li>Corners: Stanley 5 - 3 Rangers</li>
                        <li>Pass accuracy: Stanley 82% - 76% Rangers</li>
                    </ul>
                    
                    <h2>Player of the Match</h2>
                    <p>John Doe was unsurprisingly named Player of the Match for his two-goal performance. The striker now leads the league in both goals and assists (5), forming a formidable partnership with winger James Rodriguez.</p>
                    
                    <h2>League Implications</h2>
                    <p>With this victory, Stanley extends their lead at the top to 5 points over second-place Dragons FC. Rangers remain in fifth place but are now just 2 points off the final playoff spot.</p>
                    
                    <p>The win also means Stanley remains the only unbeaten team in the league this season, with 4 wins and 1 draw from their opening 5 matches.</p>
                    
                    <div class="blog-tags">
                        <span class="text-muted mr-2">Tags:</span>
                        <a href="#" class="blog-tag">Football</a>
                        <a href="#" class="blog-tag">BubzLeague</a>
                        <a href="#" class="blog-tag">Stanley FC</a>
                        <a href="#" class="blog-tag">Match Report</a>
                    </div>
                </article>
                
                <!-- Author Bio -->
                <div class="author-card">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="author-avatar">
                    <div>
                        <h3 class="author-name">Mark Johnson</h3>
                        <p class="author-bio">Mark is BubzLeague's chief football correspondent with over 10 years experience covering local football. He's been following Stanley FC since their inception in 2015.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Related Posts -->
                <div class="related-posts">
                    <h3 class="mb-4">Related Posts</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="related-post-card">
                                <img src="https://i.pinimg.com/736x/32/0c/ac/320cace72205d4b671ec6b8c01b3a69c.jpg" alt="Related Post">
                                <div class="card-body">
                                    <h5 class="card-title">Dragons FC Maintain Unbeaten Run</h5>
                                    <p class="card-text">Dragons FC secured a hard-fought draw against league leaders Stanley FC to maintain their unbeaten start to the season.</p>
                                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="related-post-card">
                                <img src="https://i.pinimg.com/736x/e8/f0/88/e8f088324626761c201821646b10eac1.jpg" alt="Related Post">
                                <div class="card-body">
                                    <h5 class="card-title">John Doe: The Goal Machine</h5>
                                    <p class="card-text">With 8 goals in 5 matches, John Doe is proving to be the most lethal striker in the league this season.</p>
                                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Comments Section -->
                <div class="comments-section">
                    <h3 class="mb-4">5 Comments</h3>
                    
                    <div class="comment-card">
                        <div class="comment-header">
                            <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="User" class="comment-avatar">
                            <div>
                                <h5 class="comment-author">Robert Smith</h5>
                                <div class="comment-date">June 16, 2023 at 2:34 pm</div>
                            </div>
                        </div>
                        <p>What a match! Stanley's defense was rock solid in those final minutes. Wilson's save in the 89th minute was world class.</p>
                        <a href="#" class="comment-reply">Reply</a>
                    </div>
                    
                    <div class="comment-card ml-md-5">
                        <div class="comment-header">
                            <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="User" class="comment-avatar">
                            <div>
                                <h5 class="comment-author">Sarah Johnson</h5>
                                <div class="comment-date">June 16, 2023 at 3:45 pm</div>
                            </div>
                        </div>
                        <p>I agree Robert! That double save was incredible. Do you think Stanley can go the whole season unbeaten?</p>
                        <a href="#" class="comment-reply">Reply</a>
                    </div>
                    
                    <div class="comment-card">
                        <div class="comment-header">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User" class="comment-avatar">
                            <div>
                                <h5 class="comment-author">Michael Brown</h5>
                                <div class="comment-date">June 17, 2023 at 9:12 am</div>
                            </div>
                        </div>
                        <p>John Doe is on fire this season! That free kick was perfection. If he keeps this up, he'll break the league scoring record.</p>
                        <a href="#" class="comment-reply">Reply</a>
                    </div>
                    
                    <!-- Comment Form -->
                    <div class="comment-card mt-5">
                        <h4 class="mb-4">Leave a Comment</h4>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="5" placeholder="Your Comment" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                </div>
                            </div>
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