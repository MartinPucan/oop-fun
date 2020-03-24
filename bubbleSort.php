<?php
declare(strict_types = 1);

require 'functions.php';

$array = [1, 2, 3, 2, 3, 5, 3, 6, 3, 7, 3, 1, 31, 1, 34, 1, 38];
$array1 = [1, 2, 3, 2, 3, 5, 3, 6, 3, 7, 3, 1, 31, 1, 34, 1, 38];

function bubbleSort($array)
{
	for($i = 0; count($array) > $i; $i++)
	{
		print_r($array);
	}
}

bubbleSort($array1);


