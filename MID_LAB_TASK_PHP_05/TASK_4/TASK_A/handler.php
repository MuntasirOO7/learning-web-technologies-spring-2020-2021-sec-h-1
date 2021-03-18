<?php
	
	if(isset($_POST['submit']))
	{

		//$gender = $_POST['gender'];

		if($_POST['gender'] == 'Male'){

			echo "Male";

		}elseif($_POST['gender'] == 'Female'){
			
			echo "Female";
		}
		elseif($_POST['gender'] == 'Others'){
			
			echo "Others";
		}
		else{
			echo "Null submission";
		}
	}else{
		echo "Invalid request...";
	}
?>