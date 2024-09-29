<?php 
require_once 'models/User.php';
require_once 'repository/UserRepository.php';
// UserService.php
class UserService {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function register($user) {
        return $this->userRepository->save($user);
    }

    public function login($email, $password) {
        $user_data = $this->userRepository->findByEmail($email);

        if(!empty($user_data) && password_verify($password, $user_data['password'])){
            return $user_data;
        }

        return null; // Invalid credentials
    }

    // public function fetchUserProfile($user_id) {
    //     return $this->userRepository->fetchById($user_id);
    // }

    // public function updateUserProfile($user_id, $first_name, $last_name, $email) {
    //     $user = new User($first_name, $last_name, $email, null, $user_id);
    //     return $this->userRepository->update($user, $user_id);
    // }
}


?>