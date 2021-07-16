<?php


namespace zadav\framework\middlewares;


use zadav\framework\Application;
use zadav\framework\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{

    public array $actions = [];

    public function __construct(array $actions)
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (
                empty($this->actions)
                || in_array(Application::$app->controller->action, $this->actions)
            ) {
                throw new ForbiddenException();
            }
        }
    }
}