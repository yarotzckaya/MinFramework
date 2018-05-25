<?php

namespace controllers;

use core\Controller;

class AccountController extends Controller
{
	public function loginAction()
	{
		echo "I'm login functon";
	}

	public function registerAction()
	{
		echo "I'm register";
		var_dump($this->route);
	}
}