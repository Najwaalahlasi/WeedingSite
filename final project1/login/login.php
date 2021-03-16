<?php
session_start();
include('../include/header2.php');
?>
		<div class="loginbox">
			<form action="login_query.php" method="POST"
			style="padding-right:60px;padding-left:60px; padding-top:40px; " >	
				<h4 class="here ">Login here...</h4>
					<input type="text" name="username"   placeholder="Username"required/>
					<br />
					<input type="password" name="password"  placeholder="Password"required />
				<br />
				<div class="">
					<button  name="login" 
					 style="padding-left: 72px; padding-right: 72px;  margin-top: 50px;margin-bottom: 50px;
					 border: none;background:#DC9001;;color: #fff; padding-top: 5px;padding-ottom: 5px;  "
					 >Login</button>
				</div>
				<a href="registration.php" class="account" style="padding-top: 30px;"> Registration</a>
			</form>
		</div>
		
