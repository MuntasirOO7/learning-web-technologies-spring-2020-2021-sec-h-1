<?php 
if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$rpassword = $_POST['repass'];

	if($username == "" || $email == "" || $password == ""|| $rpassword == "")
	{
		echo "<h1>Null submission...</h1>";
	}
	else
	{
		$userinfo= [
					 'user' => $username,
					 'email' => $email,
					 'password' => $password,
					 'rPassword' => $rpassword,
					 
				   ];
		#$jsonvalue = json_encode($userinfo);
		#echo($jsonvalue);
		
		$myfile = fopen('../model/data.json', 'w');
	    $data 	= fwrite($myfile, json_encode($userinfo));
	    echo "<h1>Successful</h1>";

	}

}


 ?>