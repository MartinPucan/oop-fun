<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffe');
    }
}

class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}

(new SpecialtyCoffeeMaker())->brew();
(new SpecialtyCoffeeMaker())->brewLatte();


class Collection
{
    public $items = [];

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
		return array_sum(array_column($this->items, $key));
    }
}

class VideosCollection extends Collection
{
	public function length()
	{
		return $this->sum('length');
	}
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('Some Video', 100),
    new Video('Some Video', 200),
    new Video('Some Video', 300)
]);
var_dump($videos);
echo $videos->length();
