<?php
    session_start();
    if(isset($_POST['next']))
    {
        if(empty($_POST['title'])
        || empty($_POST['author'])
        || empty($_POST['year'])) {
            $_SESSION['error'] = "* fields cannot be left empty.";
            header("location: HSaddbook.php");
        } else {
    
                $_SESSION['title'] = $_POST['title'];
                $_SESSION['author'] = $_POST['author'];
                $_SESSION['year'] = $_POST['year'];
                $_SESSION['file'] = $_POST['file'];
                header("location:HSaddbook2.php");
            
        }      
    }
?>