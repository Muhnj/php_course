<?php
/*//basic Arrays
$food = array('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>150);
$names = ['Jed ', 'Wahab', 'Ivan', 'Victor','Munir'];
echo $names[2],
$food[1];
$food[4] = 'Vegetable';

print_r($food);

//Associative Arrays

echo $food['Pizza'];



// multi dimension Arrays
*/

$food = array('Healthy'=>
						array('Salad', 'vegartables', 'Pasta'),
				'Unhealthy'=> 
				array ('Pizza', 'Ice cream'));

echo $food['Unhealthy'] [1];

?>