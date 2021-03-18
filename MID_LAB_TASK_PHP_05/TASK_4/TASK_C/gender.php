<?php
    if(isset($_POST['gender']) )
    {
        echo "Gender: ".$_POST['gender'];
    }
?>
<html>
<head>
	<title>Gender input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>GENDER</legend>
				 <input type='radio' name='gender' value='Male' <?php if(isset($_POST['gender'])){if($_POST['gender'] == "Male")echo "checked";}?>>Male

				 <input type='radio' name='gender' value='Female' <?php if(isset($_POST['gender'])){if($_POST['gender'] == "Female")echo "checked";}?>>Female	

            	<input type='radio' name='gender' value='Others' <?php if(isset($_POST['gender'])){if($_POST['gender'] == "Others")echo "checked";}?>>Others
            	<br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>