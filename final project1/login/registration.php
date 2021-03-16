<?php
include('../include/header2.php');
?>
		<div class="loginbox">
			<form action="register_query.php" method="POST"
			style="padding-right:60px;padding-left:60px; padding-top:35px; ">	
				<h4 class="here">Register here...</h4>
					<input type="text"  name="firstname"  placeholder="Firstname"/>
					<br />
					<input type="text"  name="lastname"  placeholder="Lastname" />
					<br />
					<input type="text" name="username"placeholder="Username" />
					<br />
					<input type="password" name="password"  placeholder="Password"/>
				<br />
				<div >
					<button  name="register"
					style="padding-left: 65px; padding-right: 65px;  margin-top: 30px;margin-bottom: 5px; 
					 border: none;background:#DC9001;color: #fff;
					 ">Register</button>
				</div>
				<a href="login.php" class="account" style="padding-top: 30px;margin-left: 70px;">Login</a>
			</form>
		</div>










