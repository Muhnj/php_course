<?php 
/*
// string Length
$string = 'Munir';
$string_length = strlen($string);

for ($x=1; $x<= $string_length; $x++) {
	echo $x. '<br>';
}



//lower/ upper case conversion.

$string = 'I could Be Any Case.';
$string_lower = strtolower($string);
$string_upper = strtoupper($string);

echo $string_upper;
echo $string_lower;

*/
if (isset($_GET['user_name']) &&!empty($_GET['user_name'])){
      $user_name = $_GET['user_name'];
      $user_name_lc = strtolower($user_name);

	if ($user_name == 'munir'){
		echo 'You are the best.'.$user_name;
	}
}


?>


<form action= "index.php" method= "GET">
	name: <input type = "text" name ="user_name"><br><br>
	<input type= "submit" value="Submit">
</form>