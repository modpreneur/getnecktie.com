<?php
declare(strict_types=1);

namespace Necktie\Blog;

use Latte\MacroNode;
use Latte\PhpWriter;

/**
 * Class UIMacros
 * @package Necktie\Blog
 */
class UIMacros extends \Latte\Macros\MacroSet
{
    /** @var bool */
    private $extends;


    /**
     * @param \Latte\Compiler $compiler
     */
    public static function install(\Latte\Compiler $compiler)
    {
        $me = new static($compiler);

        $me->addMacro('control', [$me, 'macroControl']);
        $me->addMacro('href', null, null, function (MacroNode $node, PhpWriter $writer) use ($me) {
            return ' ?> href="<?php ' . $me->macroLink($node, $writer) . ' ?>"<?php ';
        });

        $me->addMacro('link', [$me, 'macroLink']);
    }


    /**
     * Initializes before template parsing.
     */
    public function initialize()
    {
        $this->extends = false;
    }


    /**
     * @param MacroNode $node
     * @param PhpWriter $writer
     *
     * @return string
     */
    public function macroLink(MacroNode $node, PhpWriter $writer)
    {
        $node->modifiers = preg_replace('#\|safeurl\s*(?=\||\z)#i', '', $node->modifiers);

        return $writer
            ->using($node)
            ->write('echo %escape(the_permalink(%node.args))');
    }
}
