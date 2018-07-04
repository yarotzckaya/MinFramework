<?php

namespace lib;

use PDO;

class Db 
{

    protected $db;

	public function __construct() {
	    $config = require 'config/db.php';
        $this->db = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'].";charset=utf8","root","");
	}

    /**
     * @param $sql
     * Protects from SQL-injections.
     */
    public function query($sql)
    {
        $query = $this->db->query($sql);
        return $query;
    }

    public function row($sql)
    {
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql)
    {
        $result = $this->query($sql);
        return $result->fetchColumn();
    }
}