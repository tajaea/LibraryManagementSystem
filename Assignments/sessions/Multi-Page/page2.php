<?php
    session_start();
    if(isset($_POST['next']))
    {
        if(empty($_POST['name'])
        || empty($_POST['email'])
        || empty($_POST['contact'])
        || empty($_POST['password'])
        || empty($_POST['re-enter'])) {
        $_SESSION['error'] = "* fields cannot be left empty.";
        header("location: page1.php");
        } else {
            $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL))
            {
                if(!preg_match("/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/", $_POST['contact']))
                {
                    $_SESSION['error'] = "(XXX)XXX-XXXX is required.";
                    header("location: page1.php");
                } else {
                    if(($_POST['password']) == ($_POST['re-enter'])) 
                    {
                        foreach($_POST as $key => $value)
                        {
                            $_SESSION['post'][$key] = $value;
                        }
                    } else {
                        $_SESSION['error'] = "Password Does Not Match.";
                        header("location: page1.php");
                    }
                }
            } else {
                $_SESSION['error'] = "Invalid Email.";
                header("location: page1.php");
            }
        }
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['contact'] = $_POST['contact'];
    } else {
        if(empty($_SESSION['error_page2']))
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
            <h3>PHP Multi-Page Form</h3>
            <span id = "error">
                <?php
                    if(!empty($_SESSION['error_page2']))
                    {
                        echo $_SESSION['error_page2'];
                        unset($_SESSION['error_page2']);
                    }
                ?>
            </span>
            <form action = "page3.php" method = "POST">
                <label>Religion: <span>*</span></label>
                <input name = "religion" id = "religion" type = "text" placeholder = "Muslim" required>
                <label>Nationality: <span>*</span></label>
                <input name = "nationality" id = "nationality" type = "text" placeholder = "Jamaican" required>
                <label>Gender: <span>*</span></label>
                <input name = "gender" type = "radio" value = "Male" required>Male
                <input name = "gender" type = "radio" value = "Female" required>Female
                <label>Educational Qualification: <span>*</span></label>
                <select name = "qualification" id = "qualification">
                    <option value = "">Choose One</option>
                    <option value = "CXC" value = "">CXC</option>
                    <option value = "Maths Unlimited" value = "">Maths Unlimited</option>
                    <option value = "Bachelor's Degree" value = "">Bachelor's Degree</option>
                    <option value = "Masters Degree" value = "">Masters Degree</option>
                </select>
                <label>Job Experience: <span>*</span></label>
                <select name = "experience" id = "experience">
                    <option value = "">Choose One</option>
                    <option value = "Unemployed" value = "">Unemployed</option>
                    <option value = "Self Employed" value = "">Self Employed</option>
                    <option value = "Other" value = "">Other</option>
                    <input name = "reset" id = "reset" type = "reset" value = "Reset" />
                    <input name = "next" id = "next" type = "submit" value = "Next" />
                    <input name = "back" id = "back" type = "back" value = "Back" onclick = "history.back()" />    
                </select>
            </form>
        </div>
    </div>
</body>
</html>
