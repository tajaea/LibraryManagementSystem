<?php
session_start ();
if(isset($_POST['next'])){
    $_SESSION['name'] =$_POST['name'];  
    $_SESSION['email'] =$_POST['email'];
    $_SESSION['pass'] =$_POST['password'];
}
?>

<html>
<head>
    <title>Log In Multipage Form </title>
</head>
<body style="background-color:blue">
    <form method="POST" action="result.php">
        <table align="center">
            <tr><td><h1>SOCIAL PROFILES</h1></td></tr>
            <tr><td colspan="2" align="center"><input type='text' name='twitter' placeholder="twitter" required></td></tr>
            <tr><td colspan="2" align="center"><input type='text' name='facebook' placeholder="facebook" required></td></tr>
            <tr><td colspan="2" align="center"><input type='text' name='instagram' placeholder="instagram" required></td></tr>
            <tr><td colspan="2" align="center"><input type ='submit' name='next' value="NEXT"></td><td><input type ='reset' name='reset' value="RESET"></td> </tr>
            
        </table>
    </form>>
</body>


</html>