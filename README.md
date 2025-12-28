Internal Sales Reporting Dashboard (PHP)

This project is a small internal reporting dashboard built with plain PHP and SQLite. 
It is designed to demonstrate backend fundamentals commonly found in legacy or long-lived PHP codebases.

The application focuses on clean PHP, safe database access, and server-rendered analytics. 
UI styling is intentionally minimal and practical, similar to real internal tools used by sales or operations teams.

Purpose

The goal of this project is to demonstrate the ability to work comfortably in environments that rely on:
- Server-side rendering
- SQL-driven reporting
- PDO-based database access
- Simple, maintainable project structure

It is not intended to showcase frameworks or frontend-heavy development.

Features

- Total revenue calculation
- Revenue breakdown by product
- Revenue breakdown by category
- Read-only reporting
- Server-rendered HTML

Tech Stack

- PHP 8.x
- SQLite
- PDO (prepared statements)
- HTML and CSS
- No framework

Project Structure

php-sales-dashboard/
public/
  index.php
  styles.css
app/
  Database.php
  Reports.php
  Views/
    dashboard.php
data/
  database.sqlite
README.md

Architecture Overview

The application follows a lightweight MVC-style structure.

index.php acts as a front controller and request entry point.
Database.php is responsible for creating and configuring the PDO connection.
Reports.php contains all SQL queries and reporting logic.
Views contain minimal PHP and no database access.

All SQL is centralized in a single class, and all database access uses PDO prepared statements.

Concepts Demonstrated

- PDO configuration and error handling
- SQL joins and aggregation using SUM and GROUP BY
- Separation of concerns in PHP applications
- Server-side rendering
- Legacy-friendly PHP architecture

Running the Application

From the project root, start the PHP development server:

php -S localhost:8000 -t public

Then open the following URL in a browser:

http://localhost:8000

Notes

This project is intentionally simple and backend-focused.
It reflects the structure and constraints of real internal tools rather than modern framework-driven applications.
