<?php
session_start();
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query the database
    $sql = "SELECT * FROM users_db WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        // Login successful
        $row = mysqli_fetch_assoc($result);
        $_SESSION["email"] = $email;
        $_SESSION["username"] = $row["username"];
        if ($email === 'admin@gmail.com' && $password === 'cyber') {
            // Redirect to the private site for admin
            header("Location: admin.php");
            exit();
        } else {
            // Redirect to the home page for regular users
            header("Location: home.php");
            exit();
        }
    } else {
        // Login failed
        $error = "Invalid email or password";
    }
}

// Close the database connection
$conn->close();
?>