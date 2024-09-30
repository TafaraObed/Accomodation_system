<?php
session_start(); // Start the session for message handling

abstract class BaseController {
    // Render method with optional message
    protected function render($view, $data = [], $title = 'AMS', $message = null) {
        if ($message) {
            $_SESSION['message'] = $message; // Store the message in the session
        }
        extract($data);  // Extract variables from the data array
        $content = 'views/' . $view . '.php';  // Define the path to the view file
        include('views/layouts/layout.php');  // Include the layout file
        unset($_SESSION['message']); // Clear the message after rendering
    }

    // Improved redirect method with optional message
    protected function redirect($route, $id = null, $message = null) {
        if ($message) {
            $_SESSION['message'] = $message;  // Store the message in the session
        }

        $location = "index.php?route=$route";
        if ($id) {
            $location .= "&id=$id";
        }

        header("Location: $location");
        exit;
    }

    // Auth-specific render method (for login pages, etc.)
    protected function auth_render($view, $data = [], $title = 'AMS', $message = null) {
        if ($message) {
            $_SESSION['message'] = $message;
        }
        
        // Handle errors
        $error = $data['error'] ?? null;
        if ($error) {
            $_SESSION['error'] = $error; // Store the error message in the session
        }
        
        extract($data);
        $content = 'views/' . $view . '.php';
        include('views/layouts/auth-layout.php');
        
        // Clear messages after rendering
        unset($_SESSION['message']);
        unset($_SESSION['error']);
    }
    

    
}
?>
