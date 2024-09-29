
<?php 
// UserRepository.php
require_once 'GenericRepository.php';
require_once 'models/User.php';

class UserRepository extends GenericRepository {
    public function __construct() {
        parent::__construct('users', 'id', User::class);
    }

    // Return acutal values instead of object
    // because object will hash the password
    public function findByEmail($email) {
        $query = "SELECT * FROM {$this->table} WHERE email = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        
        $data = $stmt->get_result()->fetch_assoc();
        return $data;
        // return $data ? $this->createObject($data) : null;
    }
}
?>