<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSrental.css" />
    <title>Patron</title>
</head>

<body class="login-body">
    <section>
        <div class="circle"></div>
        <header>
            <img src="../images/logo.png" class="logo">
            <ul>
                <li><a href="../pages/HSlibrarian.php">Back</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="login-container">
                <span id="error">
                    <?php
                    if (!empty($_SESSION['login_error'])) {
                        echo $_SESSION['login_error'];
                        unset($_SESSION['login_error']);
                    }
                    ?>
                </span>
                <form action="../validation/HSrental_validate.php" method="POST" class="login-form">
                    <h2>Search Patron</h2>
                    <div class="input-group">
                        <input name="name" id="name" type="text" placeholder="Patron Name" />
                    </div>
                    <div class="input-group">
                        <button name="login" id="login" type="Submit" class="btn">Enter</button>
                    </div>
                </form>
            </div>
            <div class="imagebox">
                <img src="../images/art.jpg" class="book1">
            </div>
        </div>
    </section>
</body>

</html>