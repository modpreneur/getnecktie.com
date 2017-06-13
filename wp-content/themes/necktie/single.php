<?php
$post = \get_post();

/** @var WP_User $user */
$user = \get_user_by('id', $post->post_author);

$readingTime = $rt->rtAddReadingTimeBeforeContent($post->post_content);

$lastPosts = \wp_get_recent_posts(['numberposts' => 3]);
$lastPostsArray = [];

foreach ($lastPosts as $lastPost) {
    $lastPostsArray[] = \get_post($lastPost['ID']);
}


$renderer->render('Blog/detail', [
    'bodyClass'   => 'blog-detail-page',
    'post'        => $post,
    'author'      => \get_the_author_meta('nicename', $post->post_author),
    'readingTime' => $readingTime,
    'lastPosts'   => $lastPostsArray,
    'user'        => $user,
    'userImage'   => \get_cupp_meta($user->ID, [90, null]),
    'userProfileUrl' => \get_author_posts_url($user->ID, $user->user_nicename),
]);

