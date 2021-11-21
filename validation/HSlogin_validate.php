<?php
require 'HighSchoolBooks_DB.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['remember'])) {
        setcookie('email', $email, time() + (60 * 60 * 7));
        setcookie('password', $password, time() + (60 * 60 * 7));
    }
    $query = "SELECT * FROM librarian WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['type'] == "Librarian") {
            header("location:../pages/HSlibrarian.php");
        } else if ($row['type'] == "Administrator") {
            header("location:../pages/HSadministrator.php");
        } else if ($row['type'] == "Patron") {
            header("location:../pages/HSpatron.php");
        }
    } else {
        $_SESSION['login_error'] = "* Email or Password Is Incorrect.";
        header("location:../pages/HSlogin.php");
    }
}
