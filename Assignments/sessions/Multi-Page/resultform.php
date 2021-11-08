<?php
    session_start();
    if(isset($_POST['submit'])) {
        if(!empty($_SESSION['POST'])) {
            if(empty($_POST['al1'])
            || empty($_POST['al2'])
            || empty($_POST['city'])
            || empty($_POST['pin'])
            || empty($_POST['state'])) {
                $_SESSION['error_page3'] = "* fields cannot be left empty.";
                header("location: page3.php");
            } else {
                foreach($_POST as $key => $value) {
                    $_SESSION['POST'][$key] = $value;
                }
            }
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['contact'] = $_POST['contact'];
            $_SESSION['religion'] = $_POST['religion'];
            $_SESSION['nationality'] = $_POST['nationality'];
            $_SESSION['gender'] = $_POST['gender'];
            $_SESSION['qualification'] = $_POST['qualification'];
            $_SESSION['experience'] = $_POST['experience'];
            $_SESSION['al1'] = $_POST['al1'];
            $_SESSION['al2'] = $_POST['al2'];
            $_SESSION['city'] = $_POST['city'];
            $_SESSION['pin'] = $_POST['pin'];
            $_SESSION['state'] = $_POST['state'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <div class = "rcontainer">
        <div class = "rmain">
            <h3>Here Is What You Entered</h3>
        </div>
        <form action = "page3.php" method = "POST">
            <label>Full Name:</label>
            <input type = "text" value = "<?php echo $_SESSION['name']; ?>">
            <label>Email:</label>
            <input type = "text" value = "<?php echo $_SESSION['email']; ?>">
            <label>Contact:</label>
            <input type = "text" value = "<?php echo $_SESSION['contact']; ?>">
            <label>Religion:</label>
            <input type = "text" value = "<?php echo $_SESSION['religion']; ?>">
            <label>Nationality:</label>
            <input type = "text" value = "<?php echo $_SESSION['nationality']; ?>">
            <label>Gender:</label>
            <input type = "text" value = "<?php echo $_SESSION['gender']; ?>">
            <label>Education Qualification:</label>
            <input type = "text" value = "<?php echo $_SESSION['qualification']; ?>">
            <label>Job Experience:</label>
            <input type = "text" value = "<?php echo $_SESSION['experience']; ?>">
            <label>Address 1:</label>
            <input type = "text" value = "<?php echo $_SESSION['al1']; ?>">
            <label>Address 2:</label>
            <input type = "text" value = "<?php echo $_SESSION['al2']; ?>">
            <label>City:</label>
            <input type = "text" value = "<?php echo $_SESSION['city']; ?>">
            <label>Zip Code:</label>
            <input type = "text" value = "<?php echo $_SESSION['pin']; ?>">
            <label>Parish/State:</label>
            <input type = "text" value = "<?php echo $_SESSION['state']; ?>">
        </form>
    </div>
</body>
</html>