<?php 

require 'functions.php';

class Employee
{
    private string $name;
    private string $surName; 
    private string $salary;

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function setSurname(string $surname)
    {
        $this->surName = $surname;

        return $this;
    }

    public function setSalary(string $salary)
    {
        $this->salary = $salary;

        return $this;
    }

    public function setCar(string $car)
    {
        $this->car = $car;

        return $this;
    }

    public function setPosition(string $position)
    {
        $this->position = $position;

        return $this;
    }

    public function __toString()
    {
        $employeeInfo = '<strong>Name: </strong>' . $this->name . PHP_EOL;
        $employeeInfo .= '<strong>Surname: </strong>' . $this->surName . PHP_EOL;
        $employeeInfo .= '<strong>Salary: </strong>' . $this->salary . PHP_EOL;
        $employeeInfo .= '<strong>Car: </strong>' . $this->car . PHP_EOL;
        $employeeInfo .= '<strong>Position: </strong>' . $this->position . PHP_EOL;

        return $employeeInfo;
    }
}

# Create a new instance of the Employee class, Tom Smith, with a salary of 100:
$employee = (new Employee())
                ->setName('Tom')
                ->setSurname('Smith')
                ->setSalary('100')
                ->setCar('Audi')
                ->setPosition('Developer');

# Display the value of the Employee instance:
echo $employee;

dd($employee);
