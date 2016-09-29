<?php
	//this is how you print text in php
	echo 'hello world';
	//this is how you store a variable
	$myvar = 'some text i want to store in a variable';
	//difference between single and double quotes
	 echo '<br>';
	echo '$myvar';
	echo '<br>';
	 "$myvar";
//this is an exmple of php arrays

$myarray = array ();
$myarray[] = 'some value 1';
$myarray[] = 'some value 2';
$myarray[] = 'some value 3';

print_r($myarray);

$myAssoc = array('value1' => $myarray, 'value2' => $myarray);

print_r($myAssoc);

?>
