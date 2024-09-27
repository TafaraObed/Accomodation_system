<?php
// app/controllers/BaseController.php

abstract class BaseController {
    protected function render($view, $data = [], $title = 'My App') {
        extract($data);  // Extract variables from the data array
        $content = 'app/views/' . $view . '.php';  // Define the path to the view file
        include('app/views/layouts/layout.php');  // Include the layout file
    }
}
?>
