<?php
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
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        // Redirect to the logged in page if successful
        echo "<script>
                alert('Registration successful');
                window.location.href = 'loggedinpage.html';
              </script>";
    } else {
        // Show an alert and reload the page if unsuccessful
        echo "<script>
                alert('Registration failed: " . $conn->error . "');
                window.location.href = 'register.html';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>
