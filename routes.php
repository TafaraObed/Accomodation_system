<?php 
// Define routes
$routes = [
    // shoud be named exactly like the controller name
    'student' => [
        'listStudents' => 'StudentController@index',
        'showStudent' => 'StudentController@find',
        'createStudent' => 'StudentController@create',
        'deleteStudent' => 'StudentController@delete',
        'updateStudent' => 'StudentController@update',
    ],
    
    // Add more routes here
];

// Get route from URL
$route = $_GET['route'] ?? null;

// Split route into controller and method
$routeParts = explode('/', $route);
$controllerName = ucfirst($routeParts[0]) . 'Controller';
$methodName = 'listStudents';

// Check if route has a specific method
if (count($routeParts) > 1) {
    $methodName = $routeParts[1];
}

// Check if route exists
if (isset($routes[$routeParts[0]][$methodName])) {
    // Require controller file
    require_once "controllers/$controllerName.php";

    // Instantiate controller and call method
    $controller = new $controllerName();
    $params = [];
    if (isset($_GET['id'])) {
        $params[] = $_GET['id'];
    }
    call_user_func_array([$controller, $methodName], $params);
} else {
    // 404 Not Found
    echo 'Route not found:' . $methodName;
}
?>
