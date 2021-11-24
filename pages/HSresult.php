<?php
session_start();
require_once '../validation/HighSchoolBooks_DB.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSresult.css" />
    <title>Summary</title>
</head>

<body>
    <header>
        <img src="../images/logo.png" class="logo">
    </header>
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
                if ($result->num_rows > 0){
                    while($row = mysqli_fetch_assoc($result)){
                   
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
                                echo "<img src = '../files/".$row['bookcover']."' alt = '' >";
                            echo "</td>";
                        echo "</tr>";
                    }
                }else{
                echo "<script>alert('0 results')</script>";
                }
        ?>
            
        </tbody>
    </table>
</body>

</html>