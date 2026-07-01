<?php
/*//basic Arrays and Associative Arrays
$food = array('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>150);
$names = ['Jed ', 'Wahab', 'Ivan', 'Victor','Munir'];
echo $names[2],
$food[1];
$food[4] = 'Vegetable';

print_r($food);
echo $food['Pizza'];



// multi dimension Arrays

$food = array('Healthy'=>
						array('Salad', 'vegartables', 'Pasta'),
				'Unhealthy'=> 
				array ('Pizza', 'Ice cream'));

echo $food['Unhealthy'] [1];


*/


// For Each 
$food = array('Healthy'=>
						array('Salad', 'vegartables', 'Pasta'),
				'Unhealthy'=> 
				array ('Pizza', 'Ice cream', 'Pop corn'));


foreach ($food as $element => $inner_array) {
	echo '<strong>'.$element.'</strong><br>';
	echo $inner_element. '<br>';
	foreach ($inner_array as $item) {
		echo $item .'<br>';

	}
}



?>