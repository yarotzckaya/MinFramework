<?php

namespace controllers;

use core\Controller;

class MainController extends Controller
{
	public function indexAction()
	{
	    $vars = [
	        'name' => 'Вася Пукин',
            'age' => 40,
            'array' => [1, 2, 3]
        ];

	    $this->view->render('Min framework', $vars);
		//echo "Вход";
	}

	public function contactAction()
	{
		echo "Contacts";
	}
}