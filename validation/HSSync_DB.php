<?php
require 'HighSchoolBooks_DB.php';
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

$query = "INSERT INTO book (isbn, title, author, year, bookcover, callno, subjectarea, quantity) 
          VALUES ('$isbn', '$title', '$author', '$year', '$image', '$callno', '$subject', '$copies')";
        if (mysqli_query($conn, $query)) {
            header("location:../pages/HSlibrarian.php");
        } else {
            echo "<script>alert('Error1');</script>";
        }
        mysqli_close($conn);
?>