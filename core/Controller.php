<?php

namespace core;

use core\View;
abstract class Controller
{

	public $route;
	public $view;
	public $acl;

	public function __construct($route)
	{
		$this->route = $route;
		if(!$this->checkACL()) {
		    View::errorCode(403);
         }

		$this->view = new View($route);

		$this->model = $this->loadModel($route['controller']);

	}


    /**
     * @param $name
     * @return mixed
     */
    public function loadModel($name)
    {
        $path = 'models\\'.ucfirst($name);
        if(class_exists($path)) {
            return new $path();
        }
    }


    /**
     * @return bool
     *
     * Checks the type of user
     */
    public function checkACL()
    {
        $this->acl = require 'acl/'.$this->route['controller'].'.php';
        if($this->isACL('all')) {
            return true;
        } elseif (isset($_SESSION['authorize']['id']) and $this->isACL('authorize')) {
            return true;
        } elseif (!isset($_SESSION['authorize']['id']) and $this->isACL('guest')) {
            return true;
        } elseif (isset($_SESSION['admin']) and $this->isACL('admin')) {
            return true;
        }

        return false;
    }


    /**
     * @param $key
     * @return bool
     */
    public function isACL($key)
    {
        return in_array($this->route['action'], $this->acl[$key]);
    }

}