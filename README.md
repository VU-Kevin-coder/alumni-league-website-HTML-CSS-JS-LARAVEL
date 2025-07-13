# Alumni League Website

A feature-rich web platform for managing an alumni football league. This system includes team and player management, fixtures, results, voting, media uploads, blog articles, and an admin dashboard — all built with PHP, Bootstrap, and modern front-end technologies.

---

## 🗂️ Folder Structure

alumni-league-website-HTML-CSS-JS-LARAVEL/
├── index.php # Home page
├── about-us.php # About the league
├── fixtures.php # Fixture list
├── results.php # Match results
├── teams.php # All teams
├── players.php # Player profiles
├── blog.php # Blog listing
├── media.php # Match media
├── vote.php # Voting page
├── newsletter.php # Newsletter sign-up
├── contact.php # Contact form
├── login.php # User login

├── team/
│ └── index.php # Dynamic team pages
├── player/
│ └── 12.php # Individual player pages
├── blog/
│ └── article.php

├── admin/ # Admin dashboard
│ ├── dashboard.php
│ ├── fixtures.php
│ ├── results.php
│ ├── teams.php
│ ├── players.php
│ ├── blogs.php
│ ├── media.php
│ ├── votes.php
│ ├── subscribers.php
│ └── login.php

├── assets/
│ ├── css/
│ │ └── style.css
│ ├── js/
│ │ └── main.js
│ ├── images/
│ │ └── logo.png
│ ├── uploads/
│ │ ├── blog/
│ │ ├── players/
│ │ ├── teams/
│ │ └── media/
│ └── bootstrap/
│ └── (Bootstrap files)
---

## 🚀 Features

- Responsive public site with team & player listings
- Fixtures and results management
- Match voting system (e.g., MoTM, MVP)
- Media uploads: images and videos
- Blog system with tags, categories
- Admin dashboard with modal-based management
- Newsletter sign-up
- Contact form
- Authentication (planned)

---

## 🛠️ Tech Stack

- PHP (Vanilla, no framework yet)
- Bootstrap 5
- HTML5 / CSS3 / JS
- Animate.css (for transitions)
- Laravel (planned backend refactor)

---

## 🚧 Setup Instructions

# Clone the repository
git clone https://github.com/VU-Kevin-coder/alumni-league-website-HTML-CSS-JS-LARAVEL.git

# Open in your PHP-enabled server (e.g., XAMPP or Laravel Valet)
Start Apache and visit http://localhost/alumni-league-website-HTML-CSS-JS-LARAVEL/

## 👨‍💻 Author
Kevin
Software Engineer

##📄 License
This project is licensed under the MIT License. See the LICENSE file for details.

##🔮 Planned Enhancements
Migrate to Laravel for routing, controllers, and DB

Role-based authentication (Admin, Coach, Referee, Fan)

Database-driven voting and stats

RESTful API for mobile app integration

Enhanced media manager (uploads + tagging)
