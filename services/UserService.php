<?php 
require_once 'models/User.php';
require_once 'repository/UserRepository.php';
// UserService.php
class UserService {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function registerUser($first_name, $last_name, $email, $password) {
        // Hash the password
        $user = new User($first_name, $last_name, $email, $password);
        return $this->userRepository->save($user);
    }

    public function loginUser($email, $password) {
        $user = $this->userRepository->findByEmail($email);
        if ($user && $user->verifyPassword($password)) {
            return $user; // Return user object if login successful
        }
        return null; // Invalid credentials
    }

    public function fetchUserProfile($user_id) {
        return $this->userRepository->fetchById($user_id);
    }

    public function updateUserProfile($user_id, $first_name, $last_name, $email) {
        $user = new User($first_name, $last_name, $email, null, $user_id);
        return $this->userRepository->update($user, $user_id);
    }
}


?>