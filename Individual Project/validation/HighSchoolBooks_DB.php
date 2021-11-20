<?php
    $dbserver = "localhost";
    $username = "tajaea";
    $password = "@v3Nt@d0R";
    $dbas = "hsregistration";

    try{
        $conn = mysqli_connect($dbserver, $username, $password, $dbas);
        echo "<script>alert('You are now connected');</script>";
    }catch(mysqli_sql_exception $e)
    {
        die('Could not connect My Sql:');
        echo "You are not connected".$e;
    }
?>