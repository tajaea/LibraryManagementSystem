<?php
$logged_in_user=$_GET['name'];
session_start();
?>
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
               <?php echo "<li><a href='../pages/HSlibrarian.php?name=$logged_in_user'>Back</a></li>";?>
            </ul>
        </header>
        <div class="content">
            <div class="login-container">
                <span id="error">
                    <?php
                    if (!empty($_SESSION['rental_error'])) {
                        echo $_SESSION['rental_error'];
                        unset($_SESSION['rental_error']);
                    }
                    ?>
                </span>
        <?php echo"<form action='../validation/HSrental_validate.php?name=$logged_in_user' method='POST' class='login-form'> ";?>
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