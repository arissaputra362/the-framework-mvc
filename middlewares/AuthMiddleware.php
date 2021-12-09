<?php

namespace app\app\middlewares;

use app\app\Application;
use app\app\exception\ForbiddenException;

/**
 * Class Form
 * 
 * @author Aris Saputra <arissaputra362@gmail.com>
 * @package app\app\middlewares
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
