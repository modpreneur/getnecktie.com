<?php
// source: /var/www/html/wp-content/themes/necktie/latte/form.latte

use Latte\Runtime as LR;

class Template19e13a0d65 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<section class="form">
    <div class="container">
        <div class="row">
            <div class="span-large-24">
                <h2>Wanna talk directly to the founder?<br>...Send him an email</h2>
                <form method="post" action="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 6 */ ?>/form.php" name=contactForm id="contactForm">
                    <div class="row">
                        <div class="span-large-12 span-small-24">
                            <input type="text" class="input-name" placeholder="Your name" name=name required>
                        </div>
                        <div class="span-large-12 span-small-24">
                            <input type="email" class="input-email" name=email placeholder="Best Email" required>
                        </div>
                        <div class="span-large-24 span-small-24">
                            <textarea class="input-message" name=message placeholder="Write your message…How can we help you? :)"></textarea>
                        </div>
                        <span class="btn">
                            <input type="submit" name=send value="SEND">
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><?php
		return get_defined_vars();
	}

}
