<?php
declare(strict_types=1);

namespace Necktie\Blog;

/**
 * Class ReadingTimeWP
 * @package Necktie\Blog
 */
class ReadingTimeWP
{
    // Add label option using add_option if it does not already exist
    public $readingTime;

    /**
     * ReadingTimeWP constructor.
     */
    public function __construct()
    {
        $defaultSettings = [
            'label'            => 'Reading Time: ',
            'postfix'          => 'minutes',
            'postfix_singular' => 'minute',
            'wpm'              => 300,
            'before_content'   => 'true',
            'before_excerpt'   => 'true',
        ];

        $rtReadingOptions = \get_option('rt_reading_time_options');

        \add_shortcode('rt_reading_time', [$this, 'rtReadingTime']);
        \add_option('rt_reading_time_options', $defaultSettings);

    }

    /**
     * @param $rtPostID
     * @param $rtOptions
     *
     * @return float
     */
    public function rtCalculateReadingTime($rtPostID, $rtOptions)
    {

        $rtContent         = \get_post_field('post_content', $rtPostID);
        $strippedContent   = \strip_shortcodes($rtContent);
        $stripTagsContent  = \strip_tags($strippedContent);
        $wordCount         = \str_word_count($stripTagsContent);
        $this->readingTime = \ceil($wordCount / $rtOptions['wpm']);

        return $this->readingTime;
    }

    /**
     * @param $atts
     * @param null $content
     *
     * @return string
     */
    public function rtReadingTime($atts, $content = null)
    {
        \extract(\shortcode_atts([
            'label'            => '',
            'postfix'          => '',
            'postfix_singular' => '',
        ], $atts));

        $rtReadingOptions = \get_option('rt_reading_time_options');

        $rtPost = \get_the_ID();

        $this->rtCalculateReadingTime($rtPost, $rtReadingOptions);

        if ($this->readingTime > 1) {
            $calculatedPostfix = $postfix;
        } else {
            $calculatedPostfix = $postfix_singular;
        }

        return "
		<span class='span-reading-time'>$label $this->readingTime $calculatedPostfix</span>
		";
    }


    /**
     * @param $content
     *
     * @return string
     */
    public function rtAddReadingTimeBeforeContent($content)
    {
        $rtReadingOptions = \get_option('rt_reading_time_options');

        $originalContent = $content;
        $rtPost          = \get_the_ID();

        $this->rtCalculateReadingTime($rtPost, $rtReadingOptions);

        $label            = $rtReadingOptions['label'];
        $postfix          = $rtReadingOptions['postfix'];
        $postfix_singular = $rtReadingOptions['postfix_singular'];

        if (\in_array('get_the_excerpt', $GLOBALS['wp_current_filter'])) {
            return $content;
        }

        if ($this->readingTime > 1) {
            $calculatedPostfix = $postfix;
        } else {
            $calculatedPostfix = $postfix_singular;
        }

        $content = '<span class="rt-reading-time" style="display: block;">' .
                   '<span class="rt-label">' . $label . '</span>' . '<span class="rt-time">' .
                   $this->readingTime . '</span>' . '<span class="rt-label"> ' . $calculatedPostfix .
                   '</span>' . '</span>';

        return $content;
    }

    /**
     * @param $content
     *
     * @return string
     */
    public function rtAddTeadingTimeBeforeExcerpt($content)
    {
        $rtReadingOptions = \get_option('rt_reading_time_options');

        $originalContent = $content;
        $rtPost          = \get_the_ID();

        $this->rtCalculateReadingTime($rtPost, $rtReadingOptions);

        $label            = $rtReadingOptions['label'];
        $postfix          = $rtReadingOptions['postfix'];
        $postfix_singular = $rtReadingOptions['postfix_singular'];

        if ($this->readingTime > 1) {
            $calculatedPostfix = $postfix;
        } else {
            $calculatedPostfix = $postfix_singular;
        }

        $content = '<span class="rt-reading-time" style="display: block;">' .
                   '<span class="rt-label">' . $label . '</span>' . '<span class="rt-time">' .
                   $this->readingTime . '</span>' . '<span class="rt-label"> ' . $calculatedPostfix .
                   '</span>' . '</span>';

        return $content;
    }
}