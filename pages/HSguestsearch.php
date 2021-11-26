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
    <link rel="stylesheet" href="../css/HSguestsearch.css" type="text/css" />
    <title>Guest Dashboard</title>
</head>

<body>
    <form action="" method="POST">
        <div class="side-menu">
            <div class="brand-name">
                <h1>Guest</h1>
            </div>
            <ul>
                <li><a href="HSguest.php"><img src="../images/dashboard.png" alt="">&nbsp; Dashboard</a></li>
                <li class="searchlibrary-button"><img src="../images/search.png" alt="">&nbsp; Search Library</li>

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
                    <label>Search Type</label>
                    <select name="atype" id="atype">
                        <option value="">Choose One</option>
                        <option value="Title">Title</option>
                        <option value="Year">Year</option>
                        <option value="Subject">Subject Area</option>
                        <option value="Author">Author</option>
                    </select><br><br>
                    <input type="text" name="search" placeholder="Search"><button type="submit" name="submit" class="searchbtn"><img src="../images/search.png" alt=""></button></input>

                    <div class="books">
                        <table>
                            <?php
                            function stringSplit($string)
                            {
                                $arr1 = str_split($string);
                                $str = "%";
                                for ($x = 0; $x < sizeof($arr1); $x++) {
                                    $str = $str . $arr1[$x] . "%";
                                }
                                return $str;
                            }

                            function display($query, $conn)
                            {
                                $result = mysqli_query($conn, $query);
                                if ($result->num_rows > 0) {
                                    for ($y = 0; $y < $result->num_rows; $y = $y + 3) {
                                        $x = 0;
                                        echo "<tr>";
                                        while (($x < 3) && ($row = mysqli_fetch_assoc($result))) {
                                            $name = $row['title'];
                                            echo "<td>";
                                            echo "<a href = '../pages/HSguestbookdetails.php?name=$name'><img src = '../files/" . $row['bookcover'] . "' alt = '" . $row['title'] . "' ></a>";
                                            echo "<label>Quantity:</label>" . $row['quantity'];
                                            echo "</td>";
                                            $x = $x + 1;
                                        }
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<script>alert('0 results')</script>";
                                }
                            }

                            if (isset($_POST['submit'])) {
                                if (isset($_POST['search'])) {

                                    if ($_POST['atype'] == "Title") {

                                        $query = "SELECT * FROM book where title like '" . stringSplit($_POST['search']) . "'";
                                        display($query, $conn);
                                    } else if ($_POST['atype'] == "Year") {
                                        $query = "SELECT * FROM book where year like '" . stringSplit($_POST['search']) . "'";
                                        display($query, $conn);
                                    } else if ($_POST['atype'] == "Subject") {
                                        $query = "SELECT * FROM book where subjectarea like '" . stringSplit($_POST['search']) . "'";
                                        display($query, $conn);
                                    } else if ($_POST['atype'] == "Author") {
                                        $query = "SELECT * FROM book where author like '" . stringSplit($_POST['search']) . "'";
                                        display($query, $conn);
                                    } else {
                                        echo "<script>alert('You have not entered a search type')</script>";
                                    }
                                } else {
                                    echo "<script>alert('You have not entered a anyhing to search')</script>";
                                }
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