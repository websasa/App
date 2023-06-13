<?php
//zadatak treci singelton i pdo

$databaseConfig = require './home/reaper/configuration.php';


class DatabaseConnect {
    private static $instance;
    private $connection;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function connect($host, $database, $username, $password) {
        $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

        try {
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Greška prilikom spajanja na bazu podataka: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}