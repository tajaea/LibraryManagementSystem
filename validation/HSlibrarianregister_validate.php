<?php
require 'HighSchoolBooks_DB.php';
session_start();

if (isset($_POST['register'])) {
    if (
        empty($_POST['name'])
        || empty($_POST['email'])
        || empty($_POST['atype'])
        || empty($_POST['password'])
        || empty($_POST['cpassword'])
    ) {
        $_SESSION['registration_error'] = "* fields cannot be left empty.";
        header("location:../pages/HSlibrariansettings.php");
    } else {
        $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            if (($_POST['password']) == ($_POST['cpassword'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $type = $_POST['atype'];
                $password = password_hash($_POST['password'], MHASH_MD5);
            } else {
                $_SESSION['registration_error'] = "Password Does Not Match.";
                header("location:../pages/HSlibrariansettings.php");
            }
        } else {
            $_SESSION['registration_error'] = "Invalid Email.";
            header("location:../pages/HSlibrariansettings.php");
        }
        $query = "INSERT INTO librarian (name, email, password, type) VALUES ('$name', '$email', '$password', '$type')";
        if (mysqli_query($conn, $query)) {
            header("location:../pages/HSlibrariansettings.php");
        } else {
            echo "<script>alert('Error1');</script>";
        }
        mysqli_close($conn);
    }
} else {
    echo "<script>alert('Error2');</script>";
    header("location:../pages/HSlibrariansettings.php");
}
?>