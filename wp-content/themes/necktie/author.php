<?php

global $wp_query;
$curauth = $wp_query->get_queried_object();


$query = new WP_Query([
    'author' => $curauth->ID,
]);


$renderer->render('User/default', [
    'bodyClass' => 'contact-page author-page',
    'user'      => $curauth,
    'posts'     => $query->get_posts()
]);