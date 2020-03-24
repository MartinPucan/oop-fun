<?php
declare(strict_types=1);

class ArrayFunctions
{
//	public $array = [];
//
//	public function __construct($array)
//	{
//		$this->array = $array;
//	}

	public function fillArray($start, $stop)
	{
		return range($start, $stop);
	}

	public function dd($value)
	{
		echo '<pre>';
		var_dump($value);
		echo '</pre>';
	}

	public function range($start, $stop)
	{
		$array = [];

		if ($stop > $start) {
			for (; $start <= $stop; $start++) {
				$array[] = $start;
			}
		} else {
			for (; $stop <= $start; $stop++) {
				$array[] = $stop;
			}
		}

		return $array;
	}

	public function __toString()
	{
		return __CLASS__ . PHP_EOL;
	}

}

//$output = new ArrayFunctions($array);
//
//$output->range(1, 8);
//print_r($output);

$name = new ArrayFunctions();

echo strval(new ArrayFunctions());
echo "The class name is " . get_class($name);






//$start = -7;
//$stop = 1;
//
//$array = [];
//
//if ($stop > $start) {
//	for (; $start <= $stop; $start++) {
//		$array[] = $start;
//	}
//} else {
//	for (; $stop <= $start; $stop++) {
//		$array[] = $stop;
//	}
//}
//
//print_r($array);


//  array_chunk(input, size);
//  array_reverse(array);
//  array_search(needle, haystack);
//  array_push(array, var);
//  array_reduce(input, function);
//  array_key_exists(key, array);
//  array_filter(input);
//  array_map(callback, arr1);
//  array_column(input, column_key);
