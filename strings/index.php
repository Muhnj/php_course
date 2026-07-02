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





// string Position function

$offset = 0;

$find = 'is';
$find_length = strlen($find);
$string = 'This is a string, and it is an example.';

while ($string_position = strpos($string, $find, $offset)) {
	echo '<strong>'.$find.'</strong> found at  '.$string_position.'<br>';
	$offset = $string_position + $find_length;

}


//substring replace
$string = 'This part don\'t search. This part search.';
$string_new = substr_replace($string, 'Munir', 29, 4);

echo $string_new;


// example 2 
$find = array('is', 'string', 'example');
$replace = array('Is', 'STRING', '');
$string = 'This is a string, and is an example.';
$new_string = str_replace($find, $replace, $string);
echo $new_string;


*/
if (isset($_POST['user_input']) && ! empty ($_POST['user_input'])) {
	echo $user_input = $_POST['user_input'];

}

?>
<hr>
<form action="index.php" method ="POST">
<textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea><br><br>
<input type="submit" value="submit">
</form>








