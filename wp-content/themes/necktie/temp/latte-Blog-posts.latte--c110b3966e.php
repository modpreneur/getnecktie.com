<?php
// source: /var/www/html/wp-content/themes/necktie/latte/Blog/posts.latte

use Latte\Runtime as LR;

class Templatec110b3966e extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		$iterations = 0;
		foreach ($posts as $itemPost) {
			?>    <a href="<?php echo LR\Filters::escapeHtmlAttr(the_permalink($itemPost)) ?>" class="post-item item <?php
			echo LR\Filters::escapeHtmlAttr(necktie_post_tags($itemPost)) /* line 2 */ ?>">

<?php
			if (has_post_thumbnail($itemPost->ID)) {
				?>            <span class="photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($itemPost, [352, 220]) /* line 5 */ ?>');"></span>
<?php
			}
?>

        <span class="text">
            <span class="h2"><?php echo LR\Filters::escapeHtmlText($itemPost->post_title) /* line 9 */ ?></span>
            <span class="p"><?php echo LR\Filters::escapeHtmlText(necktie_the_excerpt($itemPost)) /* line 10 */ ?></span>
            <span class="read-more">
                <span class="icon-ic_chevron_right_24px"></span>
            </span>
        </span>
    </a>
<?php
			$iterations++;
		}
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['itemPost'])) trigger_error('Variable $itemPost overwritten in foreach on line 1');
		
	}

}
