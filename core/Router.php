<?php
/**
The main class which handle the URL-requests, explodes them and find 
a controller and action from the URL.
*/

namespace core;

class Router
{
	protected $routes = [];
	protected $params = [];

	public function __construct(){
		$arr = require 'config/routes.php';
		foreach ($arr as $key => $val) {
			$this->add($key, $val);
		}
		
	}

	/**
	* Add a new route 
	**/
	public function add($route, $params)
	{
		$route = '#^'.$route.'$#';
		$this->routes[$route] = $params;
	}

	/**
	* Check if the uri is a route
	*/
	public function match()
	{
		$url = trim($_SERVER['REQUEST_URI'], '/');
		foreach ($this->routes as $route => $params) {
			if(preg_match($route, $url, $matches)){
				$this->params = $params;
				return true;
			}
		}
		return false;
	}

	/**
	* Run the exploding of the request
	*/
	public function run()
	{
		if($this->match()){
			$path = 'controllers\\'.ucfirst($this->params['controller']).'Controller';
				if(class_exists($path)){
					$action = $this->params['action'].'Action';
					if(method_exists($path, $action)){
						$controller = new $path;
						$controller->$action();		// When I've tryied to write like $controller->action(); it didn't work. WHY???
					} else {
						echo "This action not found" . $action;
					}
				} else {
					echo "This controller not found!" . $path;
				}
			} else {
			echo "Маршрут не найден";
		}
	}

	

}