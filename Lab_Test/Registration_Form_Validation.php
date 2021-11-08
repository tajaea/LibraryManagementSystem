<?php
session_start();
    if(isset($_POST['submit']))
    {
        if(empty($_POST['id_number'])
        || empty($_POST['first_name'])
        || empty($_POST['last_name'])
        || empty($_POST['gender'])
        || empty($_POST['ac_year'])
        || empty($_POST['cellphone'])
        || empty($_POST['email'])
        || empty($_POST['degree'])) {
            $_SESSION['error_page2'] = "* Fields cannot be left empty.";
            header("location:Registration_Form.php");
        } else {
            $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL))
            {
                if(!preg_match("/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/", $_POST['contact']))
                {
                    $_SESSION['error'] = "(XXX)XXX-XXXX is required.";
                    header("location:Registration_Form.php");
                }    
            } else {
                $_SESSION['error'] = "Invalid Email.";
                header("location:Registration_Form.php");                
            }                           
        }
        $_SESSION['id_number'] = $_POST['id_number'];
        $_SESSION['first_name'] = $_POST['first_name'];
        $_SESSION['last_name'] = $_POST['last_name'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['ac_year'] = $_POST['ac_year'];
        $_SESSION['cellphone'] = $_POST['cellphone'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['degree'] = $_POST['degree'];
        require_once 'files.php';
        header("location:submit.php");
    }
?>