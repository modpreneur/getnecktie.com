<?php
// source: /var/www/html/wp-content/themes/necktie/inc/../latte/Homepage/default.latte

use Latte\Runtime as LR;

class Templatefe63c783f5 extends Latte\Runtime\Template
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
		$this->renderBlock('scripts', get_defined_vars());
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
        <img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 5 */ ?>/resources/img/header-image.png" alt="header background" class="background-image">
        <div class="container">
            <header class="row">
                <div class="span-mini-12 text-left">
                    <a href="">
                        <span class="icon icon-logo logo"></span>
                    </a>
                </div>
                <div class="span-mini-12 text-right">
                    <ul>
                        <li><a href="">Blog</a></li>
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
                    <h1>Imagine turning your brand into an empire, influencing millions worldwide with just a few clicks</h1>
                </div>
            </div>
            <div class="row">
                <div class="span-large-20 offset-large-2">
                    <div class="row video" id="video">
                        <iframe src="https://player.vimeo.com/video/219700051" width="837" height="470" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="display-none"></iframe>
                        <img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 35 */ ?>/resources/img/video-thumbnail.png" alt="thumbnail">
                        <div class="overlay">
                            <a href="#">
                                <span class="outer">
                                    <span class="inner">
                                        <span class="icon-ic_slow_motion_video_24px"></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="follow">
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
        </div>
    </section>
<?php
		/* line 67 */
		$this->createTemplate('../status-v2.latte', $this->params, "include")->renderToContentType('html');
		/* line 68 */
		$this->createTemplate('../form.latte', $this->params, "include")->renderToContentType('html');
		/* line 69 */
		$this->createTemplate('../socials.latte', $this->params, "include")->renderToContentType('html');
		
	}


	function blockScripts($_args)
	{
		extract($_args);
		$this->renderBlockParent('scripts', get_defined_vars());
?>
    <script>
        $(document).ready(function(){
            $("#video a").click(function(){
                var iframe =  $(this).parent().parent().find("iframe");
                $("#video a").addClass("spinner");
                setTimeout(function(){
                    iframe.attr('src', iframe.attr('src') + '?autoplay=1');
                    iframe.load(function(){
                       iframe.removeClass("display-none");
                        $("#video .overlay").addClass("display-none");
                        $("#video img").addClass("display-none");

                    });}
                ,1000);

                return false;
            });
        });
    </script>
<?php
	}

}
