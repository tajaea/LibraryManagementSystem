<?php

	//this is a comment

	//php output

	echo "<h1>Welcome to PHP</h1></br></br>";
	echo "<p><strong>PHP</strong> actually means <em>PHP Hypertext Preprocessor</em>.</p>";

	print("The definition seems a bit redundant, doesn't it?");

	//variables

	$name = "Shaula Edwards-Braham";	// string
	$weeks = 13; 						//integer
	$percent = 75;					//double
	
	//USAGE ARRAYS 
	$pass = array("Bob", "Sara", "Mario", "Fido");	//array
	
	//constant
	define("SEM1", 90);	//days of Semester
	define("PI", 3.14); //PI 
	
	//Circumference
	$radius = 90;
	$cir = 2 *PI * $radius; // multiplying a constant

	//printing variables
	echo "<p>Good morning, everyone:</br> My name is <strong>",$name, "</strong>. I will be your lecturer for the next <strong>".$weeks." </strong>weeks.<br>Typically we have a pass rate of <strong>".$percent."</strong>% or more, just work smart and consistently and you will be like some of our previous students.<br>They were <strong>",$pass[0],"</strong>, <strong>",$pass[1],"</strong> and <strong>",$pass[2],"</strong> who did pretty well. I can't say the same for <strong>",$pass[3],"</strong> though. He was practically missing in action most of the time.</p>";
	

	$time = SEM1 + $weeks;	//adding a constant
	echo "<p>The number of days in the semester is ", $time,". The circumference of the room we will be using is ", $cir,"</p>";

    //var_dunp return data type and value
    var_dump($cir);
    

    //Creating literals
    $variable = "Student Name";
    $literally = 'I <strong>$variable</strong>, will work hard to be successful in in this module!';
   
    echo"<hr/>";
    print "$literally";
    print "<br>";
   
    $literally = "I <strong>$variable</strong>, will work hard to be successful in in this module";
    print($literally);
	

?>