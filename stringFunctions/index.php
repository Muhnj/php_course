<?php 
/*
//string functions 

$string = 'This is an example string & this is a tutorial .';
$string_word_count = str_word_count($string, 1, '&.');

print_r($string_word_count);



// string _shuffled .
$string = 'abcdegfghjklamn27254627712565';
$string_shuffled = str_shuffle($string);

$half = substr($string_shuffled, 0, strlen($string)/2);

echo $half;


//string reverse 
$string ='how are you ';
$string_reverse = strrev($string);

echo $string_reverse;




//comparing similarity

$string_one = 'This is my essay . I\'m going to be talking about php.'
;
$string_two = 'my essay is about cats . T\'ll be talking about cats and their colours.';

similar_text($string_one, $string_two, $result);
echo ' The similarity between is , ' .$result;


//string Length

$string = 'this is an example string.';
$string_length = strlen($string);

echo $string_length;


/*
use cases 
if (string_length<25) {

} else {

}

//Trim Functions   l and r

$string = 'This is an example string.s';
$string_trimmed = rtrim($string);

echo $string_trimmed;

*/

//Add slashes
$string = 'This is a <img src ="\image.jpg\"> string.';
$string_slashes = htmlentities($string);

echo addslashes($string_slashes);
echo stripslashes($string_slashes);
?>