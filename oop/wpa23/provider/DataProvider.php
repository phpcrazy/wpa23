<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 5/8/16
 * Time: 6:17 PM
 */

/*
 * Provider Pattern
 * Singleton Pattern
 * Inheritance from Native Object Library
 * Method Chain - Static
 */

class DB extends PDO{

    public $engine;
    public $host;
    public $user;
    public $database;
    public $pass;

    public $select_query = "SELECT * FROM ";


    private static $_instance;

    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        }

        self::$_instance->select_query .= $table_name;

        return self::$_instance;
    }

    public function __construct()
    {
        echo "DB Instance Started!";
        $this->engine = Config::get("database.engine");
        $this->host = Config::get("database.hostname");
        $this->database = Config::get("database.dbname");
        $this->user = Config::get("database.username");
        $this->pass = Config::get("database.password");
        $dsn = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct($dsn, $this->user, $this->pass);
    }

    public function __destruct()
    {
        echo "DB Instance Destroy!";
    }

    public function get() {
        $stmt = $this->prepare($this->select_query);
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();

    }
}