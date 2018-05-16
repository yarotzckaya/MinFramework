<?php

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
	* Add a route 
	**/
	public function add($route, $params)
	{
		echo $route;
	}

	public function match()
	{
//
	}

	public function run()
	{
		echo "start";
	}

	

}