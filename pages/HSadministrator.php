<?php
session_start();
require '../validation/HighSchoolBooks_DB.php';
$logged_in_user = $_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSlibsettings.css" type="text/css" />
    <title>Administrator Dashboard</title>
</head>

<body>

    <div class="side-menu">
        <div class="brand-name">
            <h1>Administrator</h1>
        </div>
        <ul>
            <?php echo "<li><a href='../pages/HSadministrator.php?name=$logged_in_user'><img src='../images/dashboard.png' alt=''>&nbsp; Dashboard</a></li>"; ?>
            <li class="settings-button"><img src="../images/system-update.png" alt="">&nbsp; Functionalities</li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <img src="../images/logo.png" class="logo">
            <div class="nav">
                <div class="user">
                    <?php
                    echo "<p>Welcome " . $logged_in_user . "</p>";
                    ?>
                    <div class="user-image">
                        <img src="../images/programmer.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="register-section">
                <div class="title">
                    <h2>Add Account</h2>
                </div>
                <span id="error">
                    <?php

                    if (!empty($_SESSION['addaccount_error'])) {
                        echo $_SESSION['addaccount_error'];
                        unset($_SESSION['addaccount_error']);
                    }
                    ?>
                </span>
                <?php echo "<form action='../validation/HSaddaccount_validate.php?name=$logged_in_user' method='POST' class='register-form'>"; ?>

                <div class="input-group">
                    <input name="name" id="name" type="text" placeholder="Name" />
                </div>
                <div class="input-group">
                    <input name="email" id="email" type="text" placeholder="Email" />
                </div>
                <label>Account Type</label>
                <select name="atype" id="atype">
                    <option value="">Choose One</option>
                    <option value="Librarian">Libarian</option>
                    <option value="Patron">Patrons</option>
                    <option value="Administrator">Administrator</option>
                </select>
                <div class="input-group">
                    <input name="password" id="password" type="password" placeholder="Password" />
                </div>
                <div class="input-group">
                    <input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password" />
                </div>
                <div class="input-group">
                    <button name="register" id="register" type="Submit" class="btn">Add Account</button>
                </div>

                </form>
            </div>
            <div class="details-section">
                <div class="title">
                    <h2>Edit Account</h2>
                </div>
                <span id="error">
                    <?php

                    if (!empty($_SESSION['editaccount_error'])) {
                        echo $_SESSION['editaccount_error'];
                        unset($_SESSION['editaccount_error']);
                    }
                    ?>
                </span>
                <form action="../validation/HSeditaccount_validate.php" method="POST" class="register-form">
                    <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        $query = "SELECT * FROM librarian WHERE email='$email'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);


                    ?>
                        <div class="input-group">
                            <input name="name" id="name" type="text" placeholder="Name" value="<?php echo $row['name'] ?>" required />
                        </div>
                        <div class="input-group">
                            <input name="email" id="email" type="text" placeholder="Email" value="<?php echo $row['email'] ?>" required />
                        </div>
                        <div class="input-group">
                            <input name="password" id="password" type="password" placeholder="Password" minlenght="8" />
                        </div>
                        <div class="input-group">
                            <input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password" minlenght="8" />
                        </div>
                        <div class="input-group">
                            <button name="edit" id="edit" type="Submit" class="btn">Update</button>
                        </div>
                    <?php
                    } else {
                        //echo "<script>alert('You have not login, please do so now!');</script>";
                        //sleep(3);
                        //header('location:HSlogin.php');

                    }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>