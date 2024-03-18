<?php 
session_start(); 
include ("db_conn.php");

if (isset($_POST['user_name']) && isset($_POST['password'])
    && isset($_POST['user_email']) && isset($_POST['tel'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user_name = validate($_POST['user_name']);
	$password = validate($_POST['password']);

	$user_email = validate($_POST['user_email']);
	$tel = validate($_POST['tel']);

	// $user_data = 'uname='. $uname. '&name='. $name;


	if (empty($user_name)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Password is required");
	    exit();
	}
	else if(empty($user_email)){
        header("Location: index.php?error=Email is required");
	    exit();
	}

	else if(empty($tel)){
        header("Location: index.php?error=Phone Number is required");
	    exit();
	}
	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE user_name='$user_name' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=The username is taken try another one ");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, user_email , password, tel) VALUES('$user_name', '$user_email', '$password' , '$tel')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred");
		        exit();
           }
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}