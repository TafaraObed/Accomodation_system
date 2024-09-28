<?php
// app/controllers/BaseController.php

abstract class BaseController {
    protected function render($view, $data = [], $title = 'AMS') {
        extract($data);  // Extract variables from the data array
        $content = 'views/' . $view . '.php';  // Define the path to the view file
        include('views/layouts/layout.php');  // Include the layout file
    }

    // Todo: make sure to add a message to display on redirect
    protected function redirect($route, $id=null){ // Define the path to the view file
        if($id){
            header("Location: index.php?route=$route&id=$id");
        }
        header("Location: index.php?route=" . $route);
        exit;
    }
}
?>
