<?php
// source: /var/www/html/wp-content/themes/necktie/inc/../latte/Blog/detail.latte

use Latte\Runtime as LR;

class Templateab0337d912 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
?>

<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		$this->parentName = '../@layout.latte';
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <section class="content">
        <div class="photo" style="background-image: url(<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss($basePath)) /* line 5 */ ?>/resources/img/blog-photo.png);"></div>
        <div class="filter"></div>
        <div class="gradient"></div>
        <div class="container">
            <header class="row">
                <div class="span-mini-12 text-left">
                    <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($homeUrl)) /* line 11 */ ?>">
                        <span class="icon icon-logo logo"></span>
                    </a>
                </div>
                <div class="span-mini-12 text-right">
                    <?php echo $necktie_main_menu /* line 16 */ ?>

                    <a href="https://www.facebook.com/getnecktie" rel="_blank" class="icon facebook">
                        <span class="icon-uniE909"></span>
                    </a>
                    <a href="https://www.instagram.com/getnecktie/" rel="_blank" class="icon instagram">
                        <span class="icon-Group-152"></span>
                    </a>
                </div>
            </header>
            <div class="row">
                <div class="span-large-24">
                    <h1><?php echo LR\Filters::escapeHtmlText($post->post_title) /* line 27 */ ?></h1>
                    <p><?php echo $readingTime /* line 28 */ ?></p>
                </div>
            </div>
        </div>
    </section>
    <article>
        <div class="container">
            <div class="row">
                <div class="span-large-24">
                    <?php echo (necktie_the_content($post)) /* line 37 */ ?>

                </div>
            </div>
        </div>
    </article>
    <section class="author">
        <div class="container">
            <div class="row">
                <div class="span-large-24">
                    <div class="box">
<?php
		if ($userImage) {
			?>                            <img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($userImage)) /* line 48 */ ?>" alt="Author" class="img-responsive photo" width="90">
<?php
		}
?>
                        <h4>AUTHOR</h4>
                        <h3><a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($userProfileUrl)) /* line 51 */ ?>"><strong><?php
		echo LR\Filters::escapeHtmlText($author) /* line 51 */ ?></strong></a></h3>
<?php
		if ($user->description) {
			?>                            <p><?php echo LR\Filters::escapeHtmlText($user->description) /* line 53 */ ?></p>
<?php
		}
?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="follow">
        <div class="container">
            <div class="row">
                <div class="span-large-24">
                    <form action="//getnecktie.us15.list-manage.com/subscribe/post?u=972099b5cef632db335e5dfeb&amp;id=3598af48ea" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <label for="mce-EMAIL">Follow us today:</label>
                            <div class="box">
                                <span class="icon-ic_mail_outline_24px"></span>
                                <input type="email" class="input-email" placeholder="Business E-mail" name="EMAIL" id="mce-EMAIL" required>
                                <button type="submit" name="subscribe" id="mc-embedded-subscribe">Subscribe now</button>
                            </div>
                            <div id="mce-responses" class="clear" style="display:none">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_972099b5cef632db335e5dfeb_3598af48ea" tabindex="-1" value=""></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="posts">
        <div class="container">
            <div class="row items">
                <div class="span-none-padding-large-24">
                    <h2>latest posts</h2>
<?php
		/* line 88 */
		$this->createTemplate('posts.latte', ['posts' => $lastPosts] + $this->params, "include")->renderToContentType('html');
?>
                </div>
            </div>
        </div>

    </section>
<?php
		/* line 94 */
		$this->createTemplate('../socials.latte', $this->params, "include")->renderToContentType('html');
		
	}

}
