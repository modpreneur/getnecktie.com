<?php

require __DIR__ . '/../../../wp-blog-header.php';

$name    = clean($_POST['name']) ?? '';
$email   = clean($_POST['email']) ?? '';
$message = clean($_POST['message']) ?? '';

if (!\filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return;
}

$rendererMessage = $renderer->renderToString('email', [
    'email' => $email,
    'name' => $name,
    'message' => $message,
    'datetime' => new \DateTime(),
]);

\wp_mail(
    'gregor@modpreneur.com',
    $name,
    $rendererMessage
);


$post = \get_post(27);
\wp_safe_redirect(\get_the_permalink($post));


/**
 * @param string $string
 *
 * @return string
 */
function clean(string $string)
{
    return \filter_var($string, FILTER_SANITIZE_STRING);
}
