<?php 

class Team
{
    protected $name;    
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name) 
    {
        $this->members[] = $name;
    }

    public function cancel()
    {
        # code...
    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {
    
    }
}


$acme = Team::start('Boo', [
    new Member('John Voo'),
    new Member('Alan Foo'),
]);

$me = new Team('', [
   'Monalisa',
   'DaVinci' 
]);

$meMember = new Team('', [
   new Member('Timpadida'),
   new Member('Dumpadada')   
]);
      
var_dump($acme->members());    

var_dump($me->members());

var_dump($meMember->members());
