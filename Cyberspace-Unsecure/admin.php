<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['email']) || $_SESSION['email'] !== 'admin@gmail.com') {
    header('Location: login.php'); // Redirect to the login page if not logged in as admin
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin portal</title>
    <style>
        body {
            background-color: black;
            color: white;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            font-size: 36px;
        }

        .image-container {
            display: flex;
            justify-content: center;
        }

        .image-container img {
            max-width: 300px;
            height: auto;
            margin: 10px;
        }

        .bar-graph {
            max-width: 500px;
            height: auto;
        }

        .button-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .button-container button {
            margin: 5px;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
        }

        .button-group {
            margin-top: 20px;
        }

        .button-group button {
            margin: 5px;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <!-- Display the welcome message for the admin -->
    <h1>Welcome, Admin!</h1>

    <!-- Button container for Home and Logout buttons -->
    <div class="button-container">
        <button onclick="location.href='home.php'">Home</button>
        <button onclick="location.href='logout.php'">Logout</button>
    </div>

    <!-- Display graphical images -->
    <div class="image-container">
        <img class="image" src="product-graph.png" alt="Product Graph">
        <img class="image" src="product-chart.png" alt="Pie Chart">
    </div>

    <!-- Button group for user details, product sales reports, and customer card details -->
    <div class="button-group">
        <button onclick="location.href='user_details.php'">User Details</button>
        <button onclick="location.href='sales_report.php'">Product Sales Reports</button>
        <button onclick="location.href='product_purchase_details.php'">Products Purchase Details</button>
    </div>
</body>
</html>
