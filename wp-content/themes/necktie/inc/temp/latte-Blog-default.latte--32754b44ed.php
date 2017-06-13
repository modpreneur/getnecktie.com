<?php
// source: /var/www/html/wp-content/themes/necktie/inc/../latte/Blog/default.latte

use Latte\Runtime as LR;

class Template32754b44ed extends Latte\Runtime\Template
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
		if (isset($this->params['post'])) trigger_error('Variable $post overwritten in foreach on line 48');
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
                    <a href="<?php $set->macroLink($node, $writer)?>">
                        <span class="icon icon-logo logo"></span>
                    </a>
                </div>
                <div class="span-mini-12 text-right">
                    <ul>
                        <li><a class="active" href="<?php $set->macroLink($node, $writer)?>">Blog</a></li>
                        <li><a href="<?php $set->macroLink($node, $writer)?>">Contact</a></li>
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
		$iterations = 0;
		foreach ($posts as $post) {
			?>                        <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("ahoj")) ?>" class="item">
                            <span class="photo" style="background-image: url(<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss($basePath)) /* line 50 */ ?>/resources/img/blog-thumbnail.png);"></span>
                            <span class="text">
                            <span class="h2"><?php echo LR\Filters::escapeHtmlText($post->post_title) /* line 52 */ ?></span>
                            <span class="p"><?php echo LR\Filters::escapeHtmlText($post->post_content) /* line 53 */ ?></span>
                            <span class="read-more"><span class="icon-ic_chevron_right_24px"></span></span>
                        </span>
                        </a>
<?php
			$iterations++;
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
