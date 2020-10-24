<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css'); ?>">
</head>
<body>
	<div class="hero">
			<div class="form-box">
				<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()"><b>Sign in</b></button>
				<button type="button" class="toggle-btn" onclick="register()"><b>Sign up</b></button>
			</div>
		<form action="<?php echo base_url("index.php/Home/login") ?>" method="post" id="login" class="input-group">

				    <input type='text' class='input-field' name='user_id' placeholder='User Id' required>
					<input type='password' class='input-field' name='password' placeholder='Enter Password' required>
				&nbsp;
				<?php
			if (isset($response))
			{
				?>
				<h2 style="color:teal"><?php echo $response ?></h2>
				&nbsp;
		<?php
			}
			?>
			<button type="submit" class="submit-btn">Log in</button>
			
		</form>
		<form action="<?php echo base_url("index.php/Home/register") ?>" method="post" id="register" class="input-group">
			<input type="text" class="input-field" name="user_id" placeholder="User Id" required>
			<input type="text" class="input-field" name="first_name" placeholder="First Name" required>
			<input type="text" class="input-field" name="last_name" placeholder="Last Name" required>
			<input type="password" class="input-field" name="password" placeholder="New Password" required>
			<input type="password" class="input-field" name="password" placeholder="Confirm Password" required>
			<!-- <input type="checkbox" class="chech-box"><span>I agree to the terms & conditions</span> -->
			&nbsp;
			<button type="submit" class="submit-btn">Register</button>
		</form>
		</div>
		
	 </div>

	 <script>
	 	var x = document.getElementById("login");
	 	var y = document.getElementById("register");
	 	var z = document.getElementById("btn");

	 	function register(){
	 		x.style.left = "-400px";
	 		y.style.left = "50px";
	 		z.style.left = "110px";
	 	}
	 		function login(){
	 		x.style.left = "50px";
	 		y.style.left = "450px";
	 		z.style.left = "0";
	 	}

	 </script>
	
</body>

</html>