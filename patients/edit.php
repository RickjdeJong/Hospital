<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<div>
			<label for="name">Species:</label>
			<select name="species">
<?php 
	foreach ($speciess as $species):
?>
				<option value="<?=$species['name']?>" <?php if ($species['name'] == $patient['species']):?>selected<?php endif;?>><?=$species['name']?></option>
<?php 
	endforeach; 
?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label for="name">Gender:</label>
			<input type="radio" name="gender" value="Man" <?php if ($patient['gender'] == "Man"):?>checked<?php endif;?>>Man
			<input type="radio" name="gender" value="Vrouw" <?php if ($patient['gender'] == "Vrouw"):?>checked<?php endif;?>>Vrouw
		</div>
		<div>
			<label for="name">Client:</label>
			<select name="clientID">
<?php 
	foreach ($clients as $client):
?>
				<option value="<?=$client['id']?>" <?php if ($client['id'] == $patient['clientID']):?>selected<?php endif;?>><?=$client['name']?></option>
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