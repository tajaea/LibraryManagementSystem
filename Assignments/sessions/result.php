<?php
session_start ();
if(isset($_POST['next'])){
    $_SESSION['twitter'] =$_POST['twitter'];
    $_SESSION['facebook'] =$_POST['facebook'];
    $_SESSION['instagram'] = $_POST['instagram'];
  }
?>

<html>
<head>
    <title>Log In Multipage Form </title>
</head>
<body style="background-color:blue">
    <form method="POST" action="SocialMediaAct.php">
        <table align="center">
        <tr><td><h4>Here is what you have entered.</h4><br/></td></tr>
        <tr><td><p>Name: <?php echo $_SESSION['name']; ?> </p>
        <tr><td><p>Instagram: <?php echo $_SESSION['instagram']; ?></p>
        <tr><td><p>Twitter: <?php echo $_SESSION['twitter'];?></p>
        <tr><td><p>Facebook: <?php echo $_SESSION['facebook'];?></p>
            
        </table>
    </form>>
</body>


</html>