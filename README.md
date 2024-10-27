Blog API
A RESTful API for a Blog Application built with Laravel.

Simple Installation Guide

Prerequisites

PHP >= 8.0
Composer
Laravel (latest version)
MySQL or another supported database
Git
Installation Steps
Clone the Repository

Open your terminal and run:

git clone https://github.com/A-C-3/TechnoSoftware-BlogAPI.git
Navigate to the Project Directory

cd TechnoSoftware-BlogAPI
Install Dependencies

Use Composer to install all project dependencies:
composer install
Copy the Environment File

Duplicate the example environment file and rename it to .env:

cp .env.example .env
Generate an Application Key

Generate a unique application key:

php artisan key:generate
Configure the Database

Open the .env file in a text editor and update the following lines with your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
Note: Ensure you have created a database with the name you specified in DB_DATABASE.

Run Migrations
Run the database migrations to set up the tables:

php artisan migrate
Start the Development Server

php artisan serve
The application will start at http://localhost:8000.
