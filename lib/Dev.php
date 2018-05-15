<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

function debug($str){
	var_dump($str);
	exit();
}