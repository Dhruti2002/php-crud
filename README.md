📚 PHP CRUD Application – Book Management System

This project is a simple PHP & MySQL-based CRUD application for managing books.
It includes features to Create, Read, Update, and Delete book records with a clean Bootstrap UI.

🚀 Features

✔ Add new books 
✔ View all books
✔ Edit existing book details
✔ Delete books
✔ MySQL database integration
✔ Fully responsive with Bootstrap
✔ Secure form handling

🛠️ Technologies Used

PHP (Core PHP)

MySQL / phpMyAdmin

HTML5 / CSS3

Bootstrap 5

XAMPP / WAMP / Laragon

🗄️ Database Setup

Open phpMyAdmin

Create a database:

crud


Import the SQL file located at:

db/crud.sql

SQL File Content (Your Database Schema)
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
);

⚙️ Configuration (connect.php)

Update your connect.php file if needed:

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

▶️ How to Run the Project

Copy the project folder to:

xampp/htdocs/


Start Apache and MySQL in XAMPP

Visit the project in your browser:

http://localhost/prroject_name/


You can now:

Add books

Edit books

Delete books

View book list


