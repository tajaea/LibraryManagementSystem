<?php
require 'HighSchoolBooks_DB.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['remember'])) {
        setcookie('email', $email, time() + (60 * 60 * 7));
        setcookie('password', $password, time() + (60 * 60 * 7));

        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("location:../pages/HSaddbook.php");
        } else {
            $_SESSION['login_error'] = "* Email or Password Is Incorrect.";
            header("location:../pages/HSlogin.php");
        }
    }
}
