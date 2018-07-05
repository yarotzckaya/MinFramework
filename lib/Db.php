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
    public function query($sql, $params = [])
    {
        $statement = $this->db->prepare($sql);
         if (!empty($params)) {
             foreach ($params as $key => $val) {
              $statement->bindValue(':'.$key, $val);
              }
         }

      $statement->execute();
        return $statement;
    }


    /**
     * @param $sql
     * @return mixed
     */
    public function row($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @param $sql
     * @param array $params
     * @return mixed
     */
    public function column($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}