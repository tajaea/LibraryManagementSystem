<?php
    session_start();
    $file = $_SESSION['file'];
    require_once 'HSsavefile.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../css/HSresult.css"/>
    <title>Summary</title>
</head>
<body>
    <header>
		<img src = "../images/logo.png" class = "logo">
	</header>
        <table class= "table">
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
                <tr>
                    <td>
                        <?php echo $_SESSION['title'];?>
                    </td>
                    <td>
                        <?php echo $_SESSION['author'];?>
                    </td>
                    <td>
                        <?php echo $_SESSION['year'];?>
                    </td>
                    <td>
                        <?php echo $_SESSION['isbn'];?>
                    </td>
                    <td>
                        <?php echo $_SESSION['call_number'];?>
                    </td>
                    <td>
                        <?php echo $_SESSION['subject_area'];?>
                    </td>
                    <td>
                        <?php echo $_SESSION['num_of_copies'];?>
                    </td>
                    <td>
                        <?php echo "<img src = '{$file}' alt = '' " ?>
                    </td>
                </tr>                
            </tbody>
        </table>
</body>
</html>