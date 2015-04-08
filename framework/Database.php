<?php
class Database {
    private $con;

    function __construct(){
        $this->con = null;
    }

    function initCon() {
        $dbConfig = require(ROOT . DS . "config" . DS . "dataSource.php");
    }
}