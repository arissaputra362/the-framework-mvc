<?php

namespace app\app;

use app\app\middlewares\BaseMiddleware;

/**
 * Class Controller
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package app\app
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \app\app\middlewares\BaseMiddleware[]
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
     * @return  \app\app\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    /**
     * Set the value of middlewares
     *
     * @param  \app\app\middlewares\BaseMiddleware[]  $middlewares
     *
     * @return  self
     */
    public function setMiddlewares(BaseMiddleware $middlewares)
    {
        $this->middlewares = $middlewares;

        return $this;
    }
}
