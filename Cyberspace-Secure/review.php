<?php
session_start();

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
include 'db_conn.php';

//Modifies all of the HTML special characters using "htmlspecialchars" function
if (isset($_POST['submit'])) { 
	$name = htmlspecialchars($_POST['name']); 
	$email =htmlspecialchars($_POST['email']); 
	$review = htmlspecialchars($_POST['review']); 
	$sql = "INSERT INTO review_db (name, email, review)
			VALUES ('$name', '$email', '$review')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		
	} else {
		echo "<script>alert('Review does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
	body {
		background-color: black;
	}
    

	.image {
	  position: absolute;
      top: 30px;
      left: 800px;
      width: 200px;
      height: 200px;
	  border: none;
	}
	.input-group {
		margin-bottom: 10px;
	}

	label {
		display: block;
		margin-bottom: 5px;
		color: white;
	}

	input[type="text"],
	input[type="email"],
	textarea {
		width: 50%;
		padding: 8px;
		border-radius: 4px;
		border: 1px solid #ccc;
		background-color: black;
		color: white;
	}

	textarea {
		resize: vertical;
	}

	.btn {
		padding: 8px 16px;
		background-color: #4CAF50;
		color: white;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	.users-reviews {
		margin-top: 20px;
		color: white;
	}

	.single-item {
		margin-bottom: 10px;
		border: 1px solid #ccc;
		padding: 10px;
		border-radius: 4px;
	}

	.single-item h4,
	.single-item a {
		margin: 0;
	}
</style>

<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name">
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email">
				</div>
			</div>
			<div class="input-group textarea">
				<label for="review">Review</label>
				<textarea id="review" name="review" placeholder="Write about your experience using our website."></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Review</button>
			</div>

			<img class="image" src="Review.jpg">
		</form>
		
		
		<div class="users-reviews">
			<?php

			$sql = "SELECT * FROM review_db";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

					?>
					<div class="single-item">
						<h4>
							<?php echo htmlspecialchars($row['name']); ?>
						</h4>
						<a href="mailto:<?php echo htmlspecialchars($row['email']); ?>"><?php echo htmlspecialchars($row['email']); ?></a>
						<p>
							<?php echo htmlspecialchars($row['review']); ?>
						</p>
					</div>
					<?php

				}
			}

			?>
		</div>

		
	</div>
</body>


</html>