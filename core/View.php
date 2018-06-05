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
        require 'views/layouts/'.$this->layout.'.php';
    }

}