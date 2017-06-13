<?php
// source: /var/www/html/wp-content/themes/necktie/inc/../latte/email.latte

use Latte\Runtime as LR;

class Template7f5966907f extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
New form request,<br><br><br>
<i>Name:</i><br> <b><?php echo LR\Filters::escapeHtmlText($name) /* line 2 */ ?></b><br><br>
<i>Email:</i><br> <b><?php echo LR\Filters::escapeHtmlText($email) /* line 3 */ ?></b><br><br>
<i>Message:</i><br> <b><?php echo LR\Filters::escapeHtmlText($message) /* line 4 */ ?></b><br><br><br>
___________________________________<br><br>
Generated at <b><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->date, $datetime, '%d.%m.%Y')) /* line 6 */ ?></b><?php
		return get_defined_vars();
	}

}
