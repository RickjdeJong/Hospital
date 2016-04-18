<?php
$active1 = '<li><a href="../index.php">Home</a></li>';
$active2 = '<li><a href="../patients/index.php" id="active">Patients</a></li>';
$active3 = '<li><a href="../clients/index.php">Clients</a></li>';
$active4 = '<li><a href="../species/index.php">Species</a></li>';
require_once "index.logic.php";
include "../common/header.php";
include "../common/sidemenu.php";
?>
	<div class="text">
		<h1>Patients</h1>
		<h2>de patienten van onze kliniek.</h2>
	</div>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href="?orderColumn=name&orderDirect=<?=checkDirect('name')?>">Name</a></th>
				<th><a href="?orderColumn=species&orderDirect=<?=checkDirect('species')?>">Species</a></th>
				<th><a href="?orderColumn=status&orderDirect=<?=checkDirect('status')?>">Status</a></th>
				<th><a href="?orderColumn=gender&orderDirect=<?=checkDirect('gender')?>">Gender</a></th>
				<th><a href="?orderColumn=clientname&orderDirect=<?=checkDirect('clientname')?>">Client</a></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
foreach ($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['clientname']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
endforeach;
?>
		</tbody>
	</table>

<?php
include "../common/footer.php";
?>