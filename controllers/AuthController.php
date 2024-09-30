<?php
require_once 'services/UserService.php';
require_once 'controllers/BaseController.php';

class AuthController extends BaseController {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $confirmPassword = $_POST['confirmPassword'];
    
            // Validate inputs
            if (empty($_POST['email']) || empty($_POST['password']) || empty($confirmPassword)) {
                $this->auth_render('authentication/register', ['error' => 'All fields are required.'], 'Register');
                return;
            }
    
            if ($_POST['password'] !== $confirmPassword) {
                $this->auth_render('authentication/register', ['error' => 'Passwords do not match.'], 'Register');
                return;
            }
    
            $user = new User(null, $_POST['email'], $_POST['password']);
    
            // Register the user and redirect with a message
            if ($this->userService->register($user)) {
                session_start();
                $_SESSION['user_email'] = $user->email;
                $this->redirect('student/listStudents', null, 'Registration successful. Welcome!');
            } else {
                $this->auth_render('authentication/register', ['error' => 'Registration failed. Try again.'], 'Register');
            }
        }
    
        $this->auth_render('authentication/register', [], 'Register');
    }
    
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            // Validate inputs
            if (empty($email) || empty($password)) {
                $this->auth_render('authentication/login', ['error' => 'Email and Password are required.'], 'Login');
                return;
            }
    
            $user_data = $this->userService->login($email, $password);
    
            if (!empty($user_data)) {
                // Set session for authenticated user
                session_start();
                $_SESSION['user_email'] = $user_data['email'];
                $this->redirect('student/listStudents', null, 'Login successful. Welcome back!');
            } else {
                // Handle login error
                $this->auth_render('authentication/login', ['error' => 'Invalid credentials. Please try again.'], 'Login');
            }
        }
    
        $this->auth_render('authentication/login', [], 'Login');
    }

    public function logout() {
        session_start();
        session_destroy();
        $this->redirect('login', null, 'You have been logged out successfully.');
    }
}
