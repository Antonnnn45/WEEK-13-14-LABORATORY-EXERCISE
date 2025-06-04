# TO-DO List PHP App

This is a simple PHP + MySQL web application that lets students manage daily tasks with predefined and custom options. The project was developed as part of the Week 13–14 Web Application Deployment laboratory exercise.

##  Live Application
[https://week-13-14-laboratory-exercise.onrender.com](https://week-13-14-laboratory-exercise.onrender.com)

##  GitHub Repository
[https://github.com/Antonnnn45/WEEK-13-14-LABORATORY-EXERCISE](https://github.com/Antonnnn45/WEEK-13-14-LABORATORY-EXERCISE)

##  Technologies Used
- PHP 8.1
- MySQL
- PDO for database connection
- Render (Hosting Platform)
- Docker

## Features
- Predefined student routine tasks
- Custom task addition with date and time
- Check/Uncheck tasks (completion tracking)
- Edit/Delete tasks
- MySQL persistent storage (no session loss)
- Dockerized for deployment
- `.htaccess` for routing

##  Deployment Steps
1. Built the PHP app locally with database support.
2. Created MySQL schema `student_planner` and `tasks` table.
3. Initialized a Git repository and pushed to GitHub.
4. Created Dockerfile for PHP-Apache + PDO-MySQL support.
5. Added `.htaccess` to route to `Casanova_Charlston_DeplyomentLab.php`.
6. Deployed via Render using the Docker environment.
7. Fixed 403 error via DirectoryIndex directive.
8. Verified app loads on live domain.

##  Environment Variables
No external environment variables used (localhost MySQL with `root` user for development).

##  Challenges Faced
- SQLite driver missing on Render → switched to MySQL
- Render 403 error → resolved using .htaccess and Dockerfile config
- Session loss after task deletion → solved using database persistence
- PHP extensions missing → installed `pdo_mysql` in Dockerfile

---
© 2025 Charlston Casanova – Web Application Deployment Lab