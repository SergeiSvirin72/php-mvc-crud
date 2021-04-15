<?php

namespace App\Core;

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = require ROOT.'/config/routes.php';
    }

    private function getURI()
    {
        return empty($_SERVER['REQUEST_URI'])
            ? false
            : trim($_SERVER['REQUEST_URI'], '/');
    }

    public function run() {
        $uri = $this->getURI();
        foreach ($this->routes as $pattern => $route) {
            if (preg_match("~$pattern~", $uri, $matches)) {
                array_shift($matches);

                $controller_name = "App\\Controllers\\".$route[0];

                call_user_func_array([new $controller_name, $route[1]], $matches);
                break;
            }
        }
    }
}