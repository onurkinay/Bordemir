# Bordemir Web Site (Created in 2014)

This is the source code for the Bordemir company website. The project is built using PHP and consists of both a public-facing site and an admin panel for content management.

## Features
- Company homepage, about, services, products, news, and contact pages
- Photo gallery and technical documents
- Admin panel for managing content (news, gallery, services, etc.)
- File and image uploads
- Responsive design with custom CSS and JavaScript

## Project Structure
- `index.php`, `kurumsal.php`, `hizmetlerimiz.php`, etc.: Main public pages
- `admin/`: Admin panel and management scripts
- `css/`, `js/`, `img/`: Static assets (styles, scripts, images)
- `galeri/`, `upload/`: Uploaded images and documents
- `config.php`: Configuration file (database, settings)
- `bordemir.sql`: Database schema

## Requirements
- PHP 5.6+
- MySQL or MariaDB
- Web server (Apache, Nginx, etc.)

## Setup
1. Clone the repository or copy the files to your web server.
2. Import `bordemir.sql` into your MySQL database.
3. Update database credentials in `config.php`.
4. Make sure `upload/` and `galeri/` folders are writable by the web server.
5. Access the site via your browser. Admin panel is under `/admin`.

## Admin Panel
- Login at `/admin/login.php`
- Manage news, gallery, services, and other content

## Credits
- Uses PHPMailer for email functionality
