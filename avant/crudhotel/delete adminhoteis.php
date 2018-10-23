<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "projeto";

	// Create connection
	$conn = mysqli_connect($servername, $username, "", $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$id = $_GET["id"];

	$sql = "DELETE FROM hotel WHERE id=$id";

	if (mysqli_query($conn, $sql)) { 

	    header("Location: /avant/adminhoteis.php");
	    die();

	    //echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>