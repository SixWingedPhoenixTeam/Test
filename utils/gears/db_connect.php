<?php

//Connection to database

//include_once (dirname(dirname(__FILE__))."/configs/db_config.php");

class Conn {

    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=".DB_DATA::get_host()."dbname=".DB_DATA::get_database(), DB_DATA::get_user(), DB_DATA::get_password());
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        
        if (!isset($this->conn)) {
            die("You're not connected to the database!");
        }
        return $this->conn;
    }

    public function disconnect() {
        $this->conn = null;
    }

}
