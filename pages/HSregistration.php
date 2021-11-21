<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/HSstyle.css" />
	<title>Register</title>
</head>

<body class="register-body">
	<section>
		<div class="circle"></div>
		<header>
			<img src="../images/logo.png" class="logo">
			<ul>
				<li><a href="../pages/HSindex.php">Home</a></li>
			</ul>
		</header>

		<div class="content">
			<div class="register-container">
				<span id="error">
					<?php
					if (!empty($_SESSION['registration_error'])) {
						echo $_SESSION['registration_error'];
						unset($_SESSION['registration_error']);
					}
					?>
				</span>
				<form action="../validation/HSregister_validate.php" method="POST" class="register-form">
					<h2>Register</h2>
					<div class="input-group">
						<input name="name" id="name" type="text" placeholder="Name" />
					</div>
					<div class="input-group">
						<input name="email" id="email" type="text" placeholder="Email" />
					</div>
					<label>Account Type</label>
					<select name="atype" id="atype">
						<option value="">Choose One</option>
						<option value="Libarian">Libarians</option>
						<option value="Patron">Patrons</option>
						<option value="Administrator">Administrator</option>
					</select>
					<div class="input-group">
						<input name="password" id="password" type="password" placeholder="Password" />
					</div>
					<div class="input-group">
						<input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password" />
					</div>
					<div class="input-group">
						<button name="register" id="register" type="Submit" class="btn">Register</button>
					</div>
					<p class="register-text-body">Have An Account?<a href="../pages/HSlogin.php"> Login Here</a></p>
				</form>
			</div>
			<div class="imagebox">
				<img src="../images/wbw.jpg" class="book1">
			</div>
		</div>
	</section>
</body>

</html>