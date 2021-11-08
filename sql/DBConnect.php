<?php
$dbserver ="localhost";
//your username
$user = "tajaea";
//your password
$pass = "@v3Nt@d0R";
//name of your databased
$dbas = "test";


try{
    //Connect to your database
    $conn = mysqli_connect($dbserver,$user,$pass,"$dbas");
    echo"You are connected";
}catch(mysqli_sql_exception $e)
{
    //if you cannot connect an error message will be displayed
    die('Could not Connect My Sql:');
    echo "You are not connected".$e;

}


?>