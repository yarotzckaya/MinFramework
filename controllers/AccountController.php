<?php

namespace controllers;

use core\Controller;

class AccountController extends Controller
{

//    public function before()
//    {
//        $this->view->layout = 'custom';              // if we want to use not a default layout - we need to specify it.
//    }

    /**
     * Redirects the user after login
     */
    public function loginAction()
	{
	   // $this->view->redirect('/min');    // if we need to make a redirect from a route - do it in this way

        if(!empty($_POST)) {
           $this->view->redirect('/min');
        }
		$this->view->render('Main page');
	}

    /**
     * Redirects the user after registration
     */
    public function registerAction()
	{
	   // $this->view->path = 'account/register';   // in this line we load the 'register' view and use the default layout
		$this->view->render('Register');
	}
}