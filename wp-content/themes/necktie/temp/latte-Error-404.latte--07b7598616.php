<?php
// source: /var/www/html/wp-content/themes/necktie/inc/../latte/Error/404.latte

use Latte\Runtime as LR;

class Template07b7598616 extends Latte\Runtime\Template
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
        <img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 6 */ ?>/resources/img/header-image.png" alt="header background" class="background-image">
        <div class="container">
            <header class="row">
                <div class="span-mini-12 text-left">
                    <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($homeUrl)) /* line 10 */ ?>">
                        <span class="icon icon-logo logo"></span>
                    </a>
                </div>
                <div class="span-mini-12 text-right">
                    <a href="https://www.facebook.com/getnecktie" rel="_blank">
                        <span class="icon-Group-128"><span class="path1"></span><span class="path2"></span></span>
                    </a>
                    <a href="https://www.instagram.com/getnecktie/" rel="_blank">
                        <span class="icon-Group-127"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                    </a>
                </div>
            </header>
            <div class="row">
                <div class="span-large-24">
                    <h1>404 - Page Not Found</h1>
                    <img class="mockup-img" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 26 */ ?>/resources/img/mockup.png" alt="Necktie">
                </div>
            </div>
            <div class="row">
                <div class="span-large-8 offset-large-8 span-medium-12 offset-medium-6 span-small-16 offset-small-4 span-mini-20 offset-mini-2 text-center">
                    <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($homeUrl)) /* line 31 */ ?>">
                        <span class="btn">
                            <button type="submit">GO BACK TO<span>HOMEPAGE</span></button>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
	}

}
