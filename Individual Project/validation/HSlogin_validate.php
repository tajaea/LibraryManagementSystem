<?php
    require 'HighSchoolBooks_DB.php';
    session_start();
    
        if(isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(empty($email))
            {
                $_SESSION['login_error'] = "* Email is Required.";
                header("location:../pages/HSlogin.php");                
            }else if(empty($password)) {
                $_SESSION['login_error'] = "* Password is Required.";
                header("location:../pages/HSlogin.php");                
            } else {
                $query = $conn->prepare("SELECT * FROM user WHERE email = ?");
                $query->execute();

                $rowCount = $query->num_rows;
                if($rowCount >= 1) {
                    $result = $query->fetch();

                    $user_id = $result['id'];
                    $user_username = $result['username'];
                    $user_name = $result['name'];
                    $user_email = $result['email'];
                    $user_type = $result['atype'];
                    $user_password = $result['password'];

                    if($email === $user_email) {
                        if(password_verify($password, $user_password)) {
                            $_SESSION['id'] = $user_id;
                            $_SESSION['username'] = $user_username;
                            $_SESSION['name'] = $user_name;
                            $_SESSION['email'] = $user_email;
                            $_SESSION['atype'] = $user_type;
                            header("location:../pages/HSaddbook.php");  
                        }
                    } else {
                        /*$_SESSION['login_error'] = "* Email or Password is incorrect.";
                        header("location:../pages/HSlogin.php");*/                        
                    }
                } else {
                    /*$_SESSION['login_error'] = "* Email or Password is incorrect.";
                    header("location:../pages/HSlogin.php");*/                       
                }
            }
        }    
?>