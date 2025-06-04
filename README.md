# TO-DO List PHP App – Student Daily Planner

This is a simple PHP + MySQL web application that lets students manage daily tasks using predefined routines and custom entries. The project was developed as part of the Week 13–14 Web Application Deployment laboratory exercise.

---

## Live Application
🔗 [https://week-13-14-laboratory-exercise.onrender.com](https://week-13-14-laboratory-exercise.onrender.com)

## GitHub Repository
🔗 [https://github.com/Antonnnn45/WEEK-13-14-LABORATORY-EXERCISE](https://github.com/Antonnnn45/WEEK-13-14-LABORATORY-EXERCISE)

---

## Technologies Used
- **PHP** 8.1
- **MySQL** (via FreeSQLDatabase.com)
- **PDO** for secure DB interaction
- **Render** (Hosting Platform)
- **Docker** for containerized deployment
- `.env` for environment configuration
- `.htaccess` for routing setup

---

## Features
- Predefined student routine task list
- Add custom tasks with specific date & time
- Check/Uncheck tasks for completion tracking
- Edit or  Delete tasks
- Calendar-like date view
- Persistent MySQL storage (not dependent on sessions)
- HTTPS enabled via Render’s auto-SSL
- Clean and minimal UI layout

---

## Deployment Steps

# A. Hosting Setup
- Platform: **Render.com**
- Git repo initialized: 
- Hosting instance created: 

# B. Application Deployment
1. Created a GitHub repo and pushed the project.
2. Designed `Casanova_Charlston_DeplyomentLab.php` as the main entry point.
3. Added `.htaccess` file with `DirectoryIndex` rule.
4. Set up `Dockerfile` to enable Apache + PHP + PDO_MYSQL.
5. Configured `.env` with remote MySQL credentials.
6. Added environment variables in Render's dashboard:
   - `DB_HOST`
   - `DB_NAME`
   - `DB_USER`
   - `DB_PASS`
7. Connected to [freesqldatabase.com](https://freesqldatabase.com) and created schema/tables manually.

# C. Domain & SSL
- Custom domain:  skipped (Render default used)
- HTTPS:  Automatically enabled by Render

# D. Environment Variables
Used in `connection.php`:
```env
DB_HOST=sql12.freesqldatabase.com
DB_NAME=sql12783082
DB_USER=sql12783082
DB_PASS=sti5iJ3X4d
DB_PORT=3306
