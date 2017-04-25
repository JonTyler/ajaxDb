<?php
/**
 * Created by PhpStorm.
 * User: Jon
 * Date: 2017-04-25
 * Time: 1:22 PM
 */

namespace Database;


class DatabaseManager
{
    /*
     * variables for this db connection. Currently locked.
    */
    private $server = 'localhost';
    private $username = 'worker';
    private $password = 'vorbulous';
    private $database = 'prog3200';
    private $conn;
    /**
     * DatabaseManager constructor.
     */
    public function __construct()
    {
        $this->conn = new \PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @return \PDO
     */
    public function getConn(): \PDO
    {
        return $this->conn;
    }

    /**
     * @param \PDO $conn
     */
    public function nullConn()
    {
        $this->conn = null;
    }

}