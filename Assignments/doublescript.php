<?php
    if(isset($_POST['submit']))
    {
        echo "<h2>Your given values are as: </h2>";

        $name = $_POST['name'];
        echo $name;
        echo "<br>";

        echo $_POST['email'];
        echo "<br>";

        echo $_POST['website'];
        echo "<br>";

        echo $_POST['comment'];
        echo "<br>";

        echo $_POST['gender'];
        echo "<br>";

    }
?>