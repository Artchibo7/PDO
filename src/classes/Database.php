<?php

final class Database {
    private $DB;
    private $config;

    public function __construct() {
        $this->config = require_once __DIR__ . '/../../config.php';
        // require_once $this->config;

        $this->connexionDB();
    }

    private function connexionDB() : void {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            $this->DB = new PDO ($dsn, DB_USER, DB_PWD);
            echo " Tout s'est bien passé";
        }catch(PDOException $error){
            echo " Pssst un truc qui cloche : " . $error->getMessage();
        }
    }

    public function getDB() {
        return $this->DB;
    }
}
