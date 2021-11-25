<?php
session_start();
$logged_in_user = $_GET['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSform1.css" />
    <title>Add Book</title>
</head>

<body>
    <section>
        <div class="circle"></div>
        <header>
            <img src="../images/logo.png" class="logo">
            <ul>
                <li><a href="../pages/HSindex.php" name="home" id="home">Home</a></li>
                <li><a href="../pages/HSlogout.php">Log-Out</a></li>
            </ul>
        </header>
        <div class="container">
            <div class="main">
                <h3>Add Book</h3>
                <span id="error">
                    <?php
                    if (!empty($_SESSION['addbook_error'])) {
                        echo $_SESSION['addbook_error'];
                        unset($_SESSION['addbook_error']);
                    }
                    ?>
                </span>
                <form action="../validation/HSaddbook_validate.php" method="POST" enctype="multipart/form-data">
                    <label>Title: <span>*</span></label>
                    <input name="title" id="title" type="text" placeholder="Rich Dad Poor Dad">
                    <label>Author: <span>*</span></label>
                    <input name="author" id="author" type="text" placeholder="Robert Kiyosaki">
                    <label>Year: <span>*</span></label>
                    <input name="year" id="year" type="text" placeholder="1997">
                    <input name="reset" id="reset" type="reset" value="Reset" />
                    <input name="next" id="next" type="submit" value="Next" />
                </form>
            </div>
            <div class="imagebox">
                <img src="../images/psc.png" class="book1">
            </div>
        </div>
    </section>
</body>

</html>