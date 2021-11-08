<?php
    session_start();
    if(isset($_POST['next']))
    {
        if(empty($_POST['gender'])
        || empty($_POST['nationality'])
        || empty($_POST['religion'])
        || empty($_POST['qualification'])
        || empty($_POST['experience'])) {
            $_SESSION['error_page2'] = "* fields cannot be left empty.";
            header("location: page2.php");
        } else {
            foreach($_POST as $key => $value)
            {
                $_SESSION['post'][$key] = $value;
            }
        }
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['nationality'] = $_POST['nationality'];
        $_SESSION['religion'] = $_POST['religion'];
        $_SESSION['qualification'] = $_POST['qualification'];
        $_SESSION['experience'] = $_POST['experience'];
    } else {
        if(empty($_SESSION['error_page3']))
        {
            header("location: page1.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Page Sessions</title>
    <link rel = "stylesheet" href = "multipage.css"/>
</head>
<body>
    <div class = "container">
        <div class = "main">
            <h3>PHP Multi Page Form</h3>
            <span id = "error">
                <?php
                    if(!empty($_SESSION['error_page3']))
                    {
                        echo $_SESSION['error_page3'];
                        unset($_SESSION['error_page3']);
                    }
                ?>
            </span>
            <form action = "resultform.php" method = "POST">
                <b>Complete Address: </b>
                <label>Address Line1: <span>*</span></label>
                <input name = "al1" id = "al1" type = "text" required>
                <label>Address Line2: <span>*</span></label>
                <input name = "al2" id = "al2" type = "text" required>
                <label>City: <span>*</span></label>
                <input name = "city" id = "city" type = "text" required>
                <label>Zip Code: <span>*</span></label>
                <input name = "pin" id = "pin" type = "text" required>
                <label>Parish/State: <span>*</span></label>
                <input name = "state" id = "state" type = "text" required>
                <input name = "reset" type = "reset" value = "Reset" />
                <input name = "submit" id = "submit" type = "submit" value = "Submit" />
                <input name = "back" type = "back" value = "Back" onclick = "history.back(-2)" />    
            </form>
        </div>
    </div>
</body>
</html>