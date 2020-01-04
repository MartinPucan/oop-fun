<?php 

require 'functions.php';

class Post

{
    public $title;
    public $published;
    public $author;

    public function __construct($title, $published, $author)
    {
        $this->title = $title;
        $this->published = $published;
        $this->author = $author;
    }

}

// $value = true;

$posts = [
    new Post('first', false, 'Adam'),
    new Post('second', true, 'Martin'),
    new Post('third', true, 'Vlada'),
    new Post('fourth', false, 'Lenka')
];

// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });

// $modified = array_map(function ($post) {
//     return 'foobar';
// }, $posts);

// $titles = array_column($posts, 'author'); // returns array, where all the authors are


dd($titles);
