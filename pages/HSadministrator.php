<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSadmdashboard.css" />
    <title>Administrator Dashboard</title>
</head>

<body>
    <form action="" method="POST">
        <div class="side-menu">
            <div class="brand-name">
                <h1>Administrator</h1>
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
                        <button class="searchbutton" type="submit"><img src="../images/search.png" alt=""></button>
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
                    </div>
                    <div class="addbook-image">
                        <img src="../images/book.png" alt="">
                    </div>
                    <button type="submit" class="addbutton" name="addbook-button" <?php if (isset($_POST['addbook-button'])) {
                                                                                        //include('../pages/HSaddbook.php');
                                                                                        header("location:../pages/HSaddbook.php");
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
                                                                                            //include('../pages/HSaddbook.php');
                                                                                            header("location:../pages/HSresult.php");
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