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
					<option value="A+">A+</option>
					<option value="B+">B+</option>
					<option value="O+">O+</option>
					<option value="AB+">AB+</option>
					<option value="A-">A-</option>
					<option value="B-">B-</option>
					<option value="O-">O-</option>
					<option value="AB-">AB-</option>
				</select>
				<br>
				<br>
					<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>