<?php
	
		$name = $_POST['myname'];

		if($name == ""){
			echo "null submission";
		}else{
			echo $name;
		}
?>

<html>
<head>
	<title>Name input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
				<input type="text" name="myname" value="">  <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>