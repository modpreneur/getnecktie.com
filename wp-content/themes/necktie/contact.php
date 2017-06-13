<?php /* Template Name: Blog */

$query = new WP_Query([

]);

$renderer->render('Contact/default', [
    'bodyClass' => 'contact-page',
    'posts' => $query->get_posts(),
]);