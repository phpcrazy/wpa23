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


    public $where_name;
    public $where_value;
    public $is_where;

    // select * from $table_name where $name = $value
    public $table_name;


    private static $_instance;

    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        }

        self::$_instance->table_name = $table_name;
        self::$_instance->is_where = false;
        self::$_instance->where_name = "";
        self::$_instance->where_value = "";

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

    public function where($name, $value) {

        $this->where_name = $name;
        $this->where_value = $value;
        $this->is_where = true;
        return $this;

    }

    public function get() {

        if($this->is_where == true) {

            echo "Yay! is Where";

            $sql  = 'SELECT * FROM ' . $this->table_name . " WHERE :" . $this->where_name
                . " = " . $this->where_name;

            $stmt = $this->prepare($sql);
            $stmt->bindParam(":" . $this->where_name, $this->where_value);
            $stmt->execute();
            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            return $stmt->fetchAll();
        } else {
            $sql = "SELECT * FROM " . $this->table_name;
            $stmt = $this->prepare($sql);

            $stmt->execute();
            // set the resulting array to associative
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            return $stmt->fetchAll();

        }



    }
}