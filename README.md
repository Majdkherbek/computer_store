# Computer Store - Laravel CRUD Application

## Overview

Computer Store is a web application built with Laravel following the MVC architecture pattern. The project demonstrates the implementation of a complete CRUD (Create, Read, Update, Delete) workflow for managing computer records.

The application allows users to:

* View all computers stored in the database
* Create new computer records
* Display detailed information for a specific computer
* Edit existing computer data
* Delete records from the database
* Validate user input before storing data

---

## Features

### Resource Controller Architecture

The project uses Laravel Resource Controllers to implement standard CRUD operations:

* index()
* create()
* store()
* show()
* edit()
* update()
* destroy()

### Database Integration

The application uses:

* Laravel Eloquent ORM
* Database Migrations
* Model-Based Data Access
* Input Validation

### Blade Templating

The frontend is built using:

* Blade Templates
* Layout Inheritance
* Dynamic Data Rendering
* Reusable Components

### Security Practices

The project includes:

* CSRF Protection
* Input Validation
* Basic Data Sanitization
* Eloquent ORM Protection Against SQL Injection

---

## Technology Stack

### Backend

* PHP 8+
* Laravel 12

### Database

* MySQL
* SQLite (development)

### Frontend

* HTML5
* CSS3
* Blade Templates

### Development Tools

* Artisan CLI
* Composer
* Laravel Migrations

---

## Database Structure

### computers

| Field      | Type      |
| ---------- | --------- |
| id         | bigint    |
| name       | string    |
| origin     | string    |
| price      | integer   |
| created_at | timestamp |
| updated_at | timestamp |

---

## Application Flow

### Create Computer

User → Form → Validation → Database → Redirect

### View Computers

Database → Controller → Blade View

### Update Computer

User → Edit Form → Validation → Database Update

### Delete Computer

User → Delete Action → Database Removal

---

## What I Learned

Through this project I gained hands-on experience with:

* Laravel MVC Architecture
* Resource Routing
* Eloquent ORM
* Database Migrations
* Form Handling
* Request Validation
* Blade Templating
* CRUD Application Development
* Debugging Laravel Applications

---

## Future Improvements

Planned enhancements include:

* Authentication System
* Search Functionality
* Pagination
* Image Upload Support
* REST API Endpoints
* Unit & Feature Testing
* Role-Based Authorization
* Dashboard Analytics

---

## Author

Developed as a practical Laravel learning project focused on mastering modern PHP web application development principles.
