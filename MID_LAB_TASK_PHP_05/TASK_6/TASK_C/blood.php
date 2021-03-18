<?php
	echo $_POST['blood'];	
?>

<html>
<head>
	<title>Blood  Group</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>BLOOD GROUP</legend>
				<select name="blood">
					<option value="A+" <?php if(isset($_POST['blood'])){if($_POST['blood'] == "A+")echo "checked";}?>>A+</option>
					<option value="B+" <?php if(isset($_POST['blood'])){if($_POST['blood'] == "B+")echo "checked";}?>>B+</option>
					<option value="O+" <?php if(isset($_POST['blood'])){if($_POST['blood'] == "O+")echo "checked";}?>>O+</option>
					<option value="AB+" <?php if(isset($_POST['blood'])){if($_POST['blood'] == "AB+")echo "checked";}?>>AB+</option>
					<option value="A-" <?php if(isset($_POST['blood'])){if($_POST['blood'] == "A-")echo "checked";}?>>A-</option>
					<option value="B-" <?php if(isset($_POST['blood'])){if($_POST['blood'] == "B-")echo "checked";}?>>B-</option>
					<option value="O-" <?php if(isset($_POST['blood'])){if($_POST['blood'] == "O-")echo "checked";}?>>O-</option>
					<option value="AB-" <?php if(isset($_POST['blood'])){if($_POST['blood'] == "AB-")echo "checked";}?>>AB-</option>
				</select>
				<br>
				<br>
					<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>