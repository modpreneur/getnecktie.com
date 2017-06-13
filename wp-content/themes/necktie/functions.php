<?php

use Necktie\Blog\Renderer;

require __DIR__ . '/../necktie/../../../vendor/autoload.php';
require __DIR__ . '/inc/Renderer.php';
require __DIR__ . '/inc/UIMacros.php';
require __DIR__ . '/inc/ReadingTimeWP.php';

$renderer = new Renderer();

\add_action( 'after_setup_theme', 'necktieSetup' );

function necktieSetup(): void
{
    \add_theme_support( 'post-thumbnails' );

    \register_nav_menus( [
        'primary' => __('Primary Menu', 'necktie'),
    ]);


    \add_theme_support('html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ]);


    \add_theme_support('post-formats', [
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ]);
}


add_action( 'phpmailer_init', 'mailerConfig', 10, 1);

function mailerConfig(PHPMailer $mailer): void
{
    $mailer->isSMTP();
    $mailer->SMTPAuth = true;
    $mailer->Port = 25;
    $mailer->IsHTML(true);
    $mailer->From = 'info@modpreneur.com';
    $mailer->Host = 'email-smtp.us-east-1.amazonaws.com';
    $mailer->Username = 'AKIAIZT7CMXM3IHCWXAQ';
    $mailer->Password = 'AmaYvetpp9l0NHutdRdukZ3W1AALfHrQnnSf0azUH5kJ';     // Enable TLS encryption, `ssl` also accepted
}


$rt = new \Necktie\Blog\ReadingTimeWP();

$defaults = [
    'container' => false,
    'theme_location' => 'primary',
    'echo'  => false,
    'depth' => 0,
];


/**
 * @param WP_Post $post
 *
 * @return string
 */
function necktie_the_excerpt(WP_Post $post): string // @todo as filter?
{
    $charlength = 200;
    \setup_postdata( $post );
    $excerpt = \get_the_excerpt();

    if (\mb_strlen($excerpt) > $charlength) {
        $subex   = \mb_substr($excerpt, 0, $charlength - 5);
        $exwords = \explode(' ', $subex);
        $excut   = -(\mb_strlen($exwords[\count($exwords) - 1]));

        if ($excut < 0) {
            return \trim(\mb_substr($subex, 0, $excut)) . '...';
        } else {
            return $subex;
        }

        return '[...]';
    } else {
        return $excerpt;
    }
}


/**
 * @param WP_Post $post
 *
 * @return string
 */
function necktie_the_content(WP_Post $post): string // @todo as filter?
{
    $text = $post->post_content;
    return \apply_filters('the_content', $text);
}


/**
 * @param WP_Post $post
 */
function necktie_post_tags(WP_Post $post): string
{
    $row = '';
    foreach (\wp_get_post_tags($post->ID) as $item) {
        $row = $item->slug .= ' ';
    }

    return trim($row);
}


$mainMenu = \wp_nav_menu($defaults);
$renderer->addParam('necktie_main_menu', $mainMenu);
