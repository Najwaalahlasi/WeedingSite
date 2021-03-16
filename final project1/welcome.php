<?php
include('include/header2.php');
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="CSS/honyee.css">
    <title>Profile</title>
</head>
<body>
    <div class="profile">
    <img src="images/find_user.png" alt="profile"style=" margin-left: 40%;" >
        <h1>Hi, <b><?php echo ($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
        <h2>You can visite your profile any time</h2>
        <p>
        <a href="reset-password.php" class="btn"style=" margin-left: 33%;">Reset Your Password</a><br><br>
        <a href="logout.php" class="btn">Sign Out of Your Account</a>
        <?php
         
        if(isset($_SESSION["loggedin"]['pre_id']) && $_SESSION["loggedin"]['pre_id'] == 1)
                          { ?>       
        <li class="sign"><a href="details.php">Admin</a></li>
        <?php } ?>
    </p>
    </div>
   
</body>
</html>