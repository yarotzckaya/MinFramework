<?php

namespace controllers;

use core\Controller;

class MainController extends Controller
{
	public function indexAction()
	{
	    $this->view->render('UKFD');
		//echo "Вход";
	}

	public function contactAction()
	{
		echo "Contacts";
	}
}