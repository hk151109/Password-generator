# 🔐 Password Generator

A modern, secure, and user-friendly password generator web application with user authentication. Generate strong, customizable passwords with a clean interface and secure user management system.
 ![{4EA88C9B-3372-42B7-8855-B71F72C59035}](https://github.com/user-attachments/assets/2ecb99cf-cc7c-4da9-ba1b-7234955cb7ff)


## ✨ Features

### 🔑 Password Generation
- **Customizable Length**: Generate passwords from 4 to 128 characters
- **Character Sets**: Include/exclude uppercase, lowercase, numbers, and symbols
- **Real-time Generation**: Instant password creation with visual feedback
- **Copy to Clipboard**: One-click copying with confirmation

### 🔒 User Authentication
- **Secure Registration**: User account creation with validation
- **Login System**: Session-based authentication
- **Protected Access**: Password generator only accessible to logged-in users
- **User Session Management**: Secure login/logout functionality

### 🎨 User Interface
- **Responsive Design**: Works seamlessly on desktop and mobile devices
- **Modern Styling**: Clean, intuitive interface with smooth animations
- **Dark Theme**: Easy on the eyes with professional appearance
- **Interactive Elements**: Hover effects and visual feedback

## 🏗️ Project Structure

```
Password-generator/
├── index.html              # Main password generator page
├── register.html           # User registration page
├── login.html             # User login page
├── loggedinpage.html      # Protected dashboard page
├── register.php           # Registration backend logic
├── login.php              # Login backend logic
├── script.js              # Password generation JavaScript
├── style.css              # Custom styles and layout
├── assets/                # Static assets
│   ├── background.jpg     # Background images
│   └── ui-elements/       # UI components
└── README.md              # Project documentation
```

## 🛠️ Technology Stack

| Component | Technology |
|-----------|------------|
| **Frontend** | HTML5, CSS3, JavaScript (ES6+) |
| **Backend** | PHP 7.4+ |
| **Database** | MySQL 5.7+ / MariaDB |
| **Server** | Apache/Nginx |
| **Styling** | Custom CSS with Flexbox/Grid |

## 🚀 Installation & Setup

### Prerequisites
- **Web Server**: XAMPP, WAMP, LAMP, or similar
- **PHP**: Version 7.4 or higher
- **MySQL**: Version 5.7 or higher
- **Web Browser**: Modern browser with JavaScript enabled

### Step 1: Clone the Repository
```bash
git clone https://github.com/hk151109/Password-generator.git
cd Password-generator
```

### Step 2: Database Setup
1. **Start your MySQL server**
2. **Create the database**:
```sql
CREATE DATABASE password_generator;
USE password_generator;
```

3. **Create the users table**:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP NULL
);
```

### Step 3: Configure Database Connection
Update the database connection settings in your PHP files:
```php
// Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "password_generator";
```

### Step 4: Deploy to Web Server
1. Copy all files to your web server directory (e.g., `htdocs` for XAMPP)
2. Ensure PHP has `mysqli` extension enabled
3. Set appropriate file permissions

### Step 5: Access the Application
1. Open your web browser
2. Navigate to `http://localhost/Password-generator`
3. Register a new account or login if you already have one

## 📖 Usage Guide

### Getting Started
1. **Registration**: Create a new account with a unique username and secure password
2. **Login**: Access your account using your credentials
3. **Generate Passwords**: Use the password generator with custom settings
4. **Copy & Use**: Copy generated passwords to your clipboard

### Password Generation Options
- **Length**: Adjust slider or input field (4-128 characters)
- **Character Types**:
  - ✅ Uppercase letters (A-Z)
  - ✅ Lowercase letters (a-z)
  - ✅ Numbers (0-9)
  - ✅ Symbols (!@#$%^&*)
- **Generate**: Click the generate button for a new password
- **Copy**: Use the copy button to save password to clipboard

## 🔧 Configuration

### Security Settings
```php
// Session configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.use_strict_mode', 1);
```

### Password Validation
- Minimum length: 6 characters
- Must contain at least one letter
- Special characters allowed: `!@#$%^&*()_+-=[]{}|;:,.<>?`

## 🔐 Security Features

- **Password Hashing**: Uses PHP's `password_hash()` with secure algorithms
- **SQL Injection Protection**: Prepared statements for all database queries
- **Session Security**: Secure session configuration and management
- **Input Validation**: Client and server-side validation
- **CSRF Protection**: Session-based request validation

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. **Fork the repository**
2. **Create a feature branch**: `git checkout -b feature/AmazingFeature`
3. **Commit changes**: `git commit -m 'Add some AmazingFeature'`
4. **Push to branch**: `git push origin feature/AmazingFeature`
5. **Open a Pull Request**

### Contribution Guidelines
- Follow existing code style and conventions
- Add comments for complex logic
- Test your changes thoroughly
- Update documentation as needed

## 🐛 Troubleshooting

### Common Issues

**Database Connection Error**
- Verify MySQL server is running
- Check database credentials in PHP files
- Ensure `mysqli` extension is enabled

**Session Issues**
- Clear browser cookies and cache
- Check PHP session configuration
- Verify file permissions on server

**JavaScript Not Working**
- Enable JavaScript in browser
- Check browser console for errors
- Verify all script files are loading

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**Harikrishnan**
- GitHub: [@hk151109](https://github.com/hk151109)
- Project Link: [https://github.com/hk151109/Password-generator](https://github.com/hk151109/Password-generator)

