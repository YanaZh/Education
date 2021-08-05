<?php

namespace App;

use App\Exception\NotFoundException;

class Router
{
    private $routes = [];

    public function dispatch()
    {
        foreach ($this->routes as $key => $value) {
            if ($_SERVER['REQUEST_URI'] === $key) {
                if ($value instanceof \Closure) {
                    return $value();
                }

                [$class, $method] = explode('@', $value);
                $controller = new $class;
                $funcName = $method;
                return $controller->$funcName();
            }
        }
        throw new NotFoundException("Маршрут " . $_SERVER['REQUEST_URI'] . " не установлен" . PHP_EOL, 404);
    }

    public function get($path, $callback)
    {
        $this->routes[$path] = $callback;
    }
}