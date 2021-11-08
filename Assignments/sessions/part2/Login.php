<style type ="text/css">
    th{
        text-align: right;
    }
    h3{
        text-align: center;
    }
</style>
<table cellpadding='5' cellspacing='10' align="center" border="0">
        <h3>Login Form using Session and Cokkies with Remember me</h3>
        <form method="post" action="Validate.php" >
        <tr><th>Email</th><td><input type="text" name = "email"></td></tr>
        <tr><th>Password</th><td><input type="password" name = "password"></td></tr>
        <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value ="1">Remember Me</td></tr>
        <tr><td colspan="2" align="center"><input type="submit" name = "login" value ="Login"></td></tr>
        </form>

</table>