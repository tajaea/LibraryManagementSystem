<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "multipage.css"/>
    <title>Multi Page Sessions</title>
</head>
<body>
    <div class = "container">
        <div class = "main">
            <h3>PHP Multi-Page Form</h3>
            <span id = "error">
                <?php
                    if(!empty($_SESSION['error']))
                    {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                ?>
            </span>
            <form action = "page2.php" method = "POST">
                <label>Full Name: <span>*</span></label>
                <input name = "name" id = "name" type = "text" placeholder = "Tajae Anglin" required>
                <label>Email: <span>*</span></label>
                <input name = "email" id = "email" type = "email" placeholder = "tajaeanglin@outlook.com" required>
                <label>Contact: <span>*</span></label>
                <input name = "contact" id = "contact" type = "text" placeholder = "(876)469-7058" required>
                <label>Password: <span>*</span></label>
                <input name = "password" id = "password" type = "password" placeholder = "*********" required>
                <label>Re-Enter Password: <span>*</span></label>
                <input name = "re-enter" id = "re-enter" type = "password" placeholder = "*********"  required>
                <input name = "reset" id = "reset" type = "reset" value = "Reset" />
                <input name = "next" id = "next" type = "submit" value = "Next" />
            </form>
        </div>
    </div>
</body>
</html>