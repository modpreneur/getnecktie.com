<?php
// source: /var/www/html/wp-content/themes/necktie/inc/../latte/User/default.latte

use Latte\Runtime as LR;

class Templatec3184c32b4 extends Latte\Runtime\Template
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
        <div class="container">
            <header class="row">
                <div class="span-mini-12 text-left">
                    <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($homeUrl)) /* line 10 */ ?>">
                        <span class="icon icon-logo logo"></span>
                    </a>
                </div>
                <div class="span-mini-12 text-right">
                    <?php echo $necktie_main_menu /* line 15 */ ?>

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
                    <h1><?php echo LR\Filters::escapeHtmlText($user->user_nicename) /* line 26 */ ?></h1>
                    <p>
                        <?php echo LR\Filters::escapeHtmlText($user->description) /* line 28 */ ?>

                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="posts">
        <div class="container">
            <div class="row">
                <div id="tags" class="span-large-24">
                    <p>Author:</p>
                </div>
            </div>
        </div>
        <div class="row items">
            <div class="span-none-padding-large-24">
<?php
		/* line 45 */
		$this->createTemplate("../Blog/posts.latte", $this->params, "include")->renderToContentType('html');
?>
            </div>
        </div>
    </section>
<?php
		/* line 49 */
		$this->createTemplate('../socials.latte', $this->params, "include")->renderToContentType('html');
		
	}

}
