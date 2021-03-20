 <?php 

	//connection
 /* $conn = mysqli_connect('localhost', 'root', '', 'webtech');

	if($conn){
		echo "success";
	}else{
		die('DB error');
	}

	$sql = 'select * from users';
	$result = mysqli_query($conn, $sql);

	echo "<table border=1> 
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Email</td>
				<td>Type</td>
			</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		
		echo 	"<tr>
					<td>{$row['id']}</td>
					<td>{$row['username']}</td>
					<td>{$row['email']}</td>
					<td>{$row['type']}</td>
				</tr>";
	}
	echo "</table>";

	//$sql = "select * from users where username='' and password=''"; 
	
	//query
	$sql = "insert into users values('', 'xyz', 'xyz', 'xyz@gmail.com', 'admin')"; 


	//array
	$result = mysqli_query($conn, $sql);
	print_r($result);


	//close
	mysqli_close($conn) */
	session_start();

		if(isset($_POST['submit'])){

			$username = $_POST['username'];
			$password = $_POST['password'];

			if($username == "" || $password == ""){
				echo "null submission...";
			}
			else {
				$user = $_SESSION['current_user'];

				if($username == $user['username'] && $password == $user['password']){
					$_SESSION['flag'] = true;
					header('location: ../view/home.php');
				}
				else{
					echo "invalid user";
				}
			}

	    }

?>

<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="../controller/logCheck.php">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""> </td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit"> 
						<a href="signup.html">Signup</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>