<?php 
require_once 'services/UserService.php';
require_once 'controllers/BaseController.php';
// UserController.php
class UserController extends BaseController {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function register() {
        if ($_POST) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->userService->registerUser($first_name, $last_name, $email, $password)) {
                // Redirect to login or profile page
                header('Location: /users/login');
            } else {
                // Handle registration error
            }
        }
        $this->render('users/register', [], 'Register');
    }

    public function login() {
        if ($_POST) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->userService->loginUser($email, $password);
            if ($user) {
                // Set session or JWT token for authenticated user
                $_SESSION['user_id'] = $user->user_id; // Store user ID in session
                header('Location: /users/profile?id=' . $user->user_id);
            } else {
                // Handle login error (invalid credentials)
            }
        }
        $this->render('users/login', [], 'Login'); //9140008901936
    }

    public function fetchProfile($user_id) {
        $user = $this->userService->fetchUserProfile($user_id);
        $this->render('users/profile', ['user' => $user], 'Profile');
    }

    public function updateProfile() {
        if ($_POST) {
            $user_id = $_POST['user_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];

            if ($this->userService->updateUserProfile($user_id, $first_name, $last_name, $email)) {
                // Redirect to the updated profile or show success message
                header("Location: /users/profile?id={$user_id}");
            } else {
                // Handle update error
            }
        }
    }
}

?>