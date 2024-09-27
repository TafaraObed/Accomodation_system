<?php
// db_config.php

class Database {
    private $host = 'localhost';       // Your database host
    private $username = 'root';        // Your database username
    private $password = '';            // Your database password
    private $database = 'accdb'; // Your database name
    private $connection;
    
    public function __construct() {
        $this->openConnection();
    }

    public function openConnection() {
        $this->connection = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->connection->connect_error) {
            die('Database connection failed: ' . $this->connection->connect_error);
        }

        // Optional: Set the charset to UTF-8
        $this->connection->set_charset('utf8');
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        if ($this->connection) {
            $this->connection->close();
            $this->connection = null;
        }
    }
}
?>
