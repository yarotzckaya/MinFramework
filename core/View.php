<?php

namespace core;

 class View
{
    public $route;
    public $path;                   // path to the current view
    public $layout = 'default';    // template for the view

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

     /**
      * @param $title
      * @param array $vars
      *
      * Renders view
      */
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


     /**
      * @param $code
      */
     public static function errorCode($code)
    {
        http_response_code($code);
        $path = 'views/errors/'.$code.'.php';
        if(file_exists($path)){
            require $path;
        }
        exit;
    }


     /**
      * @param $url
      */
     public function redirect($url)
    {
        header('location: '.$url);
        exit;
    }


     /**
      * @param $status
      * @param $message
      */
     public function message($status, $message)
    {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }


     /**
      * @param $url
      */
     public function location($url)
    {
        exit(json_encode(['url' => $url]));
    }
}