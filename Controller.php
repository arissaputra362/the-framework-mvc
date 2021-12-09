<?php

namespace ti2018b\phpmvc;

use ti2018b\phpmvc\middlewares\BaseMiddleware;

/**
 * Class Controller
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package ti2018b\phpmvc
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \ti2018b\phpmvc\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * Get the value of middlewares
     *
     * @return  \ti2018b\phpmvc\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    /**
     * Set the value of middlewares
     *
     * @param  \ti2018b\phpmvc\middlewares\BaseMiddleware[]  $middlewares
     *
     * @return  self
     */
    public function setMiddlewares(BaseMiddleware $middlewares)
    {
        $this->middlewares = $middlewares;

        return $this;
    }
}
