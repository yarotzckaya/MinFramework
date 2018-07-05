<?php
/**
 * Created by PhpStorm.
 * User: yarot
 * Date: 04.07.2018
 * Time: 15:34
 */

namespace models;

use core\Model;

class Main extends Model
{

    public function getNews()
    {
        debug($this->db);
    }
}