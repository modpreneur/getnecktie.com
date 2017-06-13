<?php
declare(strict_types=1);

namespace Necktie\Blog;

use Latte\MacroNode;
use Latte\PhpWriter;

/**
 * Class Renderer
 */
class Renderer
{
    /** @var \Latte\Engine */
    private $latte;

    /** @var array  */
    private $params;


    /**
     * Renderer constructor.
     */
    public function __construct()
    {
        $latte = new \Latte\Engine;

        $latte->setTempDirectory(__DIR__ . '/../temp');
        $this->latte = $latte;

        $this->params = [
            'basePath' => esc_url( get_template_directory_uri()),
            'flashes'  => [],
            'homeUrl'  => \esc_url(\home_url('/')),
            'is_user_logged_in'  => \is_user_logged_in(),
        ];

        UIMacros::install($latte->getCompiler());
    }


    /**
     * @param $name
     * @param $value
     */
    public function addParam(string $name, $value)
    {
        $this->params[$name] = $value;
    }


    /**
     * @param string $template
     * @param array $params
     */
    public function render(string $template, array $params = [])
    {
        $this->latte->render(__DIR__. '/../latte/' . $template . '.latte', \array_merge($this->params, $params));
    }


    /**
     * @param string $template
     * @param array $params
     *
     * @return string
     */
    public function renderToString(string $template, array $params = []): string
    {
        return $this->latte->renderToString(__DIR__. '/../latte/' . $template . '.latte', \array_merge($this->params, $params));
    }
}
