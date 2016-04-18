<?php
include '../common/order_by.php';

$db = new mysqli('localhost', 'root', '', 'hospital');

$query = "select patient.id, patient.name, patient.species, patient.status, patient.gender, client.id as clientiden, client.name as clientname from patient left join client on patient.clientID=client.id" . $orderQuery;
$result = $db->query($query);

$patients = $result->fetch_all(MYSQLI_ASSOC);
?>