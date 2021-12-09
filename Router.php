<?php

namespace ti2018b\phpmvc;

use ti2018b\phpmvc\exception\ForbiddenException;
use ti2018b\phpmvc\exception\NotFoundException;

/**
 * Class Router
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package ti2018b\phpmvc
 */
class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    /**
     * Router constructor
     * 
     * @param \ti2018b\phpmvc\Request $request
     * @param \ti2018b\phpmvc\Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            throw new NotFoundException();
        }

        if (is_string($callback)) {
            return Application::$app->view->renderView($callback);
        }

        if (is_array($callback)) {
            /** @var \ti2018b\phpmvc\Controller $controller */
            $controller = new $callback[0]();
            Application::$app->controller = $controller;
            $controller->action = $callback[1];
            $callback[0] = $controller;

            foreach ($controller->getMiddlewares() as $middleware) {
                $middleware->execute();
            }
        }

        return call_user_func($callback, $this->request, $this->response);
    }
}
