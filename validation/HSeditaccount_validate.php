<?php
    session_start();
    $logged_in_user=$_GET['name'];
    require 'HighSchoolBooks_DB.php';
    $query = "SELECT * FROM librarian";
    $result = mysqli_query($conn, $query);

    if(isset($_POST['edit'])){
        if($_SESSION['email']!=$_POST['email']){
            if($_POST['password']==$_POST['cpassword']){
                $email=$_POST['email'];
                $name=$_POST['name'];
                $updatequery = "UPDATE librarian set name='$name', email='$email' where libID='".$_SESSION['update']."'";
                //unset($_SESSION['update']);
                if(mysqli_query($conn, $updatequery)){
                    if(!empty($_POST['password'])){
                        $password = password_hash($_POST['password'], MHASH_MD5);
                        $updatequery = "UPDATE librarian set password='$password' where libID='".$_SESSION['update']."'";
                        if(mysqli_query($conn, $updatequery)){
                            header("location:../pages/HSadministrator.php?name=$logged_in_user");
                        }
                        header("location:../pages/HSadministrator.php?name=$logged_in_user");
                    }else {
                        header("location:../pages/HSadministrator.php?name=$logged_in_user");
                    }
                }else{
                    $_SESSION['edit_error']='Password Failed to Update';
                    header("location:../pages/HSadministrator.php?name=$logged_in_user");
                }
            }else{
                $_SESSION['edit_error']='Password not the same';
                header("location:../pages/HSadministrator.php?name=$logged_in_user");
            }
        }else if ($_SESSION['email']==$_POST['email']){
            if($_POST['password']==$_POST['cpassword']){
                $email1=$_SESSION['email'];
                $email=$_POST['email'];
                $name=$_POST['name'];
                $query = "UPDATE librarian set name='$name', email='$email' where email='$email1'";
                
                if(mysqli_query($conn, $query)){
                    $_SESSION['email']=$email;
                    if(!empty($_POST['password'])){
                        $password = password_hash($_POST['password'], MHASH_MD5);
                        $query = "UPDATE librarian set password='$password' where email='$email'";
                        if(mysqli_query($conn, $query)){
                            header("location:../pages/HSadministrator.php?name=$name");
                        }else{
                            
                            $_SESSION['edit_error']='Password Failed to Update';
                            header("location:../pages/HSadministrator.php?name=$name");
                        }
                    }else{
                        header("location:../pages/HSadministrator.php?name=$name");
                    }
                }else{
                    
                    $_SESSION['edit_error']='Name and/or Email Failed to Update';
                    header("location:../pages/HSadministrator.php?name=$name");
                }
                
            }else{
                
                $_SESSION['edit_error']='Password mismatch';
                header("location:../pages/HSadministrator.php?name=$name");
            }

        }
        
    }else{
            
            $_SESSION['edit_error']='Name and/or Email Failed to Update';
            header("location:../pages/HSadministrator.php?name=$logged_in_user");
        }

    mysqli_close($conn);

?>