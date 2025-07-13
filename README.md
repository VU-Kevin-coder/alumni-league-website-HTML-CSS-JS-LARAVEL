# Alumni League Website

[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)
![PHP Version](https://img.shields.io/badge/php-8.1%2B-blue)
[![Contributors](https://img.shields.io/github/contributors/VU-Kevin-coder/alumni-league-website-HTML-CSS-JS-LARAVEL)](https://github.com/VU-Kevin-coder/alumni-league-website-HTML-CSS-JS-LARAVEL/graphs/contributors)
[![Last Commit](https://img.shields.io/github/last-commit/VU-Kevin-coder/alumni-league-website-HTML-CSS-JS-LARAVEL)](https://github.com/VU-Kevin-coder/alumni-league-website-HTML-CSS-JS-LARAVEL/commits)
[![Repo Stars](https://img.shields.io/github/stars/VU-Kevin-coder/alumni-league-website-HTML-CSS-JS-LARAVEL?style=social)](https://github.com/VU-Kevin-coder/alumni-league-website-HTML-CSS-JS-LARAVEL/stargazers)

A modern alumni football league management platform built with PHP, HTML, CSS, JS, and Laravel. It includes full league management features like team listings, match fixtures, voting, blog updates, media uploads, and an admin dashboard.
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

## 📄 License
This project is licensed under the MIT License. See the LICENSE file for details.

## 🔮 Planned Enhancements
Migrate to Laravel for routing, controllers, and DB

Role-based authentication (Admin, Coach, Referee, Fan)

Database-driven voting and stats

RESTful API for mobile app integration

Enhanced media manager (uploads + tagging)
