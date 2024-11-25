<?php
session_start();

// Check if the user is already logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}

// Retrieve the username from the session
$username = $_SESSION["username"];

// Handle logout
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("Location: login.php"); // Redirect to the login page after logout
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-image: url("bg.jpg");
            background-size: cover;
        }

        h1 {
            margin-top: -100px;
            margin-left: -40px;
            /* Adjust the margin as needed */
            text-align: left;
            /* Adjust the alignment as needed */
            color: red;
        }

        .home-button {
            position: absolute;
            top: 300px;
            left: 520px;
            background-color: black;
            border: none;
            border-radius: 5px;
            border-color: white;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }

        .logout-button {
            position: absolute;
            top: 300px;
            left: 620px;
            background-color: black;
            border: none;
            border-radius: 5px;
            border-color: white;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Welcome,
        <?php echo $username; ?>!
    </h1>

    <a class="home-button" href="homepage.php">HomePage</a>
    <form method="post" action="">
        <button class="logout-button" type="submit" name="logout">Logout</button>
    </form>

</body>

</html>
