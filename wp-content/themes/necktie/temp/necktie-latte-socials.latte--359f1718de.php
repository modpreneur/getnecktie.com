<?php
// source: /var/www/html/wp-content/themes/necktie/latte/socials.latte

use Latte\Runtime as LR;

class Template359f1718de extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<section class="socials">
    <div class="row">
        <div class="span-none-padding-large-12">
            <a class="facebook-box" href="https://www.facebook.com/getnecktie" rel="_blank">
                <p>Join our private group of driven entrepreneurs who are ready to help you suceed</p>
                <span class="icon-Group-112"></span>
            </a>
        </div>
        <div class="span-none-padding-large-12">
            <a class="instagram-box" href="https://www.instagram.com/getnecktie/" rel="_blank">
                <p>Watch our daily stories and snapshots of us moving closer to changing how content sells online</p>
                <span class="icon-Group-121"></span>
            </a>
        </div>
    </div>
</section><?php
		return get_defined_vars();
	}

}
