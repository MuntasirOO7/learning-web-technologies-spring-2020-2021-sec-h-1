<?php
	session_start();

	if(isset($_POST['submit']))
	{  
		
		$myfile = fopen('../model/data.json', 'r');
		$data = fread($myfile, filesize('../model/data.json'));


		$userloginfo = json_decode($data, true);

		$username = $userloginfo['user'];
		$password = $userloginfo['password'];

		if($username == "" || $password == "")
		{
			echo "null submission...";
		}
		else
		{
			if($username == $_POST['username'] && $password == $_POST['password']){
				$_SESSION['flag'] = true;
				echo("Log in successfull");
			
			}
			else
			{
				echo "Please inpur correct info";
			}
		}
	}


?>