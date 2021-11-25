<?php
session_start();
    if(isset($_POST['next']))
    {
        if(empty($_POST['isbn'])
        || empty($_POST['call_number'])
        || empty($_POST['subject_area'])
        || empty($_POST['num_of_copies'])
        || empty($_FILES['file'])) {
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
                    if (isset($_FILES['file'])) {
                        $file = $_FILES['file'];
                        //File Propertites
                        //file name
                        $filename = $file['name'];
                        //file location
                        $fileloc = $file['tmp_name'];
                        //file size
                        $filesize = $file['size'];
                        //file error
                        $fileerror = $file['error'];
        
                        $filext = explode(".", $filename);
        
        
                        //get the last element of the array - file extension
                        $filext_end = strtolower(end($filext));
        
        
                        //Check which file is allowed
                        $allowed = array('raw', 'jpg', 'jpeg', 'png');
        
                        //check if txt is in the file extension
                        if (in_array($filext_end, $allowed)) {
                            //check if file as an error
                            if ($fileerror == 0) {
                                //check size of file - 16 megabytes
                                if ($filesize <= 16777216) {
        
                                    $filename_new = $_SESSION['title'] . "(" . $_SESSION['year'] . ")" . "." . $filext_end;
        
                                    $_SESSION['file_dest'] = '../files/'. $filename_new;
                                    $filedes='../files/'. $filename_new;
                                    $_SESSION['file'] = $_FILES['file'];
                                    $_SESSION['file']['name']=$filename_new;
                                    
                                    
                                        if(move_uploaded_file($fileloc,$filedes))
                                        {
                                          echo "<script>alert('file upload successfull!!!!!!!!!!!');</script>";
        
                                            //$_SESSION['file'] = $filedes;
                                            //header('location:HSaddbook2.php');
                                        }else{
                                            echo "<script>alert('file upload failed validate');</script>";
        
                                        }
                                } else {
                                    echo "<script>alert('File size limit exceeded'); window.location.href = 'HSaddbook.php';</script>";
                                }
                            } else {
                                echo "<script>alert('Error found in file, please resubmit'); window.location.href = 'HSaddbook.php';</script>";
                            }
                        } else {
                            echo "<script>alert('File type not supported, enter only .jpg, .jpeg, .raw, .png'); window.location.href = 'HSaddbook.php';</script>";
                        }
                    } else {
                        echo "<script>alert('Nothing Uploaded'); window.location.href = 'HSaddbook.php';</script>";
                    }
                    
                    header("location:../validation/HSSync_DB.php");
                    
                }               
            }
        } 
    }
?>




                