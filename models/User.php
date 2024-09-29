<?php 
require_once 'Model.php';
// User.php
// User.php
class User extends Model {
    public $id;
    public $email;
    public $password;  // Store hashed password

    public function __construct($id, $email, $password) {
        $this->id = $id;
        $this->email = $email;
        $this->setPassword($password); // Hash the password// Hash the password
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function verifyPassword($password) {
        return password_verify($password, $this->password);
    }

    // public function toArray() {
    //     return [
    //         'first_name' => $this->first_name,
    //         'last_name' => $this->last_name,
    //         'email' => $this->email,
    //         // Do not include password in array
    //     ];
    // }
}

?>