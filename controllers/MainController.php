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

	    $this->view->render('MAIN PAGE', $vars);

	}

	public function contactAction()
	{
		echo "Contacts";
	}
}