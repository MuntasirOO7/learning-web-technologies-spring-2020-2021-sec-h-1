<?php
	
		$dob = $_POST['dob'];

		if($dob == ""){
			echo "null submission";
		}else{
			echo $dob;
		}
?>

<html>
<head>
	<title>Date of Birth input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>DATE OF BIRTH</legend>
				<input type="date" name="dob" value="">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>