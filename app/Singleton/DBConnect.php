<?php

namespace App\Singleton;

use PDO;

class DBConnect
{

    private static $instance = null;
    private $conn = null;

    const USER = "root";
    const PASSWORD = "";
    const SERVER = "localhost";
    const DBNAME = "irblog";

    private function __construct()
    {

        $this->conn = $this->createInstance();
    }

    public static function singleton()
    {
        if (self::$instance == null) {

            return new DBConnect;
        }

        return self::$instance;
    }

    private function createInstance()
    {

        $dsn = "mysql:host=%s;dbname=%d";

        $dsn = str_replace("%s", self::SERVER, $dsn);
        $dsn = str_replace("%d", self::DBNAME, $dsn);

        return new PDO($dsn, self::USER, self::PASSWORD);
    }

    public function getConnection()
    {

        return $this->conn;
    }
}
