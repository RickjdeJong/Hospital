<?php
	include '../common/order_by.php';
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "select * from species" . $orderQuery;
	$result = $db->query($query);
	
	$speciess = $result->fetch_all(MYSQLI_ASSOC);
?>