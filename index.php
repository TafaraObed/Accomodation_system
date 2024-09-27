<?php 

  function render($view, $data = [], $title = 'My App') {
    extract($data);  // Extract variables from the data array
    $content = 'views/' . $view . '.php';  // Define the path to the view file
    include('views/layouts/layout.php');  // Include the layout file
  }
  render("students/index",[],"Accomodation Management System");
  die();
?>