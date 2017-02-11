<?php namespace Acme\Repositories;

use PDO;

class DbConnection
{
    protected static $instance = null;
    protected $connection;

    private function __construct()
    {
        $this->connection = new PDO('pgsql:dbname=psat;host=localhost', 'psat', 'psat');
    }

    public static function getInstance()
    {
        if(self::$instance == null) {
            self::$instance = new DbConnection();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }

}