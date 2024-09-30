<?php 
// routes.php
require_once 'router.php';
$router = new Router();

// Define routes with the correct controller name
$router->addRoute('student/listStudents', 'StudentController@listStudents');
$router->addRoute('student/showStudent', 'StudentController@showStudent');
$router->addRoute('student/createStudent', 'StudentController@createStudent');
$router->addRoute('student/deleteStudent', 'StudentController@deleteStudent');
$router->addRoute('student/updateStudent', 'StudentController@updateStudent');

$router->addRoute('auth/register', 'AuthController@register');
$router->addRoute('auth/login', 'AuthController@login');
$router->addRoute('auth/logout', 'AuthController@logout');

$router->addRoute('', 'AuthController@login'); // Home route
?>
