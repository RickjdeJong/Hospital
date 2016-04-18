<?php 

function checkDirect($column){
	global $orderColumn, $orderDirect;
	if($orderColumn == $column && $orderDirect == "asc"){
		return "desc";
	}else{
		return "asc";
	}
}

$orderQuery = "";

if ($_SERVER["REQUEST_METHOD"] == "GET"){

	$orderColumn = isset($_GET['orderColumn']) ? $_GET['orderColumn'] : null;
	$orderDirect = isset($_GET['orderDirect']) ? $_GET['orderDirect'] : null;

	if($orderColumn != null && $orderDirect != null){
		if($orderDirect != "asc" || $orderDirect != "desc") $orderDirect = "asc";
		$orderQuery = " order by " . $orderColumn . " " . $orderDirect;
	}else{
		$orderQuery = " order by id";
	}

}