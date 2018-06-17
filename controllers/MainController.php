<?php

namespace controllers;

use core\Controller;
use lib\Db;

class MainController extends Controller
{
	public function indexAction()
	{
	   $db = new DB;
	   $db->query('SELECT * FROM users');
	    $this->view->render('Min framework', $db);

	}

	public function contactAction()
	{
		echo "Contacts";
	}
}