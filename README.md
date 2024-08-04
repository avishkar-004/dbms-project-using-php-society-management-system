# SocietyHUB - Society Management System

A web-based Society Management System built with PHP and MySQL as a DBMS course project. SocietyHUB helps residential societies manage their day-to-day operations including member registration, complaint management, maintenance payments, notice boards, and photo galleries.

## Features

- User Authentication - Separate login for residents and admin
- Member Registration - Self-registration with owner/tenant classification
- Admin Dashboard - Manage members, view complaints, manage payments

## Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP 7.x / 8.x
- **Database:** MySQL (MariaDB) via phpMyAdmin
- **Server:** XAMPP (Apache + MySQL)
- **Icons:** Font Awesome

- **Complaint System** - Residents can lodge complaints; admin can view and resolve them
- **Maintenance Payments** - Owners can make payments through multiple modes
- **Notice Board** - Admin can post notices; residents can view them
- **Photo Gallery** - Upload and view society event photos
- **Role-Based Access** - Different dashboards for owners, tenants, and admin

## Database Schema

| Table | Description |
|-------|-------------|
| `owner` | Stores owner details |
| `tenant` | Stores tenant details |
| `combox` | Complaints with title and description |
| `notices` | Notice board entries |
| `payrecords` | Payment records |
| `images` | Photo gallery references |

## Setup Instructions

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) installed

### Installation
1. Clone the repo
2. Copy to XAMPP `htdocs`
3. Start Apache and MySQL
4. Create database `dbms` in phpMyAdmin
5. Import SQL files from `sql/` directory
6. Open `http://localhost/login.html`

### Default Credentials
**Admin:** Username: `Admin`, Code: `100`
**User:** Register through the form

## Project Structure
```
├── sql/             # Database schema files
├── Images/          # Static images and uploads
├── db_conn.php      # Database connection
├── login.html       # Landing page
├── login.php        # Auth logic
├── register.php     # Registration handler
├── Adminlogin.php   # Admin login
├── Welcome.php      # User dashboard
├── Welcome1.php     # Admin dashboard
├── managemem.php    # Member management
├── complaint.php    # Complaint form
├── noticebrd.php    # Notice board
├── payment.php      # Payment form
├── photo.php        # Photo gallery
├── dashstyle.css    # Dashboard CSS
└── style1.css       # Landing page CSS
```
