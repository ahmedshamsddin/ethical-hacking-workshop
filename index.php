<?php
	include 'db.php';

	$sql = "SELECT email FROM emails WHERE id = 1";
	$result = $conn->query($sql);

	$currentEmail = "";

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$currentEmail = $row["email"];
		}
	} else {
		echo "No e-mail found";
	}
?>

<html>
	<head>
		<title>Change E-Mail Address</title>
	</head>

	<body>
		<h1>Your current e-mail: <?php echo $currentEmail ?></h1>
		<h1>Change e-mail</h1>

		<form method="POST" action="update-email.php">
			<label for="newEmail">New E-Mail:</label>
			<input type="email" id="newEmail" name="newEmail" required><br><br>
			<input type="submit" name="submit">
		</form>
	</body>
</html>
