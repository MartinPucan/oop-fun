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

$posts = [
    new Post('first', false, 'Adam'),
    new Post('second', true, 'Martin'),
    new Post('third', true, 'Vlada'),
    new Post('fourth', false, 'Lenka')
];


// returns objects that are true
// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });



// $modified = array_map(function ($post) {
//     return 'foobar';
// }, $posts);


//  returns all array titles
// $titles = array_column($posts, 'title');


// lze vratit pouze 3 parametry
$together = array_column($posts, 'author', 'title');


// return all posts items as array 
$posts = array_map( function ($post) {
    return (array) $post;
}, $posts);


// return all authors
// $authors = array_column($posts, 'author');  

dd($together);
