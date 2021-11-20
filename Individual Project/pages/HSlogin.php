<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "../css/HSstyle.css"/>
	<title>Login</title>
</head>
<body class = "login-body">
	<section>
	<div class="circle"></div>
	<header>
		<img src = "../images/logo.png" class = "logo">
	</header>
	<div class="content">
		<div class="login-container">
		<span id = "error">
                <?php
                    if(!empty($_SESSION['login_error']))
                    {
                        echo $_SESSION['login_error'];
                        unset($_SESSION['login_error']);
                    }
                ?>
            </span>
			<form action = "../validation/HSlogin_validate.php" method = "POST" class = "login-form">
				<h2>Login</h2>
			<div class="input-group">
				<input name = "email" id = "email" type = "text" placeholder = "Email"/>
			</div>
			<div class="input-group">
				<input name = "password" id = "password" type = "password" placeholder = "********"/>
			</div>
			<div class="input-group">
				<button name = "login" id = "login" type = "Submit" class = "btn">Login</button>
			</div>
			<div class="checkbox">
				<input type="checkbox" name="remember" id = "remember" value ="1"><h5>Remember Me</h5>
			</div>
			<p class = "register-text">Don't Have An Account? <a href = "../pages/HSregistration.php"> Register Here</a></p>
			</form>
		</div>
		<div class="imagebox">
        	<img src = "../images/bm.png" class = "book1">
    	</div>
	</div>
	</section>
</body>
</html>


