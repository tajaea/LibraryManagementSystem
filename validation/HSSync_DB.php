<?php
require_once 'HighSchoolBooks_DB.php';
session_start();
$title=$_SESSION['title'] ;
$author=$_SESSION['author'];
$year=$_SESSION['year'];
$isbn=$_SESSION['isbn'];
$callno=$_SESSION['call_number'] ;
$subject=$_SESSION['subject_area'];
$copies=$_SESSION['num_of_copies'];

$file=$_SESSION['file'];
$image=$file['name'];
$olddest=$file['tmp_name'];
$new_loc=$_SESSION['file_dest'];




$query = "INSERT INTO book (isbn, title, author, year, bookcover, callno, subjectarea, quantity) 
          VALUES ('$isbn', '$title', '$author', '$year', '$image', '$callno', '$subject', '$copies')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('File successfully uploaded');</script>";
            header("location:../pages/HSlibrarian.php");
           /* if (move_uploaded_file($olddest, $new_loc)) {
                echo "<script>alert('File successfully uploaded');</script>";
                header("location:../pages/HSlibrarian.php");
            } else {
                echo "<script>alert('Error uploading file to new dest');</script>";
            }*/
        } else {
            echo "<script>alert('0 rows affected');</script>";
            header("location:../pages/HSlibrarian.php");
        }
        mysqli_close($conn);
        
?>