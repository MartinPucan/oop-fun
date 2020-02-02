<?php

class B
{
	public function method_from_b($s)
	{
		echo $s;
	}
}

class C
{
	public function method_from_c($s)
	{
		echo $s;
	}
}

class FakeMultipleInheritance extends B
{
	private $c;

	public function __construct()
	{
		$this->c = new C;
	}

	public function __call($method, $args)
	{
		$this->c->$method($args[0]);
	}
}

$FMI = new FakeMultipleInheritance;
$FMI->method_from_b('hey ');
$FMI->method_from_c('hello');
