<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "labtestlogin.css"/>
    <title>LabTest</title>
</head>
<body>
    <section>
    <div class = "container">
        <div class = "main">
            <h3>Login</h3>
            <span id = "error">
                <?php
                    if(!empty($_SESSION['error']))
                    {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                ?>
            </span>            
            <form action = "Login_Form_Validation.php" method = "POST">
                <label>Email: <span>*</span></label>
                <input name = "email" id = "email" type = "email" placeholder = "tajaeanglin@outlook.com">
                </br>
                <label>Password: <span>*</span></label>
                <input name = "password" id = "password" type = "password" placeholder = "*********">
                </br>
                <button name = "login" id = "login" type = "Submit" class = "btn">Login</button> 
            </form>
        </div>
    </div>
    </section> 
</body>
</html>