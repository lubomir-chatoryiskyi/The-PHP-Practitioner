<?php

class Post
{

    public $title;

    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }

}

$posts = [
    new Post('My first post', true),
    new Post('My second post', true),
    new Post('My third post', true),
    new Post('My fourth post', false),
    new Post('My fifth post', false),
];

$unpublishedPosts = array_filter($posts, function ($post) {
    return !$post->published;
});

$publishedPosts = array_filter($posts, function ($post) {
    return $post->published;
});

$modified = array_map(function ($post) {
    $post->published = true;
    return (array) $post;
}, $posts);

foreach ($posts as $post) {
    $post->published = true;
}

foreach ($posts as &$post) {
    $post = 'Tra-la-la';
}

$titles = array_column($modified, 'title');

dd($titles);