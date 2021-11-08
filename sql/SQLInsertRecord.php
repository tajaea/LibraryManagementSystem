<?php
//call the DBconnect file to be excuted 
include_once 'DBConnect.php';

    if(isset($_POST['login']))
    {
         $email = $_POST['email'];
         $pass = $_POST['password'];
         $rem =$_POST['remember'];

        $sql = "INSERT INTO details (Email_Address, Password, Remember) VALUES ('$email', '$pass', '$rem')";
        
    //mysqli_query use the connection string and the query to run the query
    if(mysqli_query($conn, $sql))
    {
        echo "Record inserted";
    }else{
        echo"Record not inserted";
    }
    //close connection
  mysqli_close($conn);
    
    }else{
        echo"no record";
    }

?>