<?php
	include 'db.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$newEmail = $_POST["newEmail"];
		$sql = "UPDATE emails SET email = '$newEmail' WHERE id = 1;";

		if ($conn->query($sql) == TRUE) {
			header("Location: index.php");
		} else {
			echo "Error updating e-mail: " . $conn->error;
		}
	} else {
		echo "Invalid Request";
	}
?>
