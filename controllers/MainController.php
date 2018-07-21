<?php

namespace controllers;

use core\Controller;


class MainController extends Controller
{

    /**
     * Returns Main Page
     */
    public function indexAction()
	{
	    $result = $this->model->getNews();
	    $vars = [
	        'news' => $result,
        ];

	    $this->view->render('MAIN PAGE', $vars);

	}

}