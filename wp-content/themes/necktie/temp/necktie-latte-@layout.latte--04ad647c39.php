<?php
// source: /var/www/html/wp-content/themes/necktie/latte/@layout.latte

use Latte\Runtime as LR;

class Template04ad647c39 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'footer' => 'blockFooter',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'content' => 'html',
		'footer' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Get Necktie</title>

	<link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */ ?>/resources/css/bowtie.css">
	<link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */ ?>/resources/css/style.css?v=1.1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */ ?>/resources/img/favicon.png">
	<link rel="canonical" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($homeUrl)) /* line 13 */ ?>">

	<meta property="og:site_name" content="Necktie">
	<meta property="og:title" content="Homepage">
	<meta property="og:url" content="<?php echo LR\Filters::escapeHtmlAttr($homeUrl) /* line 17 */ ?>">
	<meta property="og:type" content="website">
	<meta itemprop="name" content="Homepage">
	<meta itemprop="url" content="http://getnecktie.com/">
	<meta name="twitter:title" content="Home">
	<meta name="twitter:url" content="http://getnecktie.com/">
	<meta name="twitter:card" content="summary">
	<meta name="description" content="">

	<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Analytics -->
	<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-96379743-1', 'auto');
        ga('send', 'pageview');
	</script>

	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
	<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<!--End mc_embed_signup-->

<?php
		if ('is_user_logged_in') {
?>
		<style>
			body{
				padding-top: 30px;
			}
		</style>
<?php
		}
?>
</head>

<body class="<?php echo LR\Filters::escapeHtmlAttr($bodyClass) /* line 55 */ ?>">
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>	<div<?php if ($_tmp = array_filter(['flash', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 56 */ ?></div>
<?php
			$iterations++;
		}
		?>	<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		$this->renderBlock('footer', get_defined_vars());
		$this->renderBlock('scripts', get_defined_vars());
?>

	<?php echo LR\Filters::escapeHtmlText(wp_footer()) /* line 74 */ ?>

</body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 56');
		
	}


	function blockContent($_args)
	{
		
	}


	function blockFooter($_args)
	{
?>		<footer>
			<div class="container">
				<div class="row">
					<div class="span-large-24">
						<p>Modern Entrepreneur s.r.o. 2017</p>
					</div>
				</div>
			</div>
		</footer>
<?php
	}


	function blockScripts($_args)
	{
?>	<script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<?php
	}

}
