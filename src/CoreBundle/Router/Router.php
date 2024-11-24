<?php

namespace Src\CoreBundle\Router;

class Router{
    private static $routes = [];
    private static $publicRoutes = ['/'];

    public static function add($uri, $controller, $method, $pattern = null)
    {
        self::$routes[$uri] = [
            'controller' => $controller,
            'method' => $method,
            'pattern' => $pattern ?: '/^' . preg_quote($uri, '/') . '$/'
        ];
    }

    public static function dispatch($uri)
    {
        $uri = strtok($uri, '?');
        $uri = filter_var($uri, FILTER_SANITIZE_URL);
        $uri = preg_replace('/\.\.\/|\.\//', '', $uri);

        foreach (self::$routes as $route) {
            if (preg_match($route['pattern'], $uri, $matches)) {
                    $controller = new $route['controller'];
                    array_shift($matches);
                    call_user_func_array([$controller, $route['method']], $matches);
                return;
            }
        }

        self::handleError(404);
    }

    private static function handleError($code)
    {
        http_response_code($code);
        //require_once(__DIR__ . "/../../frontend/errors/error{$code}.php");
    }
}