<?php

namespace ti2018b\phpmvc\middlewares;

use ti2018b\phpmvc\Application;
use ti2018b\phpmvc\exception\ForbiddenException;

/**
 * Class Form
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package ti2018b\phpmvc\middlewares
 */
class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    /**
     * Authmiddleware constructor
     * 
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}
