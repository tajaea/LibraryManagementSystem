<?php

session_start();
require_once '../validation/HighSchoolBooks_DB.php';
//$query = "SELECT * FROM librarian";
//$result = mysqli_query($conn, $query);
    if (isset($_POST['name'])){
        $_SESSION['patronName']=$_POST['name'];
    }
    $lname=$_SESSION['librarianName'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSrentalval.css" type="text/css" />
    <title>Guest Dashboard</title>
</head>

<body>
    <form action="" method="POST">
        <div class="side-menu">
            <div class="brand-name">
                <h1>Welcome</h1>
            </div>
            <ul>
                <li><a href="HSguest.php"><img src="../images/dashboard.png" alt="">&nbsp; Dashboard</a></li>
                

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
                        <p>Welcome,</p>
                    </div>
                    <div class="cart">
                            <a href="../pages/HScart.php"><img src="../images/cart.png" alt=""></a>
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
                    <input type="text" id="search" name="search" placeholder="Search"><button type="submit" name="submit" class="searchbtn"><img src="../images/search.png" alt=""></button></input>
                        
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
                            function send($name){
                                $_SESSION[$name]=$name;
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
                                            $names= explode(" ",$name);
                                            $title=$names[0];
                                            for($z=1;$z<sizeof($names);$z++){
                                                $title=$title.$names[$z];
                                            }
                                            if(isset($_POST[$title])){
                                                $_SESSION[$title]=$names;
                                                unset($_POST[$title]);
                                            }
                                            echo "<td>";
                                            echo "<img src = '../files/" . $row['bookcover'] . "' alt = '" . $title . "' >";
                                            echo "<button id='addcart' class='addcart' type='submit' name='" . $title . "' >Add to Cart</button>" ;
                                            echo "</td>";
                                            $x = $x + 1;

                                        
                                        }
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<script>alert('0 results')</script>";
                                }
                            }


                            $query = "SELECT * FROM book";
                            display($query,$conn);


                            if (isset($_POST['login'])) {
                                
                                
                                if (isset($_POST['search'])) {
                                    
                                    //echo "<script>alert('POSTED: '". $_POST['name']."');</script>";
                                   /* if (!empty($_POST['name'])) {

                                        $query = "SELECT * FROM librarian where name like '" . $_POST['name'] . "'";
                                        display($query, $conn);
                                    } else{
                                        echo "<script>alert('Something went wrong');</script>";
                                    }*/
                                    if ($_POST['atype'] == "Year") {
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
                                    //echo "<script>alert('You have not entered a anyhing to search')</script>";
                                }
                                
                            }
                            


                            
                            
                            ?>

                        </table>
                    </div>
                </div>
                <div class="available">
                    <div class="books">
                        <table >
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <!--<th>Author</th>
                                        <th>Year Published</th>
                                        <th>ISBN</th>
                                        <th>Call Number</th>
                                        <th>Subject Area</th>
                                        <th>No. of Copies</th>-->
                                        <th>Book Cover</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    
                                    $query = "SELECT * FROM book ";
                                    $result = mysqli_query($conn, $query);
                                    if ($result->num_rows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $name = $row['title'];
                                            $names= explode(" ",$name);
                                            $title="";
                                            for($z=0;$z<sizeof($names);$z++){
                                                $title=$title.$names[$z];
                                            }
                                            
                                            if(isset($_SESSION[$title])){
                                                //echo $_SESSION[$title];
                                                echo "<tr>";
                                                echo "<td>";
                                                echo $row['title'];
                                                echo "</td>";
                                                /*echo "<td>";
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
                                                echo "</td>";*/
                                                echo "<td>";
                                                echo "<img src = '../files/" . $row['bookcover'] . "' alt = '' >";
                                                echo "</td>";
                                                echo "</tr>";
                                                
                                                
                                            }
                                            
                                        }
                                    } else {
                                        echo "<script>alert('0 results')</script>";
                                    }

                                    
                                    ?>

                                </tbody>
                        </table>
                        <input type="submit" name="borrow" value="Borrow"></input><input type="submit" name="Clear" value="Clear Cart"></input>
                    </div>
                    <?php
                                    if (isset($_POST["borrow"])){
                                    $query = "SELECT * FROM book ";
                                    $queryc = "SELECT * FROM library_card where name='".$_SESSION['patronName']."'";
                                    $queryl = "SELECT * FROM librarian where name='".$_SESSION['librarianName']."'";
                                    $resultc = mysqli_query($conn, $queryc);
                                    $resultl = mysqli_query($conn, $queryl);
                                    $rowc = mysqli_fetch_assoc($resultc);
                                    $rowl = mysqli_fetch_assoc($resultl);
                                    $result = mysqli_query($conn, $query);
                                    if ($result->num_rows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $name = $row['title'];
                                            $names= explode(" ",$name);
                                            $title="";
                                            for($z=0;$z<sizeof($names);$z++){
                                                $title=$title.$names[$z];
                                            }
                                            
                                            if(isset($_SESSION[$title])){
                                                
                                                $isbn=$row['isbn'];
                                                $query = "INSERT INTO  borrow_book (cardID,isbn,libID) VALUES ('$rowc[cardID]', '$isbn','$rowl[libID]')";
                                                if (mysqli_query($conn, $query)) {
                                                    //$_SESSION['query'] = "User added successfully.";
                                                    header("location:../pages/HSlibrarian.php?name=$lname");
                                                } else {
                                                    echo "<script>alert('There was an error adding this user to the system');</script>";
                                                }
                                                   /*$query = "INSERT INTO librarian (name, email, password, type) VALUES ('$name', '$email', '$password', '$type')";
        if (mysqli_query($conn, $query)) {
            $_SESSION['query'] = "User added successfully.";
            header("location:../pages/HSadministrator.php?name=$logged_in_user");
        } else {
            echo "<script>alert('There was an error adding this user to the system');</script>";
        }*/                                
                                                
                                            }
                                            
                                        }
                                    } else {
                                        echo "<script>alert('0 results')</script>";
                                    }
                                    }
                                    mysqli_close($conn);
                                    ?>

            
                </div>

            </div>
            
        </div>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>