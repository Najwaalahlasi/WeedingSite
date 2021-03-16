<?php
session_start();
	require_once 'conn.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
		if(strlen( $_POST['password'])==8){
			try{
				$firstname =  $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				/* $hash=password_hash($password ,PASSWORD_DEFAULT); */
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `users` VALUES ('', '$username', '$password','$firstname', '$lastname',0)";
				//prepare
				$conn->exec($sql);
				$_SESSION["user"] = true;
				$_SESSION["username"] = $username;
			}catch(PDOException $e){
				echo $e->getMessage();
			}
					//$conn = null;
			header('location:profile.php');
		}
		else{
			echo"<script>alert('Please you must enter 8 char!')</script>
			<script>window.location = 'registration.php'</script>";
		}
		}else{
			echo"<script>alert('Please complete the required field!')</script>
				<script>window.location = 'registration.php'</script>";
		}
	}
?>