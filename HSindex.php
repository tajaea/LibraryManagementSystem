<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/HSstyle.css" />
    <title>Library</title>
</head>

<body>
    <section>
        <div class="circle"></div>
        <header>
            <img src="../images/logo.png" class="logo">
            <ul>
                <li><a href="../pages/HSindex.php">Home</a></li>
                <li><a href="../pages/HSlogin.php">Login</a></li>
                <li><a href="../pages/HSregistration.php">Register</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textbox">
                <h2>it's not just books<br>it's <span>POWER.</span></h2>
            </div>
            <div class="imagebox">
                <img src="../images/48laws.png" class="book1">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="../images/48laws.png" onclick="imgSlider('../images/48laws.png');changeCircleColor('#FF0000')"></li>
            <li><img src="../images/rdpd.png" onclick="imgSlider('../images/rdpd.png');changeCircleColor('#AF2CE1')"></li>
            <li><img src="../images/tgr.png" onclick="imgSlider('../images/tgr.png');changeCircleColor('#B9E3AC')"></li>
        </ul>
    </section>

    <script type="text/javascript">
        function imgSlider(anything) {
            document.querySelector('.book1').src = anything;
        }

        function changeCircleColor(color) {
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
    </script>
</body>

</html>