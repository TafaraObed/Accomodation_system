<?php 
require_once 'Model.php';
// User.php
// User.php
class User extends Model {
    public $user_id;
    public $first_name;
    public $last_name;
    public $email;
    private $password;  // Store hashed password

    public function __construct($first_name, $last_name, $email, $password, $user_id = null) {
        $this->user_id = $user_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->setPassword($password); // Hash the password
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function verifyPassword($password) {
        return password_verify($password, $this->password);
    }

    public function toArray() {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            // Do not include password in array
        ];
    }
}


?>