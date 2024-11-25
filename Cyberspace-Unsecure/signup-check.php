<?php
session_start();
include "db_conn.php";

if (
	isset($_POST['uname']) && isset($_POST['password'])
	&& isset($_POST['email']) && isset($_POST['re_password'])
) {

	$uname = ($_POST['uname']);
	$pass = ($_POST['password']);

	$re_pass = ($_POST['re_password']);
	$email = ($_POST['email']);

	$user_data = 'uname=' . $uname . '&email=' . $email;

    //Checks if there is username existed in the database
	$sql = "SELECT * FROM users_db WHERE username='$uname' ";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		header("Location: signup.php?error=The username is taken try another&$user_data");
		exit();
	} else {
		$sql2 = "INSERT INTO users_db(username, email, password) VALUES('$uname', '$email', '$pass')";//Inserts user input values into the database
		$result2 = mysqli_query($conn, $sql2);
		if ($result2) {
			header("Location: signup.php?success=Your account has been created successfully");

			exit();
		} else {
			header("Location: signup.php?error=unknown error occurred&$user_data");
			exit();
		}
	}
} else {
	header("Location: signup.php");
	exit();
}
?>