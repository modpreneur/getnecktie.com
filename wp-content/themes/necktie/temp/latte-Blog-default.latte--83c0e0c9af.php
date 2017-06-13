<?php
// source: /var/www/html/wp-content/themes/necktie/latte/Blog/default.latte

use Latte\Runtime as LR;

class Template83c0e0c9af extends Latte\Runtime\Template
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
                    <a href="">
                        <span class="icon icon-logo logo"></span>
                    </a>
                </div>
                <div class="span-mini-12 text-right">
                    <ul>
                        <li><a class="active" href="">Blog</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
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
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="posts">
        <div class="container">
            <div class="row tags">
                <div class="span-large-24">
                    <p>Popular tags</p>
                    <a href="#">#Development</a>
                    <a href="#">#Javascript</a>
                    <a href="#">#TeamLife</a>
                    <a href="#">#Learning</a>
                    <a href="#">#BUGs</a>
                </div>
            </div>
            <div class="row items">
                <div class="span-none-padding-large-24">
<?php
		for ($i = 0;
		$i < 9;
		$i++) {
			?>                        <a class="item" href="">
                            <span class="photo" style="background-image: url(<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss($basePath)) /* line 50 */ ?>/resources/img/blog-thumbnail.png);"></span>
                            <span class="text">
                            <span class="h2">What we learned from SCRUM</span>
                            <span class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus erat dolor, dignissim at magna eu, dictum imperdiet tortor.</span>
                            <span class="read-more"><span class="icon-ic_chevron_right_24px"></span></span>
                        </span>
                        </a>
<?php
		}
?>
                </div>
            </div>
        </div>

    </section>
<?php
		/* line 63 */
		$this->createTemplate('../socials.latte', $this->params, "include")->renderToContentType('html');
		
	}

}
