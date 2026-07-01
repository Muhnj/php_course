<?php
/*

functions


function myName(){
	echo 'Munir';

}

echo 'My name is ';
myName();


example 2 

$inumber1 = 10;
$inumber2 = 5;

function add ($number1, $number2){
	echo $number1 + $number2;
}

add ($inumber1, $inumber2);



Example 3


function displayDate($day, $date, $year) {
	echo $day.' '.$date.' '.$year;
}
 displayDate ('Monday', 31, 2011);


 //function


 function add ($number1, $number2){
 	$result = $number1 + $number2;
 	return $result;

 }

 (10)

//function with a return value ,

function add ($number1, $number2){
	$result = $number1 + $number2;
	return $result;

}
function divide ($number1, $number2){
	$result = $number1/ $number2;
	return $result;
}

$sum = divide (add(10,10), add (5, 5));
echo $sum;

*/


//Global variables and Functions

$user_ip = $_SERVER['REMOTE_ADDR'];


function echo_ip() {
	global $user_ip;
	$string = 'Your IP address is' .$user_ip;
	echo  $string;
}

echo_ip();


?>