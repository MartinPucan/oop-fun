<?php 

require 'functions.php';

class Post
{
    public $title;
    public $published;
    public $author;

    public function __construct(string $title, bool $published, string $author)
    {
        $this->title = $title;
        $this->published = $published;
        $this->author = $author;
    }
}

$posts = [
    new Post('first', false, 'Adam'),
    new Post('second', true, 'Martin'),
    new Post('third', true, 'Vlada'),
    new Post('fourth', false, 'Lenka')
];

// returns objects that are true
$isPublishedPosts = array_filter($posts, function ($post) {
    return $post->published;
});

// returns $post as array, all value will be 'foobar' 
$modified = array_map(function ($post) {
    return 'foobar';
}, $posts);


$titless = new Post('ahoj', false, 'hi');

//  returns all array titles
$titles = array_column($posts, 'title');


// lze vratit pouze 3 parametry
$together = array_column($posts, 'author', 'title');


// return all posts items as array 
$posts = array_map( function ($post) {
    return (array) $post;
}, $posts);


// return all authors
$authors = array_column($posts, 'author');  

//  return two information about server
$info = [
    $_SERVER['REQUEST_URI'], $_SERVER['HTTP_CONNECTION'] 
];

dd($posts);
