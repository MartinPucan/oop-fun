<?php

class A
{
	private $property = 'default value'; // kdyby zde byla globalni promenna (public), trida B by ji prepsala

	final public function function2()
	{
		echo 'Property $property has value ' . $this->property . "\n";
	}
}

class B extends A
{
	private $property = 'different value';
	private $value = 'hey';

	public function function3()
	{
		echo 'Property $property has value ' . $this->property . "\n";
	}

	public function method2()
	{
		echo 'I got value ' . $this->value . "\n";
	}
}

class C extends B
{
	private $name = 'Viktor Novorski';

	public function name()
	{
		echo 'My $name is ' . $this->name . "\n";
	}
}

$c = new C();
$c->function2();
$c->function3();
$c->method2();
$c->name();


