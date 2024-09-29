<?php 
require_once 'services/UserService.php';
require_once 'controllers/BaseController.php';
// UserController.php
class AuthController extends BaseController {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $confirmPassword = $_POST['confirmPassword'];

            $user = new User(
                null,
                $_POST['email'],
                $_POST['password'],
            );

            if ($user->verifyPassword($confirmPassword)){
                if($this->userService->register($user)){
                    session_start();
                    // $_SESSION['user_email'] = $user->email; 
                    setcookie('email', $user->email, time() + 3600); // Store user ID in session
                    $this->redirect('student'); // if login is successful redirect to dashboard
                }
            }
            else{
                // Passwords do not match
                echo "Passwords do not match";
            }
        }
        $this->auth_render('authentication/register', [], 'Register');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user_data = $this->userService->login($_POST['email'],$_POST['password']);

            if (!empty($user_data)) {
                // Set session or JWT token for authenticated user
                session_start();
                // $_SESSION['user_email'] = $user_data["email"]; 
                setcookie('email', $user_data["email"], time() + 3600); // Store user ID in session
                $this->redirect("student");
            } else {
                // Handle login error (invalid credentials)
                echo "Wrong username or password";
            }
        }

        $this->auth_render('authentication/login', [], 'Login'); //9140008901936
    }

    // public function fetchProfile($user_id) {
    //     $user = $this->userService->fetchUserProfile($user_id);
    //     $this->render('users/profile', ['user' => $user], 'Profile');
    // }

    // public function updateProfile() {
    //     if ($_POST) {
    //         $user_id = $_POST['user_id'];
    //         $first_name = $_POST['first_name'];
    //         $last_name = $_POST['last_name'];
    //         $email = $_POST['email'];

    //         if ($this->userService->updateUserProfile($user_id, $first_name, $last_name, $email)) {
    //             // Redirect to the updated profile or show success message
    //             header("Location: /users/profile?id={$user_id}");
    //         } else {
    //             // Handle update error
    //         }
    //     }
    // }
}

?>