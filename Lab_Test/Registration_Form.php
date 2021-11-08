<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabTest</title>
    <link rel = "stylesheet" href = "labtestregistration.css"/>
</head>
<body>
    <section>
    <div class = "container">
        <div class = "main">
            <h3>Registration</h3>
            <span id = "error">
                <?php
                    if(!empty($_SESSION['error_page2']))
                    {
                        echo $_SESSION['error_page2'];
                        unset($_SESSION['error_page2']);
                    }
                ?>
            </span>
            <form action = "Registration_Form_Validation.php" method = "POST">
                <h3>DEMOGRAPHICS</h3>
                <label>ID number: <span>*</span></label>
                <input name = "id_number" id = "id_number" type = "number" placeholder = "1803630">
                </br>
                <label>Name: <span>*</span></label>
                <input name = "first_name" id = "first_name" type = "text" placeholder = "Tajae">
                <input name = "last_name" id = "last_name" type = "text" placeholder = "Anglin">
                </br>
                <label>Gender: <span>*</span></label>
                <select name = "gender" id = "gender">
                    <option value = "">Choose One</option>
                    <option value = "male" value = "">Male</option>
                    <option value = "female" value = "">Female</option>
                </select>
                </br>
                <label>Academic Year: <span>*</span></label>
                <input name = "ac_year" id = "ac_year" type = "number" placeholder = "2021">
                </br>
                <h3>CONTACT INFO</h3>
                <label>Cell Phone: <span>*</span></label>
                <input name = "cellphone" id = "cellphone" type = "text" placeholder = "(876)469-7058">
                </br>
                <label>Email: <span>*</span></label>
                <input name = "email" id = "eamil" type = "email" placeholder = "tajaeanglin@outlook.com">
                </br>
                <h3>COURSE OF STUDY</h3>
                <label>Degree of Pursuit: <span>*</span></label>
                </br>
                <input name = "degree" type = "radio" value = "Associate Degree in Computer Studies" required>Associate Degree in Computer Studies
                </br>
                <input name = "degree" type = "radio" value = "BSc in COmputing and Information" required>BSc in COmputing and Information
                </br>
                <input name = "degree" type = "radio" value = "BSc in Animation Production and Development" required>BSc in Animation Production and Development
                </br>
                <button name = "submit" id = "submit" type = "Submit" class = "btn">Submit</button>
            </form>
        </div>
    </div>
    </section> 
</body>
</html>