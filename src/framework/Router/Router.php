<?php

namespace Framework\Router;

class Router
{
    private array $routes = [];

    public function get(string $path, $callback): self
    {
        $this->routes['GET'][$path] = $callback;
        return $this;
    }

    public function post(string $path, $callback): self
    {
        $this->routes['POST'][$path] = $callback;
        return $this;
    }

    public function dispatch(string $method, string $path)
    {
        // Remove query string
        $path = parse_url($path, PHP_URL_PATH);
        $path = rtrim($path, '/') ?: '/';

        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];
            
            if (is_callable($callback)) {
                return call_user_func($callback);
            }

            if (is_string($callback) && strpos($callback, '@') !== false) {
                [$controller, $method] = explode('@', $callback);
                $controllerClass = "App\\Http\\Controllers\\" . $controller;
                
                if (class_exists($controllerClass)) {
                    return (new $controllerClass)->$method();
                }
            }
        }

        return $this->notFound();
    }

    private function notFound()
    {
        http_response_code(404);
        return json_encode(['error' => 'Route not found']);
    }
}
