<?php
  
if ( isset ( $_POST [ 'submit' ] ) ) {

	$uname =  $_POST [ 'uname' ]   ;
	$uname_length = strlen($uname);
	$pass =   $_POST [ 'pass' ]  ;
	$pass_length = strlen($pass);
	
	
   	if ( $uname != "" && $pass != "" && preg_match("/^[a-zA-Z][a-zA-Z0-9._]/i", $uname) && preg_match("/[@#$%]/",$pass) && $uname_length >= 2 && 
   		$pass_length >= 8 ) {
       
          echo "Login Successfull";
    
          

        }
    else
    {
		echo "Fill All The File Correctly";
	}
}





?>