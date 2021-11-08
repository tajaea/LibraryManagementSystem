<?php

session_start();

?>
<html>
<head>
    <title>Log In Multipage Form </title>
</head>
<style type ="text/css">
    .backcolour{
        align-content: center;
        background-color: grey;
        width: 300px;
    }
    
</style>
<body style="background-color:blue">
<div class="backcolour">
    <form method="POST" action="SocialMediaAct.php" >
        
        <table align="center">
            <tr><td><h1>LOG IN FORM</h1></td></tr>
            <tr><td colspan="2" align="center"><input type='text' name='name' placeholder="name" required></td></tr>
            <tr><td colspan="2" align="center"><input type='text' name='email' placeholder="email - iii@gmail.com" required></td></tr>
            <tr><td colspan="2" align="center"><input type='text' name='password' placeholder="password" required></td></tr>
            <tr><td colspan="2" align="center"><input type ='submit' name='next' value="NEXT"></td> 
            <td><input type ='reset' name='reset' value="RESET"></td> </tr>
    </table>
</form>
</div>
</body>


</html>