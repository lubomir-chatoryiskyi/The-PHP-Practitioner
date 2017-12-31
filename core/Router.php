<?php

namespace App\Core;

class Router {

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public static function redirect($path) {
        header("Location: /{$path}");
    }

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $requestType
     * @return mixed
     * @throws Exception
     */
    public function direct($uri, $requestType) {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        } else {
            // throw new Exception('404!');
            return $this->callAction(
                ...explode('@', $this->routes[$requestType]['404'])
            );
        }
    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     * @throws Exception
     */
    protected function callAction($controller, $action)
    {
        $controllerToCall = "App\\Controllers\\{$controller}";

        $controllerToCall = new $controllerToCall;

        if (!method_exists($controllerToCall, $action)) {
            throw new Exception("{$controller} does not respond to the {$action} action");
        }
        return $controllerToCall->$action();
    }

}