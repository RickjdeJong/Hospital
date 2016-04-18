<?php
	include '../common/order_by.php';
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "select * from client" . $orderQuery;
	$result = $db->query($query);
	
	$clients = $result->fetch_all(MYSQLI_ASSOC);
?>