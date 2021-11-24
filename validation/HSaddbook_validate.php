 <?php
    session_start();
    if (isset($_POST['next'])) {
        if (
            empty($_POST['title'])
            || empty($_POST['author'])
            || empty($_POST['year'])
            || empty($_FILES['file'])
        ) {
            $_SESSION['addbook_error'] = "* fields cannot be left empty.";
            header("location:../pages/HSaddbook.php");
        } else {
            $_SESSION['title'] = $_POST['title'];
            $_SESSION['author'] = $_POST['author'];
            $_SESSION['year'] = $_POST['year'];

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

                            $filename_new = $_POST['title'] . "(" . $_POST['year'] . ")" . "." . $filext_end;

                            $filedes = '../files'. $filename_new;
                            $_SESSION['file'] = $_FILES['file'];
                            $_SESSION['file']['name']=$filename_new;
                            $_SESSION['file']['tmp_name']=$filedes;
                            
                            

                            /*if(move_uploaded_file($fileloc,$filedes))
                        {
                            $_SESSION['file'] = $filedes;
                            header('location:HSaddbook2.php');
                        }*/
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
            
            header("location:../pages/HSaddbook2.php");
        }
    }
    ?>