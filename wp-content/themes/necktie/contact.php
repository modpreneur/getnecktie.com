<?php /* Template Name: Contact */

$renderer->render('Contact/default', [
    'bodyClass' => 'contact-page',
    'post' => \get_post(),
]);