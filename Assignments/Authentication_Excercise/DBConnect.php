<?php
    $dbserver = "localhost";
    $username = "tajaea";
    $password = "@v3Nt@d0R";
    $dbas = "registration(authentication)";

    try{
        $conn = mysqli_connect($dbserver, $username, $password, $dbas);
        echo "You are now connected";
    }catch(mysqli_sql_exception $e)
    {
        die('Could not connect My Sql:');
        echo "You are not connected".$e;
    }
?>