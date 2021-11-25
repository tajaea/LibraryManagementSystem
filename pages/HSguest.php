<?php

session_start();
require_once '../validation/HighSchoolBooks_DB.php';
$query = "SELECT * FROM book";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSguestdashboard.css" type="text/css" />
    <script defer type="text/javascript" src="../validation/scripts.js"></script>
    <title>Guest Dashboard</title>
</head>

<body>
    <form action="" method="POST">
        <div class="side-menu">
            <div class="brand-name">
                <h1>Guest</h1>
            </div>
            <ul>
                <li class="dashboard-button"><img src="../images/dashboard.png" alt="">&nbsp; Dashboard</li>
                <li><a href="HSguestsearch.php"><img src="../images/search.png" alt="">&nbsp; Search Library</a></li>

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
                    <div class="welcome">
                        <p>Welcome, Guest</p>
                    </div>
                    <div class="user">

                        <div class="user-image">
                            <img src="../images/programmer.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="available">
                    <label>Books Available</label>
                    <div class="books">
                        <table>
                            <?php
                            if ($result->num_rows > 0) {
                                for ($y = 0; $y < $result->num_rows; $y = $y + 3) {
                                    $x = 0;
                                    echo "<tr>";
                                    //$row = mysqli_fetch_assoc($result);
                                    while (($x < 3) && ($row = mysqli_fetch_assoc($result))) {

                                        $name=$row['title'];
                                        echo "<td>";
                                        echo "<a href = '../pages/HSguestbookdetails.php?name=$name'><img src = '../files/" . $row['bookcover'] . "' alt = '" . $row['title'] . "' ></a>";
                                        echo "<div class='overlay'>";
                                        echo "<div class='title' id='title'>" . $row['title'] . "</div>";
                                        echo "</div>";
                                        echo "<label>Quantity:</label>" . $row['quantity'];
                                        echo "</td>";
                                        $x = $x + 1;
                                    }
                                    echo "</tr>";
                                }
                            } else {
                                echo "<script>alert('0 results')</script>";
                            }
                            mysqli_close($conn);
                            ?>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>