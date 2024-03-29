<?php

namespace application\lib;

use PDO;

class Db{

    protected $db;

    public function __construct(){
        $config = require 'application/config/Db.php';
        $db_info = 'mysql:host='.$config['host'].';dbname='.$config['name'];
       
        $this->db = new PDO($db_info, $config['user'], $config['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public function query($sql, $params = []){
        $stmt = $this->db->prepare($sql);
        if(!empty($params)){
            foreach($params as $key => $val){
                $stmt->bindValue(":".$key, $val);
            }
        }

        $stmt->execute();

        return $stmt;
    }

    public function row($sql, $params = []){
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = []){
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}