🔐 Password Generator
A simple, stylish, and interactive password generator with user authentication support. This project lets users generate strong random passwords, register and log in using a PHP + MySQL backend, and enjoy a smooth front-end experience powered by HTML, CSS, and JavaScript.

 ![{4EA88C9B-3372-42B7-8855-B71F72C59035}](https://github.com/user-attachments/assets/2ecb99cf-cc7c-4da9-ba1b-7234955cb7ff)

🚀 Features
✅ Password generator with random uppercase, lowercase, digits, and symbols

🔒 User registration and login system

🎨 Clean and responsive UI with modern styling

🧠 Copy-to-clipboard functionality

🌐 Login-protected access to the password generator

📁 Project Structure
index.html – Home page with password generation

register.html, login.html – User auth pages

register.php, login.php – Server-side logic for user handling

loggedinpage.html – Protected page for authenticated users

script.js – Core password generation logic

style.css – Custom styling and layout

assets/ – Background images and UI media

🛠️ Tech Stack
Frontend: HTML, CSS, JavaScript

Backend: PHP

Database: MySQL (expects a password_generator database with users table)

🧪 How to Use
Clone the repository:

bash
Copy
Edit
git clone https://github.com/hk151109/Password-generator.git
Set up a local MySQL database named password_generator and create a users table:

sql
Copy
Edit
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);
Run the project with a local server (e.g. XAMPP, WAMP).

Register a new user and start generating passwords!

📌 Note
The project assumes a local database with default PHP mysqli settings.

Make sure your local PHP server has mysqli enabled.

👨‍💻 Author
Created by Harikrishnan
