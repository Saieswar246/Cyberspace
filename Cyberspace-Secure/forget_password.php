<?php
// Assuming you have a database connection established
include("db_conn.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email and new password entered by the user
    $email = $_POST["email"];
    $newPassword = $_POST["new_password"];
    
    // Strong password detection function
    function isPasswordStrong($password)
    {
        // Password complexity requirements
        $minimumLength = 8;
        $requiresUppercase = true;
        $requiresLowercase = true;
        $requiresNumber = true;
        $requiresSpecialChar = true;

        // Check password length
        if (strlen($password) < $minimumLength) {
            return false;
        }

        // Check for uppercase letters
        if ($requiresUppercase && !preg_match('/[A-Z]/', $password)) {
            return false;
        }

        // Check for lowercase letters
        if ($requiresLowercase && !preg_match('/[a-z]/', $password)) {
            return false;
        }

        // Check for numbers
        if ($requiresNumber && !preg_match('/[0-9]/', $password)) {
            return false;
        }

        // Check for special characters
        if ($requiresSpecialChar && !preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password)) {
            return false;
        }

        return true;
    }

    // Validate the email and new password
    if (!isPasswordStrong($newPassword)) {
        header("Location: forget_password.php?error=Password is not strong enough");
        exit();
    } elseif (empty($email)) {
        header("Location: forget_password.php?error=Email is required to update password");
        exit();
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Hash the new password using the default algorithm-bcrypt
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update the password in the database
        $stmt = $conn->prepare("UPDATE encryp_db SET password = ? WHERE email = ?");
        $stmt->execute([$hashedPassword, $email]);

        // Display a success message to the user
        header("Location: forget_password.php?success=Your password has been reset successfully");
    } else {
        header("Location: forget_password.php?error=Invalid email address");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <style>
        body {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        * {
            font-family: sans-serif;
            box-sizing: border-box;
            color: white;
        }

        form {
            width: 500px;
            height: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: black;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        input {
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
            color: black;
        }

        label {
            color: white;
            font-size: 18px;
            padding: 10px;
        }

        .reset-button {
            float: left;
            background: black;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            border-color: white;
            margin-top: 50px;
            margin-left: 10px;
        }

        .reset-button:hover {
            opacity: .7;
        }

        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        .success {
            background: #D4EDDA;
            color: #40754C;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
    </style>
    <script>
        // JavaScript to redirect to login page after 10 seconds
        setTimeout(function () {
            window.location.href = "login.php";
        }, 40000);
    </script>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <h2>Reset Password</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success">
                <?php echo $_GET['success']; ?>
            </p>
        <?php } ?>


        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required>

        <input type="submit" value="Reset Password" class="reset-button">
    </form>
</body>

</html>