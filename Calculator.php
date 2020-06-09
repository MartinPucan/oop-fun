<?php
declare(strict_types=1);

class Calculator
{
	private int $num1;
	private int $num2;

	public function __construct($num1, $num2)
	{
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function addition($number1, $number2)
	{
		return (float)$number1 + (float)$number2;
	}

	public function subtraction()
	{
		return (float)$this->num1 - (float)$this->num2;
	}

	public function multiplication()
	{
		return $this->num1 * $this->num2;
	}

	public function division()
	{
		return $this->num1 / $this->num2;
	}
}

$calculator = new Calculator(4,2);

var_dump($calculator->addition(2.4,10.3));
var_dump($calculator->subtraction());
var_dump($calculator->multiplication());
var_dump($calculator->division());


