<?php /* Template Name: Blog */


$query = new WP_Query([

]);


$renderer->render('Blog/default', [
    'bodyClass' => 'blog-page',
    'posts' => $query->get_posts(),
]);