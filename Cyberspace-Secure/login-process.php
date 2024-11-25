<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    //Sanitizing the fields
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    
    //Checks if there is any empty fields
    if (empty($email)) {
        header("Location: login.php?error=Email is required");
        exit();
    } elseif (empty($password)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM encryp_db WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            //Verifys the user input password with stored password
            if (password_verify($password, $row['password'])) {
                $_SESSION["email"] = $email;
                $_SESSION["username"] = $row["username"];
                header("Location: otp_process.php");
                exit();
            } else {
                header("Location: login.php?error=Invalid email or password");
                exit();
            }
        } else {
            header("Location: login.php?error=Invalid email or password");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>
