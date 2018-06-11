<?php

namespace controllers;

use core\Controller;

class AccountController extends Controller
{

    public function before()
    {
        $this->view->layout = 'custom';              // if we want to use not a default layout - we need to specify it.
    }

	public function loginAction()
	{
		$this->view->render('Main page');
	}

	public function registerAction()
	{
	   // $this->view->path = 'account/register';   // in this line we load the 'register' view and use the default layout
		$this->view->render('Register');
	}
}