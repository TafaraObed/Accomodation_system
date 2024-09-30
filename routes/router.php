<?php
// Router.php
class Router {
    protected $routes = [];

    public function addRoute($path, $controllerAction) {
        $this->routes[$path] = $controllerAction;
    }

    public function route($path) {
        if (array_key_exists($path, $this->routes)) {
            $this->callAction($this->routes[$path]);
        } else {
            $this->handleNotFound();
        }
    }

    protected function callAction($controllerAction) {
        list($controllerName, $methodName) = explode('@', $controllerAction);
        // Use the controller name directly
        $controllerClass = $controllerName; 

        // Ensure the controller file is included
        $controllerFile = "controllers/{$controllerClass}.php"; 
        if (!file_exists($controllerFile)) {
            throw new Exception("Controller file $controllerFile not found.");
        }

        require_once $controllerFile;

        if (!class_exists($controllerClass)) {
            throw new Exception("Controller class $controllerClass not found.");
        }

        $controller = new $controllerClass();

        // Handle parameters if any
        $params = isset($_GET['id']) ? [$_GET['id']] : []; 
        call_user_func_array([$controller, $methodName], $params);
    }

    protected function handleNotFound() {
        include('views/error/not-found.php');
        die(); // 404 Not Found
    }
}
?>
