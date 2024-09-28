<?php
// GenericRepository.php

require_once 'config/db_config.php';
require_once 'BaseRepository.php';

abstract class GenericRepository implements BaseRepository {
    protected $db;
    protected $connection;
    protected $table;
    protected $idField;
    protected $modelClass;

    public function __construct($table, $idField, $modelClass) {
        // Initialize the database connection from db_config.php
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
        $this->table = $table;
        $this->idField = $idField;
        $this->modelClass = $modelClass;
    }

    // Factory method to create model objects based on the fetched data
    protected function createObject($data) {
        // Create an instance of the model dynamically using reflection
        $reflection = new ReflectionClass($this->modelClass);
        return $reflection->newInstanceArgs(array_values($data)); // Pass the values to the constructor
    }

    // Fetch all records from the table and return them as model objects
    public function fetchAll() {
        $query = "SELECT * FROM {$this->table}";
        $result = $this->connection->query($query);

        if (!$result) {
            throw new Exception("Database query error: " . $this->connection->error);
        } 
        
        $models = [];
        while ($data = $result->fetch_assoc()) {
            $models[] = $this->createObject($data); // Convert to model object
        }

        return $models; // Return array of model objects
    }

    // Fetch a record by its ID and return it as a model object
    public function fetchById($id) {
        $query = "SELECT * FROM {$this->table} WHERE {$this->idField} = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);  // Assuming the ID is an integer
        $stmt->execute();
        
        $data = $stmt->get_result()->fetch_assoc();
        return $data ? $this->createObject($data) : null; // Return null if no data found
    }

    // Insert a new record (save)
    public function save($model) {
        $data = $model->toArray();
        $fields = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), '?'));
        $query = "INSERT INTO {$this->table} ({$fields}) VALUES ({$placeholders})";
    
        $stmt = $this->connection->prepare($query);
        $types = str_repeat('s', count($data));  // Adjust types as needed
    
        // Create an array of values to be passed by reference
        $values = array_values($data);
    
        // Bind the parameters using call_user_func_array
        $params = array_merge([$types], $values);
        $stmt->bind_param(...$params);
    
        return $stmt->execute();
    }

    // Update an existing record
    public function update($model, $id) {
        $data = $model->toArray();
        $sets = implode(", ", array_map(fn($key) => "$key = ?", array_keys($data)));
        $query = "UPDATE {$this->table} SET {$sets} WHERE {$this->idField} = ?";

        $stmt = $this->connection->prepare($query);
        $types = str_repeat('s', count($data)) . 'i';  // Adjust types as needed
        $params = array_merge(array_values($data), [$id]);
        $stmt->bind_param($types, ...$params);
        return $stmt->execute();
    }

    // Delete a record by ID
    public function delete($id) {
        $query = "DELETE FROM {$this->table} WHERE {$this->idField} = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);  // Assuming the ID is an integer
        return $stmt->execute();
    }
}
?>
