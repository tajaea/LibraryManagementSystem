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
                <h1>Delete Account</h1>
            </div>
            <ul>
                <li><img src="../images/dashboard.png" alt="">&nbsp; Dashboard</li>
            </ul>
            <div class="subnav">
                <button class="subnavbtn">Functionalities</button>
                <div class="subnav-content">
                    <a href="../pages/HSaddaccount.php">Add Account</a>
                    <a href="../pages/HSeditaccount.php">Edit Account</a>
                    <a href="../pages/HSeditaccount.php">Delete Account</a>
                </div>
            </div>
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
                    <div class="user">
                        <div class="user-image">
                            <img src="../images/programmer.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">

            </div>
        </div>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>