<?php
    $dbserver = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbas = "hsregistration";

    try{
        $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbas);
        echo "<script>alert('You are now connected');</script>";
    }catch(mysqli_sql_exception $e)
    {
        die('Could not connect My Sql:');
        echo "You are not connected".$e;
    }
