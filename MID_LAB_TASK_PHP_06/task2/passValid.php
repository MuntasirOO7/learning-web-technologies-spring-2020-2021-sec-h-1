<?php
	
	if (isset( $_POST['submit'])) {
		
		$Cpass = $_POST['cpass'];
		$Npass = $_POST['npass'];
		$RNpass = $_POST['rnpass'];

		if ($Cpass != "" && $Cpass != $Npass) {
			if ($Npass != "" && $Npass== $RNpass) {
				echo "Password Changed";
				# code...
			}
			else
			{
				echo "Password Mismatch";
			}
			# code...
		}
		else
		{
			echo "Request Invalid";
		}
		# code...
	}

?>
