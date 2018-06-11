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
        if(file_exists('views/'.$this->path.'.php')) {
            ob_start();
            require 'views/'.$this->path.'.php';
            $content = ob_get_clean();
            require 'views/layouts/'.$this->layout.'.php';
        } else {
            echo "The view does not found!" . $this->path;
        }


    }

}