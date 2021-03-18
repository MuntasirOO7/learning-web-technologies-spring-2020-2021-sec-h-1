<?php
	
	if (isset( $_POST['submit'])) {
		if (isset($_FILES['img'])) {
			$imgSize = $_FILES['img']['size'];
			$imgType = $_FILES['img']['type'];

			if ($imgSize<=4194304) {
				if ( $imgType =="image/jpeg" || $imgType=="image/jpg" || $imgType=="image/png") {
					echo "Photo Uploaded";
				}
				else
				{
					echo "invali type";
				}

				
			}
			else
			{
				echo "invalid file";
				
			}
		}

		
		
		

		
	}

?>
