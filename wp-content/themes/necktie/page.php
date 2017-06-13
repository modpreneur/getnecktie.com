<?php

$post = \get_post();

$renderer->render('Page/default', [
    'bodyClass' => 'page-page',
    'post' => $post,
]);