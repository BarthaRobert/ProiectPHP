<?php
namespace Framework;
class Router
{
    public function match($url, $routes)
    {
        if (isset($routes[$url])) {
            $this->initialize($url, $routes);
            return true;//static route found
        } else {
            if (preg_match('/\d+/', $url, $id)) {
                $array = explode("/", $url);
                $array[2] = "{" . "id" . "}";
                $url = implode("/", $array);
                if (isset($routes[$url])) {
                    $this->initialize($url, $routes);
                    return true;//dynamic route found
                }
            } else {
                echo "Route doesn't exist";
                return false;
            }
        }
    }

    public function initialize($url, $routes)
    {
        $controller = $routes[$url]["controller"];
        require_once "../app/Controllers/" . $controller . ".php";
        $controllerObject = new $controller;
        $action = $routes[$url]["action"];
        $controllerObject->{$action}();
    }
}