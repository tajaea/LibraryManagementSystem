<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel = "stylesheet" href = "HSform2.css"/>
</head>
<body>
    <section>
    <div class="circle"></div>
    <header>
		<img src = "images/logo.png" class = "logo">
        <ul>
            <li><a href = "HSindex.php">Home</a></li>
            <li><a href = "HSlogout.php">Log-Out</a></li>
        </ul>        
	</header>    
    <div class = "container">
        <div class = "main">
            <h3>Add Book</h3>
            <span id = "error">
                <?php
                    if(!empty($_SESSION['error_page2']))
                    {
                        echo $_SESSION['error_page2'];
                        unset($_SESSION['error_page2']);
                    }
                ?>
            </span>
            <form action = "HSaddbook_validate2.php" method = "POST">
                <label>ISBN: <span>*</span></label>
                <input name = "isbn" id = "isbn" type = "text" placeholder = "978-3-16-148410-0">
                <label>Call Number: <span>*</span></label>
                <input name = "call_number" id = "call_number" type = "text" placeholder = "ML410.B1.M67 2000">
                <label>Subject Area: <span>*</span></label>
                <input name = "subject_area" id = "subject_area" type = "text" placeholder = "Music">
                <label>Number of Copies: <span>*</span></label>
                <input name = "num_of_copies" id = "num_of_copies" type = "text" placeholder = "3" min = "1" max = "9000">
                <input name = "reset" id = "reset" type = "reset" value = "Reset" />
                <input name = "next" id = "next" type = "submit" value = "Next" />
                <input name = "back" id = "back" type = "button" value = "Back" onclick = "history.back()" />
            </form>
        </div>
        <div class="imagebox">
            <img src = "images/ifd.png" class = "book1">
        </div>
    </div>
    </section> 
</body>
</html>