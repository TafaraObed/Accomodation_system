
<?php 
// UserRepository.php
require_once 'GenericRepository.php';
require_once 'models/User.php';

class UserRepository extends GenericRepository {
    public function __construct() {
        parent::__construct('users', 'user_id', User::class);
    }

    public function findByEmail($email) {
        $query = "SELECT * FROM {$this->table} WHERE email = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        
        $data = $stmt->get_result()->fetch_assoc();
        return $data ? $this->createObject($data) : null;
    }
}
?>