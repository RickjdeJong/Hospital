<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Species:</label>
			<select name="species">
<?php 
	foreach ($speciess as $species):
?>
				<option value="<?=$species['name']?>"><?=$species['name']?></option>
<?php 
	endforeach; 
?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="name">Gender:</label>
			<input type="radio" name="gender" value="Man">Man
			<input type="radio" name="gender" value="Vrouw">Vrouw
		</div>
		<div>
			<label for="name">Client:</label>
			<select name="clientID">
<?php 
	foreach ($clients as $client):
?>
				<option value="<?=$client['id']?>"><?=$client['name']?></option>
<?php 
	endforeach; 
?>
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>