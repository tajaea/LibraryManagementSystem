<!--Tajae Anglin 1803630.


Write a program to store 20 students grades.
Your program should determine the class average, the 
highest grade, lowest grade and the most frequent grade.-->

<?php
    print("</br>");
    //created a array that holds the grades for the students
    $grades = array();
    //created a function that will generate a random number from the range 0 to 100.
    function rand_num_generator() {
        return rand(0,100);
    }
    //Created a for loop that will populate the array based on the condition given.
    for($i=0; $i<20; $i++) {
        //array push is a function used to place the random generated number to the end of the array
        //until the condition is true.
        array_push($grades, rand_num_generator());
    }

   //Displays the contents of that array. 
   print_r($grades);

   //Calculating the average of all the students grades by adding the contents of the array
   //then dividing them by the number of elements in the array.
   $grade_average = array_sum($grades)/count($grades);

   print("</br> </br>");

   //Displaying the average grade of the class
   print("The Class Average Is: $grade_average");

   //Using a in built function called max(Maximium) that gets the highest value from the array.
   $highest_grade = max($grades);

   print("</br> </br>");

   //Displaying the highest grade.
   print("The Highest Grade Is: $highest_grade");
   
   //Using a in built function called min(Minimum) that gets the lowest value from the array.
   $lowest_grade = min($grades);

   print("</br> </br>");

   //Displaying the lowest grade.
   print("The Lowest Grade Is: $lowest_grade");

   //Counts the values in the array.
   $grade_frequency = array_count_values($grades);

   //Sorts it from highest to lowest.
   arsort($grade_frequency);

   //Splits the array to find the most occuring key.
   $keys = array_keys($grade_frequency);

   print("</br> </br>");

   print("The Most Frequent Grade Is: $keys[0]");

?>