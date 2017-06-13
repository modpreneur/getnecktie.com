<?php
// source: /var/www/html/wp-content/themes/necktie/inc/../latte/ThankYou/default.latte

use Latte\Runtime as LR;

class Templatee15d4ca266 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'footer' => 'blockFooter',
	];

	public $blockTypes = [
		'content' => 'html',
		'footer' => 'html',
	];


	function main()
	{
		extract($this->params);
?>


<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
?>


<?php
		$this->renderBlock('footer', get_defined_vars());
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
        <div class="container">
            <header class="row">
                <div class="span-mini-12 text-left">
                    <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($homeUrl)) /* line 9 */ ?>">
                        <span class="icon icon-logo logo"></span>
                    </a>
                </div>
                <div class="span-mini-12 text-right">
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
                    <h1>Thank you for your attention.</h1>
                    <img class="mockup-img" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 25 */ ?>/resources/img/mockup.png" alt="Necktie">
                    <a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($homeUrl)) /* line 26 */ ?>">
                    <span class="btn">
                        <input type="submit" name="send-email" value="BACK">
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
	}


	function blockFooter($_args)
	{
		
	}

}
