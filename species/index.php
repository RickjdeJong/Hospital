<?php
$active1 = '<li><a href="../index.php">Home</a></li>';
$active2 = '<li><a href="../patients/index.php">Patients</a></li>';
$active3 = '<li><a href="../clients/index.php">Clients</a></li>';
$active4 = '<li><a href="../species/index.php" id="active">Species</a></li>';
require_once "index.logic.php";
include "../common/header.php";
include "../common/sidemenu.php";
?>
	<div class="text">
		<h1>Species</h1>
		<h2>de soorten dieren in onze kliniek.</h2>
	</div>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href="?orderColumn=name&orderDirect=<?=checkDirect('name')?>">Name</a></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
foreach ($speciess as $species):
?>
			<tr>
				<td><?=$species['name']?></td>
				<td class="center"><a href="edit.php?id=<?=$species['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$species['id']?>">delete</a></td>
			</tr>

<?php
endforeach;
?>
		</tbody>
	</table>

<?php
include "../common/footer.php";
?>