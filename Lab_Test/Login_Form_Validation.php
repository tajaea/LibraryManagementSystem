<?php
session_start();
    if(isset($_POST['login']))
    {
        if(empty($_POST['email'])
        || empty($_POST['password'])) {
            $_SESSION['error'] = "* Fields cannot be left empty.";
            header("location:Login_Form.php");
        } else {
            $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL))
            {
                if(($_POST['password']) == ($_POST['password'])) 
                {
                    foreach($_POST as $key => $value)
                    {
                        $_SESSION['post'][$key] = $value;
                    }
                } else {
                    $_SESSION['error'] = "Password Does Not Match.";
                    header("location: page1.php");
                }                
            } else {
                $_SESSION['error'] = "Invalid Email.";
                header("location:Login_Form.php");                
            }                
        }
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header("location:Registration_Form.php");
    }
?>