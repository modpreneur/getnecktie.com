<?php
// source: /var/www/html/wp-content/themes/necktie/inc/../latte/Page/default.latte

use Latte\Runtime as LR;

class Templatec2a9e3d96a extends Latte\Runtime\Template
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
        <div class="photo" style="background-image: url(<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss($basePath)) /* line 6 */ ?>/resources/img/blog-photo.png);"></div>
        <div class="filter"></div>
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
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <?php echo LR\Filters::escapeHtmlText($post->post_content) /* line 35 */ ?>

        </div>
    </section>

<?php
		/* line 39 */
		$this->createTemplate('../socials.latte', $this->params, "include")->renderToContentType('html');
		
	}

}
