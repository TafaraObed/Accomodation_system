<?php
// StudentRepository.php

require_once 'GenericRepository.php';
require_once 'models/Student.php';

class StudentRepository extends GenericRepository {
    public function __construct() {
        parent::__construct('student', 'student_id', Student::class);  // Pass the model class
    }
}
?>
