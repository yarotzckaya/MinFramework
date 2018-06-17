<?php

namespace controllers;

use core\Controller;
use lib\Db;

class MainController extends Controller
{
	public function indexAction()
	{
	   $db = new DB;
	   $data = $db->row('SELECT logingit FROM users');
	   debug($data);
	    $this->view->render('Min framework', $db);

	}

	public function contactAction()
	{
		echo "Contacts";
	}
}