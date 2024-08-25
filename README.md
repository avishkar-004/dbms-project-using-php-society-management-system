# SocietyHUB - Society Management System

A web-based Society Management System built with PHP and MySQL as a DBMS course project. SocietyHUB helps residential societies manage their day-to-day operations including member registration, complaint management, maintenance payments, notice boards, and photo galleries.

## Features

- **User Authentication** - Separate login for residents (owners/tenants) and admin
- **Member Registration** - Self-registration with owner/tenant classification
- **Admin Dashboard** - Manage members (add, update, delete), view complaints, manage payments
- **Complaint System** - Residents can lodge anonymous complaints; admin can view and resolve them
- **Maintenance Payments** - Owners can make maintenance payments through multiple modes (cash, cheque, UPI, card)
- **Notice Board** - Admin can post notices (announcements, events); residents can view them
- **Photo Gallery** - Upload and view society event photos
- **Role-Based Access** - Different dashboards and permissions for owners, tenants, and admin

## Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP 7.x / 8.x
- **Database:** MySQL (MariaDB) via phpMyAdmin
- **Server:** XAMPP (Apache + MySQL)
- **Icons:** Font Awesome

## Database Schema

The system uses a MySQL database (`dbms`) with the following tables:

| Table | Description |
|-------|-------------|
| `owner` | Stores owner details (username, email, flat no, mobile, family members) |
| `tenant` | Stores tenant details with the same structure as owner |
| `combox` | Complaints with title, description, and username |
| `notices` | Notice board entries with name, type, date, and message |
| `payrecords` | Payment records with name, flat no, amount, status, and payment mode |
| `images` | Photo gallery image references |

## Setup Instructions

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) installed on your system

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/avishkar-004/dbms-project-using-php-society-management-system.git
   ```

2. Copy the project folder to your XAMPP `htdocs` directory.

3. Start Apache and MySQL from the XAMPP Control Panel.

4. Open phpMyAdmin (`http://localhost/phpmyadmin`) and create a database named `dbms`.

5. Import the SQL files from the `sql/` directory in the following order:
   - `usersregister.sql` - Creates the registration/owner/tenant tables
   - `complaints.sql` - Creates the complaints table
   - `payments.sql` - Creates the payment records table
   - `noticeboard.sql` - Creates the notices table
   - `userimage.sql` - Creates the image gallery table

   Or use the combined script: `sql/combined_schema.sql`

6. Open `http://localhost/login.html` in your browser.

### Default Login Credentials

**Admin:**
- Username: `Admin`
- Admin Code: `100`

**User:** Register a new account through the registration form.

## Project Structure

```
├── sql/                 # Database schema files
│   ├── schema.sql       # Base schema
│   ├── usersregister.sql
│   ├── complaints.sql
│   ├── payments.sql
│   ├── noticeboard.sql
│   ├── userimage.sql
│   └── combined_schema.sql
├── Images/              # Static images and uploads
├── db_conn.php          # Database connection config
├── login.html           # Landing page with login/register
├── login.php            # Login authentication logic
├── register.php         # User registration handler
├── Adminlogin.php       # Admin login page
├── Welcome.php          # User dashboard
├── Welcome1.php         # Admin dashboard
├── managemem.php        # Admin - manage members
├── insertuser.php       # Admin - add member form
├── insertfile.php       # Admin - insert member handler
├── updateuser.php       # Admin - update member form
├── deleteuser.php       # Admin - delete member handler
├── complaint.php        # Lodge complaint form
├── viewcomplaints.php   # Admin - view complaints
├── resolvecomp.php      # Admin - resolve complaints
├── noticebrd.php        # View notice board
├── addnotice.php        # Admin - add notices
├── payment.php          # Make maintenance payment
├── viewpayment.php      # Admin - view payments
├── photo.php            # Admin - photo gallery
├── userphoto.php        # User - photo gallery
├── picadd.php           # Admin photo upload handler
├── picaddu.php          # User photo upload handler
├── dashstyle.css        # Dashboard styling
├── style1.css           # Landing page styling
├── Scripts.php          # Utility scripts
├── .htaccess            # Apache configuration
└── dbms_report.pdf      # Project report with screenshots
```

## Screenshots

The project report (`dbms_report.pdf`) contains detailed screenshots and documentation of all features.

## License

This project was developed as an academic project for the DBMS course.
