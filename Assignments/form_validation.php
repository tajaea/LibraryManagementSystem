
<!DOCTYPE HTML>  
<html>
    <head>
        <style>
            /*.error {color:#FF0000}*/
        </style>
    </head>
    <body>
        <p><span class="error">* required field.</span></p>
        <?php
        $idnum = $firstname = $lastname = $gender ="";
        $indiproject = 0.0;$labtest = 0.0;$groupproject = 0.0;$groupprojectpresent =0.0; $researchpresent =0.0;$labexercise = 0.0;
        $average=0.0; 
        $coursetest =0.0;

        $indiprojectErr = 0.0;$labtestErr = 0.0;$groupprojectErr = 0.0;$groupprojectpresentErr =0.0; $researchpresentErr =0.0;$labexerciseErr = 0.0;
        $averageErr=0.0; $coursetestErr =0.0;
        $idErr =$firstErr =$lastnameErr = $gendererr ="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["idnum"])){
                $idErr ="ID is requiered";
            }else{
                $idnum = test_input($_POST["idnum"]);
            }
            if(empty($_POST["firstname"])){
                $firstErr ="First name is requiered";
            }else{
                $firstname = test_input($_POST["firstname"]);
            }
            if(empty($_POST["lastname"])){
                $lastnameErr="Last name is requiered";
            }else{
                $lastname = test_input($_POST["lastname"]);
            }
            if(empty($_POST["coursetest"])){
                $coursetestErr="Course Test is requiered";
            }else{
            $coursetest = test_input($_POST["coursetest"]);
            }
            if(empty($_POST["indiproject"])){
                $indiprojectErr="Individual Project is requiered";
            }else{
            $indiproject = test_input($_POST["indiproject"]);
            }
            if(empty($_POST["labtest"])){
                $labtestErr="Lab Test is requiered";
            }else{
            $labtest = test_input($_POST["labtest"]);
            }
            if(empty($_POST["groupproject"])){
                $groupprojectErr="Group Project t is requiered";
            }else{
            $groupproject = test_input($_POST["groupproject"]);
            }
            if(empty($_POST["groupprojectpresent"])){
                $lastnameErr="Group Project Present is requiered";
            }else{
            $groupprojectpresent = test_input($_POST["groupprojectpresent"]);
            }
            if(empty($_POST["researchpresent"])){
                $groupprojectpresentErr="Research Project t is requiered";
            }else{
            $researchpresent = test_input($_POST["researchpresent"]);
            }
            if(empty($_POST["labexercise"])){
                $labexerciseErr="Lab Exercise t is requiered";
            }else{
            $labexercise = test_input($_POST["labexercise"]);
            }
            if(empty($_POST["gender"])){
                $gendererr ="Gender is requiered";
            }else{
            $gender = test_input($_POST["gender"]);
            }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <label for="idnum">ID Number</label>
            <input type="text" name="idnum">
            <span class="error">* <?php echo $idErr ;?></span>
            <br><br>
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname">
            <span class="error">* <?php echo $firstErr ;?></span>
            <br><br>
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname">
            <span class="error">* <?php echo $lastnameErr;?></span>
            <br><br>
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <span class="error">* <?php echo $gendererr ;?></span>
            <br><br>
            <label for="coursetest">Course Test:</label>
            <input type="float" name="coursetest">
            <span class="error">* <?php echo $coursetestErr;?></span>
            <br><br>
            <label for="indiproject">Individual Project:</label>
            <input type="float" name="indiproject">
            <span class="error">* <?php echo $indiprojectErr;?></span>
            <br><br>
            <label for="labtest">Lab Test:</label>
            <input text="float" name="labtest">
            <span class="error">* <?php echo $labtestErr;?></span>
            <br><br>
            <label for="groupproject">Group Project:</label>
            <input text="float" name="groupproject">
            <span class="error">* <?php echo $groupprojectErr;?></span>
            <br><br>
            <label for="groupprojectpresent">Group Project Presentation:</label>
            <input text="float" name="groupprojectpresent">
            <span class="error">* <?php echo $groupprojectpresentErr;?></span>
            <br><br>
            <label for="researchpresent">Research Presentation:</label>
            <input text="float" name="researchpresent">
            <span class="error">* <?php echo $researchpresentErr;?></span>
            <br><br>
            <label for="labexercise">Lab Exercise: </label>
            <input text="float" name="labexercise">
            <span class="error">* <?php echo $labexerciseErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
            
        </form>
    </body>
</html>
<?php
    // define variables and set to empty values
    if(!empty($_POST['idnum']) || !empty($_POST['firstname']) || !empty($_POST['lastname']) ||!empty($_POST['labtest']) || !empty($_POST['groupproject'])| !empty($_POST['groupprojectpresent'])  ||!empty($_POST['researchpresent'])){
        if(!empty($_POST['gender']) || !empty($_POST['labexercise']) || !empty($_POST['coursetest']) || !empty($_POST['indiproject'])){
            $average=$indiproject*.15+
            $labtest*.2+
            $coursetest*.15+
            $groupproject*.25+$groupprojectpresent*.10+
            $researchpresent*.1+$labexercise*.05;
        //        function Detail(){
        //            global $idnum,$firstname,$lastname,$gender,$coursetest,$indiproject,$labtest,$groupproject,$groupprojectpresent,$researchpresent,
        //            $labexercise,$average;
                echo "<h2>Your Input:</h2>";
                echo "Student: . $idnum <br />";
                echo "First Name: $firstname <br />";
                echo "Last Name: .$lastname <br />";
                echo "Gender: $gender <br />";
                echo "Course Work Test: $coursetest <br />";
                echo "Individual Project: $indiproject <br />";
                echo "Lab Test: $labtest <br />";
                echo "Group Project: $groupproject <br />";
                echo "Group Project Presentation: $groupprojectpresent <br />";
                echo "Research Presentation: $researchpresent <br />";
                echo "Lab Excercise: $labexercise <br />";
                echo "Your final grade is $average <br />";
                if ($average>=60)
                    echo "$firstname $lastname pass the course";
                else
                    echo "$firstname $lastname fail the course";
                ob_end_flush();
        //        }
        }
    }

?>