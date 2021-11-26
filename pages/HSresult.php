<?php
session_start();
require_once '../validation/HighSchoolBooks_DB.php';
$logged_in_user=$_GET['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSresult.css" />
    <title>Details Dashboard</title>
</head>

<body>
    <form action="" method="POST">
        <div class="side-menu">
            <div class="brand-name">
                <h1>Details</h1>
            </div>
            <ul>
                <li class="dashboard-button"><img src="../images/dashboard.png" alt="">&nbsp; Dashboard</li>
            </ul>
            <button type="submit" class="btn" name="logout-button" <?php if (isset($_POST['logout-button'])) {
                                                                        header("location:../pages/HSlibrarian.php?name=$logged_in_user");
                                                                    } ?>>
                <span class="logout-text">Back</span>
                <span class="logout-icon">
                    <ion-icon name="arrow-back-outline"></ion-icon>
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
                <div class="tablediv">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Year Published</th>
                                <th>ISBN</th>
                                <th>Call Number</th>
                                <th>Subject Area</th>
                                <th>No. of Copies</th>
                                <th>Book Cover</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $query = "SELECT * FROM book";
                            $result = mysqli_query($conn, $query);
                            if ($result->num_rows > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row['title'];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row['author'];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row['year'];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row['isbn'];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row['callno'];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row['subjectarea'];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row['quantity'];
                                    echo "</td>";
                                    echo "<td>";
                                    echo "<img src = '../files/" . $row['bookcover'] . "' alt = '' >";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<script>alert('0 results')</script>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>