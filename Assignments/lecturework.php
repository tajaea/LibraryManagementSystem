<?php
    //part 1
    $J_Parishes = array("Hanover","Trelawny","Portland","Gyalchester");
    $S_Parishes = array("Trelawny","Gyalchester","St. James","St. Ann");
    $D_Parishes = array("St. Thomas","St. Andrew","Westmoreland");
    $M_Parishes = array("Hanover","St. Catherine");
    $Mary_Fave = "Trelawny";
    //Combine arrays in to one
    $all_parish = array_merge($J_Parishes, $S_Parishes, $D_Parishes, $M_Parishes);

    print_r($all_parish);

    //part 2
    // ensure that all elements are unique – occur only once in the new array
    $unique_parish = array_unique($all_parish);

    // find out if Mary's Parish exists in the new, unique array
    if (in_array($Mary_Fave, $unique_parish)
        echo "Mary's Favourite Parish is also a favourite of her friends. Yay!";
    else
        echo "Mary's Favourite Parish is not a favourite of her friends.  Awwwww :(";

    //part 3
        $sentence = "You were a political juggernaut for many, many years.  I admire that.";
        // explode the string in to an array with the delimiter as a space
        $mywords = explode(' ', $sentence);
        // return the total number of the elements (words) in the array
        $numwords = count($mywords);
        // display the results
        echo ("Total Number of Words in the Sentence = $numwords.");
    
    //part 4
    $vowels = "aAeEiIoOuU";
    $strCountries = "Bahamas, Honduras, Mauritius, Canada, Antigua, Belize, Panama, Chile, Barbados, France, Italy, Spain, Mexico, Egypt, Greenland, Russia, China, Japan, Israel, Vietnam, South Korea";
    
    //explode the string into an array using the delimiter of a comma and space
    $countries = explode(', ', $strCountries);
    
    //part 5
    // determine how many countries there are in total
    $num = count($countries);

    // go through each country in the array
    for ($i = 0; $i < $num; $i += 1) {
    // get the last country in the array by popping it
    $country = $array_pop($countries);

    //part 6
    // get the first character of the current country's popped name
    $letter = substr($country, 0, 1);
    
    // determine if this letter is a vowel
    if (strpos($vowels, $letter) === false) { }
    else { echo “$country is the last country beginning with a vowel”); }
  }

?>