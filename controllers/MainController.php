<?php

namespace controllers;

use core\Controller;
use lib\Db;

class MainController extends Controller
{
	public function indexAction()
	{
	   $db = new DB;

	   $form = 1;

	   $data = $db->column('SELECT login FROM users WHERE id = '.$form);
	   debug($data);
	    $this->view->render('Min framework', $db);

	}

	public function contactAction()
	{
		echo "Contacts";
	}
}