<?php
$login = false;
$showError = false;
echo $_SERVER["REQUEST_METHOD"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
	include 'conn.php';
	$s_email=$_POST['email'];
	$s_pass=$_POST['password'];
	
	$sql = "Select * from student where s_email= '$s_email' AND s_pass='$s_pass'";
	$result = mysqli_query($conn, $sql);
	//echo var_dump($result);
	$num = mysqli_num_rows($result);
	//echo $num;

	if ($num == 1)
	{
			$login = true;
			session_start();
			$_SESSION['loggedin'] = true;
			//$_SESSION['loggedin'] = true;
			//$s_id=

			$_SESSION['user_email'] = $s_email;
			//echo "HEllo";
			header("Location: dashboard.php");

	} 
	else{
			$showError = "Invalid Credentials";
	}
}
    
?>