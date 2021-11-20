<?php
    require 'HighSchoolBooks_DB.php';
    session_start();
    
    if(isset($_POST['register']))
    {
            if(empty($_POST['username'])
            || empty($_POST['name'])
            || empty($_POST['email'])
            || empty($_POST['atype'])
            || empty($_POST['password'])
            || empty($_POST['cpassword'])) {      
                $_SESSION['registration_error'] = "* fields cannot be left empty.";
                header("location:../pages/HSregistration.php");
            } else {
                $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                {
                    if(($_POST['password']) == ($_POST['cpassword']))
                    {
                        $username = $_POST['username'];
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $type = $_POST['atype'];
                        $password = md5($_POST['password']);    
                    } else {
                        $_SESSION['registration_error'] = "Password Does Not Match.";
                        header("location:../pages/HSregistration.php");
                    }
                } else {
                    $_SESSION['registration_error'] = "Invalid Email.";
                    header("location:../pages/HSregistration.php");                
                }
                $query = "INSERT INTO user (username, name, email, type, password) VALUES ('$username', '$name', '$email', '$type', '$password')";
                if(mysqli_query($conn, $query)) {
                    echo "<script>alert('Form Submitted');</script>";
                    header("location:../pages/HSlogin.php");
                } else {
                    echo "<script>alert('Error');</script>";
                }  
                mysqli_close($conn);          
            }                      
    } else {
        echo "<script>alert('Error');</script>";
        header("location:../pages/HSrehistration.php");        
    } 
?>