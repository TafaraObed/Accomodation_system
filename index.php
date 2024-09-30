<?php 
  // index.php
require_once 'routes/routes.php';

$route = $_GET['route'] ?? '';
$router->route($route);

?>