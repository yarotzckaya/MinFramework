<?php

namespace controllers;

use core\Controller;

class AccountController extends Controller
{
	public function loginAction()
	{
		$this->view->render('Main page');
	}

	public function registerAction()
	{
		echo "I'm register";
		var_dump($this->route);
	}
}