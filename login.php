<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "password_generator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE username = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        if (password_verify($password, $hashed_password)) {
            $_SESSION['userid'] = $id;
            $_SESSION['username'] = $username;
            // Redirect to the logged in page if successful
            echo "<script>
                    alert('Login successful');
                    window.location.href = 'loggedinpage.html';
                  </script>";
        } else {
            // Show an alert and reload the page if the password is incorrect
            echo "<script>
                    alert('Invalid password');
                    window.location.href = 'login.html';
                  </script>";
        }
    } else {
        // Show an alert and reload the page if the username is not found
        echo "<script>
                alert('No user found with that username');
                window.location.href = 'login.html';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>
