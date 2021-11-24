<?php
    session_start();
    require 'HighSchoolBooks_DB.php';
    if(isset($_POST['edit'])){
        if($_POST['password']==$_POST['cpassword']){
            $email1=$_SESSION['email'];
            $email=$_POST['email'];
            $name=$_POST['name'];
            $query = "UPDATE librarian set name='$name', email='$email' where email='$email1'";
            $_SESSION['email']=$email;
            if(mysqli_query($conn, $query)){
                if(!empty($_POST['password'])){
                    $password = password_hash($_POST['password'], MHASH_MD5);
                    $query = "UPDATE librarian set password='$password' where email='$email'";
                    if(mysqli_query($conn, $query)){
                        header('location:../pages/HSlibrariansettings.php');
                    }else{
                        
                        $_SESSION['edit_error']='Password Failed to Update';
                        header('location:../pages/HSlibrariansettings.php');
                    }
                }else{
                    header('location:../pages/HSlibrariansettings.php');
                }
            }else{
                
                $_SESSION['edit_error']='Name and/or Email Failed to Update';
                header('location:../pages/HSlibrariansettings.php');
            }
            
        }else{
            
            $_SESSION['edit_error']='Password mismatch';
            header('location:../pages/HSlibrariansettings.php');
        }
        
    }else{
        $_SESSION['edit_error']='Failed to post';
    }
    mysqli_close($conn);

?>