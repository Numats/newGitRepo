<?php
//echo 'Test';

if (isset($_GET['input'])) {
	$string = $_GET['input'];
	echo strrev($string);
}
?>