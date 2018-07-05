<?php

namespace core;

 class View
{
    public $route;
    public $path;       // A path to the current view
    public $layout = 'default';    // A template for the view

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);                         // extracts the $vars parameter with the data for view
        $path = 'views/'.$this->path.'.php';
        if(file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'views/layouts/'.$this->layout.'.php';
        } else {
            echo "The view does not found!" . $this->path;
        }
    }

    public static function errorCode($code)
    {
        http_response_code($code);
        $path = 'views/errors/'.$code.'.php';
        if(file_exists($path)){
            require $path;
        }
        exit;
    }

    public function redirect($url)
    {
        header('location: '.$url);
        exit;
    }

    public function message($status, $message)
    {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public function location($url)
    {
        exit(json_encode(['url' => $url]));
    }
}