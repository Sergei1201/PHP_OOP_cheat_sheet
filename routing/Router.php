<?php

declare(strict_types=1);

class Router
{
    /* Private properties */

    // Declaration of an empty array of routes
    private array $routes = [];
    /* Register route */
    public function register(string $route, callable $action): self
    {
        $this->routes[$route] = $action;
        return $this;
    }

    /* Get registered routes */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /* Resolve the routes */
    public function resolve(string $requestURI)
    {
        $route = explode('?', $requestURI)[0];
        $action = $this->routes[$route] ?? null;
        if (!$action) {
            throw new RouteNotFoundException();
        }
        call_user_func($action);
    }

}