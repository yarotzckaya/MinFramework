<?php

namespace controllers;

use core\Controller;


class MainController extends Controller
{
	public function indexAction()
	{
	    $result = $this->model->getNews();
	    $vars = [
	        'news' => $result,
        ];

//	   $db = new DB;
//
//	 //  $form = '2';   if somebody change this line on $form = '2; DELETE FROM users' - the SQL-injection will work. To avoid injection, use prepared requests - PDO::prepare
//
//        $params = [
//            'id' => 2,
//        ];
//
//	   $data = $db->column('SELECT login FROM users WHERE id = :id', $params);
//	   debug($data);
	    $this->view->render('MAIN PAGE', $vars);

	}

	public function contactAction()
	{
		echo "Contacts";
	}
}