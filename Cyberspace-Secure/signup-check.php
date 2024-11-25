<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['re_password'])) {

    // Sanitize function to remove malicious characters
    function sanitize($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
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
    // Sanitizing all the POST fields variables
    $uname = sanitize($_POST['uname']);
    $pass = sanitize($_POST['password']);
    $re_pass = sanitize($_POST['re_password']);
    $email = sanitize($_POST['email']);

    $user_data = 'uname=' . $uname . '&email=' . $email;

    //Checks if there is any empty field
    if (empty($uname)) {
        header("Location: signup.php?error=User Name is required&$user_data");
        exit();
    } elseif (empty($pass)) {
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    } elseif (empty($re_pass)) {
        header("Location: signup.php?error=Re Password is required&$user_data");
        exit();
    } elseif (empty($email)) {
        header("Location: signup.php?error=Email is required&$user_data");
        exit();
    } elseif ($pass !== $re_pass) {
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
        exit();
    } elseif (!isPasswordStrong($pass)) {
        header("Location: signup.php?error=Password is not strong enough&$user_data");
        exit();
    } else {
        // Check if the username is already taken
        $sql = "SELECT * FROM encryp_db WHERE username=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: signup.php?error=The username is taken, try another&$user_data");
            exit();
        } else {
            // Hash the password securely-Bcrypt algorithm
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            // Insert the user's information into the database
            $sql2 = "INSERT INTO encryp_db (username, email, password) VALUES (?, ?, ?)";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bind_param("sss", $uname, $email, $hashed_password);
            $stmt2->execute();

            if ($stmt2->affected_rows > 0) {
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: signup.php?error=Unknown error occurred&$user_data");
                exit();
            }
        }
    }

} else {
    header("Location: signup.php");
    exit();
}
?>