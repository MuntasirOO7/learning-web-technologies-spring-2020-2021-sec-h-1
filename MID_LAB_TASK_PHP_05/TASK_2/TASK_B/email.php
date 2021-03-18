<?php
	
		$email = $_POST['email'];

		if($email == ""){
			echo "null submission";
		}else{
			echo $email;
		}
?>

<html>
<head>
	<title>Email input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>EMAIL</legend>
				<input type="text" name="email" value="">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>