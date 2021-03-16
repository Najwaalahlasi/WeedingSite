<?php

	session_start();
	require_once 'conn.php';
	if(isset($_SESSION["user"]) && $_SESSION["user"] === true){
		header("location: profile.php");
		exit;
	}
	if(ISSET($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			$password = $_POST['password'];
		/* 	$hash=password_hash($password ,PASSWORD_DEFAULT); */
			$sql = "SELECT * FROM `users` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			
			if($row > 0) {
				$_SESSION["user"] = true;
				$_SESSION['staus'] =$fetch['staus'];
				$_SESSION['id'] =$fetch['id'];
				$_SESSION['username'] =$fetch['username'];
				if(!isset($_SESSION['user']['staus']) && $_SESSION['user']['staus'] == 1){
					header("location: profile.php");
				}
				else {
					header("location:../shop/admin/index.php");
				}
				
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'login.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'login.php'</script>
			";
		}
	}
?>