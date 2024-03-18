<?php 
session_start(); 
include ("db_conn.php");

if (isset($_POST['user_email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user_email = validate($_POST['user_email']);
	$password = validate($_POST['password']);

	if (empty($user_email)) {
		header("Location: index.php?error_login=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error_login=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_email='$user_email' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_email'] === $user_email && $row['password'] === $password) {
            	$_SESSION['user_email'] = $row['user_email'];
            	$_SESSION['user_full_name'] = $row['user_full_name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error_login=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error_login=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}