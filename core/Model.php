<?php
/**
 * Created by PhpStorm.
 * User: yarot
 * Date: 04.07.2018
 * Time: 15:44
 */

namespace core;

use lib\Db;

abstract class Model
{
    public $db;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = new Db;
       // debug($this->db);
    }
}