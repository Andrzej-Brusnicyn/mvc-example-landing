# Landing Page with Admin Panel (MVC Pattern)

## Overview

This project is a simple landing page with an admin panel, designed as a learning exercise to understand the MVC (Model-View-Controller) architecture. It demonstrates basic functionality and structure, including user authentication, content management, and routing.

**Note**: This is an educational and synthetic project, created to illustrate the principles of the MVC pattern. It is intentionally simplified for learning purposes and not intended for production use.

## Features

- **Landing Page**: Dynamic sections for hero, cards, about, and footer.
- **Admin Panel**: 
  - Login system for authorized access.
  - Admin dashboard for managing page content.
  - CRUD functionality for sections like Hero, Cards, etc.
- **Authentication**: Secure login system using PHP sessions.
- **Image Upload**: Admins can update images for hero section directly from the panel.

## Architecture

- **MVC Structure**: 
  - **Models**: Handle database queries and data manipulation.
  - **Views**: Render the HTML with dynamic content passed from controllers.
  - **Controllers**: Process user requests, interact with models, and serve the appropriate views.
- **Routing**: 
  - Dynamic URL parsing in `index.php` for routing between pages and admin actions.
  - Simple routing logic based on request URIs.
- **Autoloading**: Classes are automatically loaded using `spl_autoload_register()` to maintain clean and modular code.
- **Database**: PDO is used for database interaction (MySQL). Configuration is loaded from a `.env` file.
  - `config.php` and `connection.php` implement the **Singleton** pattern to ensure that only a single instance of the database connection is created:
    ```php
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    ```

## Tech Stack

- **PHP**: Backend logic and MVC implementation.
- **MySQL**: Database for storing content.
- **Bootstrap**: Basic styling for the frontend.

## Installation

1. Clone the repository:
```
   git clone https://github.com/Andrzej-Brusnicyn/mvc-example-landing.git
```

2. Set up the database:
- Create a MySQL database.
- Import the landing2.sql file into your database.
3. Configure the environment:
- Update your database credentials in the .env file.
4. Start the local server.
5. Access the site:
- Landing page: http://localhost:8000/
- Admin login: http://localhost:8000/login (default credentials: admin/admin).
