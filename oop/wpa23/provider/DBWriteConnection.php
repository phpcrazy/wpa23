<?php

/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 5/15/16
 * Time: 5:34 PM
 */
class DBWriteConnection extends PDO
{
    use DBSingleton;

    public $engine;
    public $host;
    public $user;
    public $database;
    public $pass;

    public function __construct()
    {
        var_dump("DB Write Init!");
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
        // TODO: Implement __destruct() method.
        var_dump("DB Write Destruct!");
    }

}