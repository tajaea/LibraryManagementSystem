<!DOCTYPE HTML>  
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css.css">
    </head>
    <body>
        <?php
        $ID = $F_Name = $L_Name = $Gender = "";
        $I_proj = 0.0;
        $Lab_test = 0.0;
        $Group_prog = 0.0;
        $GP_present = 0.0; 
        $R_present = 0.0;
        $Lab_Ex = 0.0;
        $Avg= 0.0; 
        $C_test = 0.0;

        $Avg_err = 0.0; 
        $CT_err = 0.0;
        $IP_error = 0.0;
        $Lt_err = 0.0;
        $G_err = 0.0;
        $GP_err = 0.0; 
        $RP_err = 0.0;
        $LEx_err = 0.0;
        
        $ID_err = $FN_err = $LN_err = $Gender_err = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["ID"]))
            {
                $ID_err = "This field cannot be empty";
            }else
            {
                $ID = test_input($_POST["ID"]);
            }
            if(empty($_POST["F_Name"]))
            {
                $FN_err = "This field cannot be empty";
            }else
            {
                $F_Name = test_input($_POST["F_Name"]);
            }
            if(empty($_POST["L_Name"]))
            {
                $LN_err = "This field cannot be empty";
            }else
            {
                $L_Name = test_input($_POST["L_Name"]);
            }
            if(empty($_POST["C_test"]))
            {
                $CT_err = "This field cannot be empty";
            }else
            {
                $C_test = test_input($_POST["C_test"]);
            }
            if(empty($_POST["I_proj"]))
            {
                $IP_error = "This field cannot be empty";
            }else
            {
                $I_proj = test_input($_POST["I_proj"]);
            }
            if(empty($_POST["Lab_test"]))
            {
                $LE_err = "This field cannot be empty";
            }else
            {
                $Lab_test = test_input($_POST["Lab_test"]);
            }
            if(empty($_POST["Group_prog"]))
            {
                $G_err = "This field cannot be empty";
            }else
            {
                $Group_prog = test_input($_POST["Group_prog"]);
            }
            if(empty($_POST["GP_present"]))
            {
                $GP_err = "This field cannot be empty";
            }else
            {
                $GP_present = test_input($_POST["GP_present"]);
            }
            if(empty($_POST["R_present"]))
            {
                $RP_err = "This field cannot be empty";
            }else
            {
                $R_present = test_input($_POST["R_present"]);
            }
            if(empty($_POST["Lab_Ex"]))
            {
                $LEx_err = "This field cannot be empty";
            }else
            {
                $Lab_Ex = test_input($_POST["Lab_Ex"]);
            }
            if(empty($_POST["Gender"]))
            {
                $Gender_err = "This field cannot be empty";
            }else
            {
                $Gender = test_input($_POST["Gender"]);
            }
        }

        function test_input($input) 
        {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <label for="ID">ID Number</label>
            <input type="text" name="ID">
            <span class="error">* <?php echo $ID_err ;?></span>
            <br><br>
            <label for="F_Name">First Name: </label>
            <input type="text" name="F_Name">
            <span class="error">* <?php echo $FN_err ;?></span>
            <br><br>
            <label for="L_Name">Last Name: </label>
            <input type="text" name="L_Name">
            <span class="error">* <?php echo $LN_err;?></span>
            <br><br>
            <label for="Gender">Gender: </label>
            <input type="radio" name="Gender" value="female">Female
            <input type="radio" name="Gender" value="male">Male
            <span class="error">* <?php echo $Gender_err ;?></span>
            <br><br>
            <label for="C_test">Course Test: </label>
            <input type="float" name="C_test">
            <span class="error">* <?php echo $CT_err;?></span>
            <br><br>
            <label for="I_proj">Individual Project: </label>
            <input type="float" name="I_proj">
            <span class="error">* <?php echo $IP_error;?></span>
            <br><br>
            <label for="Lab_test">Lab Test: </label>
            <input text="float" name="Lab_test">
            <span class="error">* <?php echo $Lt_err;?></span>
            <br><br>
            <label for="Group_prog">Group Project: </label>
            <input text="float" name="Group_prog">
            <span class="error">* <?php echo $G_err;?></span>
            <br><br>
            <label for="GP_present">Group Presentation: </label>
            <input text="float" name="GP_present">
            <span class="error">* <?php echo $GP_err;?></span>
            <br><br>
            <label for="R_present">Research Presentation: </label>
            <input text="float" name="R_present">
            <span class="error">* <?php echo $RP_err;?></span>
            <br><br>
            <label for="Lab_Ex">Lab Exercise: </label>
            <input text="float" name="Lab_Ex">
            <span class="error">* <?php echo $LEx_err;?></span>
            <br><br>
            <input type="submit" name="Submit" value="Submit">
        </form>
    </body>
</html>

<?php
    if(!empty($_POST['ID']) || !empty($_POST['F_Name']) || !empty($_POST['L_Name']) ||!empty($_POST['Lab_test']) || !empty($_POST['Group_prog'])| !empty($_POST['GP_present'])  ||!empty($_POST['R_present'])){
        if(!empty($_POST['Gender']) || !empty($_POST['Lab_Ex']) || !empty($_POST['C_test']) || !empty($_POST['I_proj'])){
            $Avg = $I_proj *.15 +
            $Lab_test *.2 +
            $C_test *.15 +
            $Group_prog *.25 + $GP_present *.10+
            $R_present *.1 + $Lab_Ex *.05;
                echo "<h2>Student Data:</h2>";
                echo "Student: . $ID <br />";
                echo "First Name: $F_Name <br />";
                echo "Last Name: .$L_Name <br />";
                echo "Gender: $Gender <br />";
                echo "Course Work: $C_test <br />";
                echo "Individual Project: $I_proj <br />";
                echo "Lab Test: $Lab_test <br />";
                echo "Group Project: $Group_prog <br />";
                echo "Group Presentation: $GP_present <br />";
                echo "Research Presentation: $R_present <br />";
                echo "Lab Excercise: $Lab_Ex <br />";
                echo "Final Grade $Avg <br />";
                if ($Avg>=60)
                    echo "$F_Name $L_Name pass the course";
                else
                    echo "$F_Name $L_Name fail the course";
                ob_end_flush();
        }
    }
?>