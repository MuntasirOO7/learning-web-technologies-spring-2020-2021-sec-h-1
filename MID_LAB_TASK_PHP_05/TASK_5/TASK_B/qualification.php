<?php
	
	if(isset($_POST['Submit']))
	{
		echo "qualification: ";
		$qualification = $_POST['qualification'];
		echo "$qualification \r\n";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Degree</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="qualification" value="SSC"> SSC
			<input type="checkbox" name="qualification" value="HSC"> HSC
			<input type="checkbox" name="qualification" value="BSc"> BSc
			<input type="checkbox" name="qualification" value="MSc"> MSc
			<hr>
			<input type="submit" name = "Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>