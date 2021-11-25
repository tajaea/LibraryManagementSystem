<?php
session_start();
$logged_in_user=$_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSlibdashboard.css" type="text/css" />
    <title>Librarian Dashboard</title>
</head>

<body>
    <form action="" method="POST">
        <div class="side-menu">
            <div class="brand-name">
                <h1>Librarian</h1>
            </div>
            <ul>
                <li class="dashboard-button"><img src="../images/dashboard.png" alt="">&nbsp; Dashboard</li>
                <li><img src="../images/search.png" alt="">&nbsp; Search Library Card</li>
                <?php echo "<li><a href='../pages/HSlibrariansettings.php?name=$logged_in_user'><img src='../images/system-update.png' alt=''>&nbsp; Settings</a></li>"; ?>
                <!--<li><a href="../pages/HSlibrariansettings.php?name=$logged_in_user"><img src="../images/system-update.png" alt="">&nbsp; Settings</a></li>-->
            </ul>
            <button type="submit" class="btn" name="logout-button" <?php if (isset($_POST['logout-button'])) {
                                                                        header("location:../pages/HSlogout.php");
                                                                    } ?>>
                <span class="logout-text">Exit</span>
                <span class="logout-icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
            </button>
        </div>
        <div class="container">
            <div class="header">
                <img src="../images/logo.png" class="logo">
                <div class="nav">
                    <!--<div class="search">
                        <input type="text" placeholder="Search">
                        <button class="searchbutton" type="submit"><img src="../images/search.png" alt=""></button>
                    </div>-->
                    <div class="user">
                        <?php 
                            echo "<p>Welcome ".$logged_in_user."</p>"; 
                        ?>
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
                    </div>
                    <div class="addbook-image">
                        <img src="../images/book.png" alt="">
                    </div>
                    <button type="submit" class="addbutton" name="addbook-button" <?php if (isset($_POST['addbook-button'])) {
                                                                                        header("location:../pages/HSaddbook.php?name=$logged_in_user");
                                                                                    } ?>>
                        <span class="addtext">Add</span>
                        <span class="addicon">
                            <ion-icon name="add-outline"></ion-icon>
                        </span>
                    </button>
                </div>
                <div class="details-section">
                    <div class="title">
                        <h2>Book Details</h2>
                    </div>
                    <div class="details-image">
                        <img src="../images/info.png" alt="">
                    </div>
                    <button type="submit" class="detailsbutton" name="details-button" <?php if (isset($_POST['details-button'])) {
                                                                                            header("location:../pages/HSresult.php?name=$logged_in_user");
                                                                                        } ?>>
                        <span class="detailstext">Details</span>
                        <span class="detailsicon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>