<?php

namespace controllers;

use core\Controller;

class MainController extends Controller
{
	public function indexAction()
	{
	    $this->view->render('Min framework');
		//echo "Вход";
	}

	public function contactAction()
	{
		echo "Contacts";
	}
}