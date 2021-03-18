
<html>
<head>
	<title>Email input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>EMAIL</legend>
				<input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?>">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>