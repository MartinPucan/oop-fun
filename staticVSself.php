<?php

class A 
{
    public static function get_self() 
    {
        return new self();
    }

    public function get_public(): int
    {
        return $this->get_private() + 4;
    }

    private function get_private()
    {
        return 3;
    }

    public static function get_static() 
    {
        return new static();
    }
}

class B extends A {}


$instance = new B();

var_dump($instance->get_public());
var_dump($instance->get_static());

$result = new A;
$result->get_public();
var_dump($result->get_public());    

function toString()
{
    
}

echo get_class(B::get_self());  // A
echo get_class(B::get_static()); // B
echo get_class(A::get_self()); // A
echo get_class(A::get_static()); // A
