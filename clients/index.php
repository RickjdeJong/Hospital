<?php
$active1 = '<li><a href="../index.php">Home</a></li>';
$active2 = '<li><a href="../patients/index.php">Patients</a></li>';
$active3 = '<li><a href="../clients/index.php" id="active">Clients</a></li>';
$active4 = '<li><a href="../species/index.php">Species</a></li>';
require_once "index.logic.php";
include "../common/header.php";
include "../common/sidemenu.php";
?>
	<div class="text">
		<h1>Clients</h1>
		<h2>de medewerkers van onze kliniek.</h2>
	</div>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href="?orderColumn=name&orderDirect=<?=checkDirect('name')?>">Name</a></th>
				<th><a href="?orderColumn=descr&orderDirect=<?=checkDirect('descr')?>">Description</a></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
foreach ($clients as $client):
?>
			<tr>
				<td><?=$client['name']?></td>
				<td><?=$client['descr']?></td>
				<td class="center"><a href="edit.php?id=<?=$client['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$client['id']?>">delete</a></td>
			</tr>

<?php
endforeach;
?>
		</tbody>
	</table>

<?php
include "../common/footer.php";
?>