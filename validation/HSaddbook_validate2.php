<?php
session_start();
    if(isset($_POST['next']))
    {
        if(empty($_POST['isbn'])
        || empty($_POST['call_number'])
        || empty($_POST['subject_area'])
        || empty($_POST['num_of_copies'])) {
            $_SESSION['addbook2_error'] = "* fields cannot be left empty.";
            header("location:../pages/HSaddbook2.php");            
        }else {
            if(!preg_match("/^\(?([0-9]{3})\)?[-. ]?([0-9]{1})[-. ]?([0-9]{2})[-. ]?([0-9]{6})[-. ]?([0-9]{1})$/", $_POST['isbn']))
            {
                $_SESSION['addbook2_error'] = "000-0-00-000000-0 is required.";
                header("location:../pages/HSaddbook2.php");
            }else {
                if(!preg_match("/([A-Za-z]{2}[0-9]{3}.[A-Za-z]{1}[0-9]{1}.[A-Za-z]{1}[0-9]{2} [0-9]{4})/", $_POST['call_number']))
                {
                    $_SESSION['addbook2_error'] = "XX000.X0.X00 0000 is required.";
                    header("location:../pages/HSaddbook2.php");
                }else {
                    $_SESSION['isbn'] = $_POST['isbn'];
                    $_SESSION['call_number'] = $_POST['call_number'];
                    $_SESSION['subject_area'] = $_POST['subject_area'];
                    $_SESSION['num_of_copies'] = $_POST['num_of_copies'];
                    //header("location:../pages/HSresult.php");
                    
                }               
            }
        } 
    }
?>




                