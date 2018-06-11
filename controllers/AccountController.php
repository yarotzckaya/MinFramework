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
	    $this->view->path = 'account/register';
		$this->view->render('REG');
	}
}