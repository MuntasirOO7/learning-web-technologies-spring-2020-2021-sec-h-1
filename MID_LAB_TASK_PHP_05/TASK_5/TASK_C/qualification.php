<?php
	

	if(isset($_POST['SSC']) || isset($_POST['HSC']) || isset($_POST['BSc']) || isset($_POST['MSc']))
	{
		echo "qualification: ";

	    if(isset($_POST['SSC'])) echo "SSC ";
	    if(isset($_POST['HSC'])) echo "HSC ";
	    if(isset($_POST['BSc'])) echo "BSc ";
	    if(isset($_POST['MSc'])) echo "MSc ";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>qualification</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>qualification</legend>
            <input type='checkbox' name='SSC' value='SSC' <?php if(isset($_POST['SSC'])) {echo "checked";} ?> >SSC
            <input type='checkbox' name='HSC' value='HSC' <?php if(isset($_POST['HSC'])) {echo "checked";} ?> >HSC
            <input type='checkbox' name='BSc' value='BSc' <?php if(isset($_POST['BSc'])) {echo "checked";} ?> >BSc
            <input type='checkbox' name='MSc' value='MSc' <?php if(isset($_POST['MSc'])) {echo "checked";} ?> >MSc
			<hr>
			<input type="submit" name = "Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>