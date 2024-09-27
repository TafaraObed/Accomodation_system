<?php
// Model.php

abstract class Model {
    public function toArray() {
        return get_object_vars($this);  // Converts the model's properties to an associative array
    }
}
?>
