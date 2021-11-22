<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSdashboard.css" />
    <title>Librarian Dashboard</title>
</head>

<body>
    <form action="" method="POST">
        <div class="side-menu">
            <div class="brand-name">
                <h1>Librarian</h1>
            </div>
            <ul>
                <li><img src="../images/dashboard.png" alt="">&nbsp; Dashboard</li>
                <!--<li><img src="../images/document.png" alt="">&nbsp; Data Entry</li>-->
                <li><img src="../images/search.png" alt=""> Search Library Card</li>
                <!--<li><img src="../images/system-update.png" alt="">&nbsp; Book Details</li>-->
            </ul>
        </div>
        <div class="container">
            <div class="header">
                <img src="../images/logo.png" class="logo">
                <div class="nav">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <button type="submit"><img src="../images/search.png" alt=""></button>
                    </div>
                    <div class="user">
                        <a href="../pages/HSlogout.php" class="btn">Log-Out</a>
                        <div class="user-image">
                            <img src="../images/programmer.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="addbook-section">
                    <div class="title">
                        <h2>Add Book</h2>
                        <button type="submit" name="addbook-button" <?php if (isset($_POST['addbook-button'])) {
                                                                        //include('../pages/HSaddbook.php');
                                                                        header("location:../pages/HSaddbook.php");
                                                                    } ?>>ADD</button>
                    </div>
                </div>
                <div class="search-section">
                    <h2>Book Details</h2>
                    <button type="submit" name="addbook-button" <?php if (isset($_POST['addbook-button'])) {
                                                                    //include('../pages/HSaddbook.php');
                                                                    header("location:../pages/HSresult.php");
                                                                } ?>>Details</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>