 <?php
    session_start();
    $logged_in_user = $_GET['name'];
    if (isset($_POST['next'])) {
        if (
            empty($_POST['title'])
            || empty($_POST['author'])
            || empty($_POST['year'])

        ) {
            $_SESSION['addbook_error'] = "* fields cannot be left empty.";
            header("location:../pages/HSaddbook.php?name=$logged_in_user");
        } else {
            $_SESSION['title'] = $_POST['title'];
            $_SESSION['author'] = $_POST['author'];
            $_SESSION['year'] = $_POST['year'];



            header("location:../pages/HSaddbook2.php?name=$logged_in_user");
        }
    }
    ?>