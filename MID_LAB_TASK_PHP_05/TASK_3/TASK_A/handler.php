<?php
	
	if(isset($_POST['submit']))
	{

		$dob = $_POST['dob'];

		if($dob == ""){
			echo "null submission";
		}else{
			echo $dob;
		}
	}else{
		echo "Invalid request...";
	}
?>