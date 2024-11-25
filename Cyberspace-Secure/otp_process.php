<!DOCTYPE html>
<html>

<head>
    <title>OTP Process</title>
    <style>
        body {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: black;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .form-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-row label {
            color: white;
            font-size: 18px;
            padding: 10px;
        }

        .form-row input {
            display: block;
            border: 2px solid #ccc;
            width: 60%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
        }

        .form-row .otp-button {
            background: black;
            font-size: 16px;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            border-color: white;
            margin-left: 10px;
            cursor: pointer;
        }

        .otp-button:hover {
            opacity: 0.7;
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
</head>

<body>
    <?php
    session_start();
    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];

            // Generate a random OTP
            $otp = mt_rand(100000, 999999);

            // Store the OTP in a session for validation 
            $_SESSION['otp'] = $otp;

            // Send the OTP to the registered email address
            $subject = 'OTP Verification';
            $message = 'Your OTP is: ' . $otp;

            // Create a new PHPMailer instance
            $mail = new PHPMailer(true);

            try {
                // SMTP configuration
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'saiakkula141@gmail.com';
                $mail->Password = 'dhikipmfiunwgmhs'; //Use app password for security concerns
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Sender and recipient
                $mail->setFrom('saiakkula141@gmail.com', 'Cyberspace');
                $mail->addAddress($email);

                // Email content
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $message;

                // Send the email
                $mail->send();

                // Success message
                $successMessage = 'OTP sent successfully';
            } catch (Exception $e) {
                // Failed to send OTP
                $errorMessage = 'Failed to send OTP: ' . $mail->ErrorInfo;
            }
        } else if (isset($_POST['otp'])) {
            $otp = $_POST['otp'];

            // Verify the OTP
            if (isset($_SESSION['otp'])) {
                $storedOTP = $_SESSION['otp'];

                if ($otp == $storedOTP) {
                    // OTP is valid
                    unset($_SESSION['otp']);

                    // Redirect to the home page after successful login
                    header("Location: home.php");
                    exit();
                } else {
                    // Invalid OTP
                    $errorMessage = 'Invalid OTP';
                }
            } else {
                // OTP is not set
                $errorMessage = 'OTP not generated';
            }
        }
    }
    ?>

    <form method="post" action="otp_process.php">
        <h2>OTP Process</h2>

        <?php
        if (isset($errorMessage)) {
            echo '<p class="error">' . $errorMessage . '</p>';
        }

        if (isset($successMessage)) {
            echo '<p class="success">' . $successMessage . '</p>';
        }
        ?>

        <?php if (!isset($_SESSION['otp'])) : ?>
            <div class="form-row">
                <label>Enter your registered email address:</label>
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit" class="otp-button">Send OTP</button>
            </div>
        <?php else : ?>
            <div class="form-row">               
                <label>Enter the OTP:</label>
                <input type="text" name="otp" placeholder="OTP" required>
            </div>
            <div class="form-row">
                <button type="submit" class="otp-button">Verify OTP</button>
            </div>
        <?php endif; ?>
    </form>
</body>

</html>
