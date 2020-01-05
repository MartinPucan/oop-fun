<?php

require 'functions.php';

class Person
{
    private $properties; // properties of Person, just an Example

    public function __construct($properties)
    {
        $this->properties = $properties;
    }

}

$name = new Person('Jeffrey');


$array = [
    new Person('Paul'),
    new Person('John')
];

if ($name instanceOf Person) 
    {
        print_r($name);
        echo " is an object of class Person.". PHP_EOL . "<br>";
    } else {
        echo "This object is an instance Of Person <br>";
    }

if ($array instanceOf Person)
    {
        echo "Tento objekt je instanci tridy Person. </br>";
    } else {
        echo "Tento object neni instanci tridy Person. <br>";
        dd($array);
    }

if ($array[0] instanceOf Person) 
    {
        print_r($array[0]);
        echo "Tento objekt je instanci tridy Person. </br>";
    } else {
        echo "Tento object neni instanci tridy Person. ";
    }
