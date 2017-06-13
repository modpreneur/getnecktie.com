<?php
// source: /var/www/html/wp-content/themes/necktie/latte/status-v2.latte

use Latte\Runtime as LR;

class Template0a4b77382a extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<section class="status-v2">
    <div class="container">
        <div class="row">
            <div class="span-large-24">
                <h2>What is the status of Necktie Development?</h2>
            </div>
        </div>
        <div class="row">
            <div class="span-large-14">
                <img class="mockup-img" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */ ?>/resources/img/mockup.png" alt="Necktie">
            </div>
            <div class="span-large-9">
                <p><strong>STATUS:</strong> Necktie is currently running in beta test mode on a couple websites with a few hundred thousand customers.</p>
                <p>We are going to open the testing beta in the following few months and we would like to invite you to our user test group.</p>
                <p>What this means is that you can watch us continuously add features, eliminate bugs and continue building this sales platform <br>AND once the beta is open again, check out how it feels for you and.</p>
                <p>Free of charge, no data or software migration required! Just put your email below and we will get in touch with you shortly.</p>
            </div>
        </div>
    </div>
</section><?php
		return get_defined_vars();
	}

}
