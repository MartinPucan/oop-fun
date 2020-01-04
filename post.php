<?php 

require 'functions.php';

class Post

{
    public $title;
    public $author;
    public $published;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

}


$post = [
    new Post('first'),
    new Post('second', true),
    new Post('third', true),
    new Post('fourth', false)
];

dd($post);
