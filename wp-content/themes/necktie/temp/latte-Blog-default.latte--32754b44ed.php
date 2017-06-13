<?php
// source: /var/www/html/wp-content/themes/necktie/inc/../latte/Blog/default.latte

use Latte\Runtime as LR;

class Template32754b44ed extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'content' => 'html',
		'scripts' => 'html',
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
		$this->renderBlock('scripts', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['tag'])) trigger_error('Variable $tag overwritten in foreach on line 37');
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
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="posts">
        <div class="container">
            <div class="row tags">
                <div id="tags" class="span-large-24">
                    <p>Popular tags</p>
<?php
		$iterations = 0;
		foreach (get_tags() as $tag) {
			?>                        <a class="<?php echo LR\Filters::escapeHtmlAttr($tag->slug) /* line 38 */ ?>" href="#">#<?php
			echo LR\Filters::escapeHtmlText($tag->name) /* line 38 */ ?></a>
<?php
			$iterations++;
		}
?>
                    <a class="all" href="#">Show all</a>
                </div>
            </div>

            <div class="row items">
                <div class="span-none-padding-large-24">
<?php
		/* line 46 */
		$this->createTemplate('posts.latte', $this->params, "include")->renderToContentType('html');
?>
                </div>
            </div>
        </div>
    </section>
<?php
		/* line 51 */
		$this->createTemplate('../socials.latte', $this->params, "include")->renderToContentType('html');
		
	}


	function blockScripts($_args)
	{
		extract($_args);
		$this->renderBlockParent('scripts', get_defined_vars());
?>

    <script>
        $(document).ready(function () {

            var cls = [];
            $('#tags').find('a').each(function(){
                cls.push(this.className);
            });

            $('#tags a').click(function (e) {
                e.preventDefault();
                $('#tags a').removeAttr('status');
                $(this).attr('data-status', 'active');

                var elCLass = $(this).attr('class');

                for(var i = 0; i < cls.length; i++) {
                    if (cls[i] !== elCLass) {
                        $('.post-item.' + cls[i]).fadeOut();
                    } else {
                        $('.post-item.' + cls[i]).fadeIn();
                    }
                }

                if (elCLass == 'all') {
                    $('.post-item').fadeIn();
                }
            });
        });
    </script>

<?php
	}

}
