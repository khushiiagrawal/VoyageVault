# VoyageVault 🛫

A PHP-based student registration system. This project allows students to submit their details via a web form, which are then stored in a MySQL database.

## Features
- User-friendly form for student registration.
- Stores data securely in a MySQL database.
- Displays a confirmation message upon successful submission.
- Basic error handling for database connection and queries.

## Technologies Used
- PHP
- MySQL
- JavaScript
- HTML
- CSS


## Setup Instructions

### Prerequisites
- Install [XAMPP](https://www.apachefriends.org/) or any other local server to run PHP and MySQL.
- MySQL database setup.

### Steps
1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/VoyageVault.git
   ```
2. Start the Apache and MySQL services using XAMPP or another server.
3. Create a MySQL database named `UK_trip` and a table `trip` using the following SQL command:
   ```sql
   CREATE DATABASE UK_trip;
   USE UK_trip;
   CREATE TABLE trip (
       id INT AUTO_INCREMENT PRIMARY KEY,
       Name VARCHAR(255),
       Age INT,
       Gender VARCHAR(50),
       Phone VARCHAR(15),
       Email VARCHAR(255),
       Any_Description TEXT,
       Date_Time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```
4. Place the project files inside the `htdocs` folder of your XAMPP installation.
5. Open `http://localhost/VoyageVault/index.php` in your browser.
6. Fill out and submit the form to add entries to the database.


## Usage
1. Open the form in a browser.
2. Enter your details (name, age, gender, phone, email, and additional description).
3. Click the submit button to register your details.
4. A confirmation message will be displayed on successful submission.



