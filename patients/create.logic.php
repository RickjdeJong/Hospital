<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$db = new mysqli('localhost','root','','hospital');

		$query = "select * from species";
		$result = $db->query($query);

		$speciess = $result->fetch_all(MYSQLI_ASSOC);

		$query = "select * from client";
		$result = $db->query($query);

		$clients = $result->fetch_all(MYSQLI_ASSOC);
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		$clientID = $db->escape_string($_POST["clientID"]);
		
		// Prepare query and execute
		$query = "insert into patient (name, species, status, gender, clientID) values ('$name','$species','$status', '$gender', '$clientID')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>