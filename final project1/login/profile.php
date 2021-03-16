<!DOCTYPE html>
<?php
include("../include/header2.php");
	require 'conn.php';
	session_start();
?>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/honyee.css"/>
	</head>
<body>
<br />
			<?php
			    $_SESSION["user"] = true;
				$id = $_SESSION['user'];
				$sql = $conn->prepare("SELECT * FROM `users` WHERE `id`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
				
			?>
 <div class="profile" style="border: 10px solid #007963;padding: 25px;">
    <img src="../images/find_user.png" alt="profile"style=" margin-left: 40%;" >
        <h1>Hi, <i><b><?php echo $fetch['first_name']." ". $fetch['last_name']?></b></i>. Welcome to our site.</h1>
        <center><h2>You can visite your profile any time</h2></center>
        <p>
        <a href="logout.php" class="btn"style=" margin-left: 33%;background-color: #DC9001;
color: #EFF3C4;">Sign Out of Your Account</a><br><br>
       
    </div>
</body>
</html>