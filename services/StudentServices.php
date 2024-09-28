<?php
require_once 'repository/StudentRepository.php';
require_once 'models/Student.php';

class StudentService {
    private $studentRepository;

    public function __construct() {
        $this->studentRepository = new StudentRepository();
    }

    // Fetch all students
    public function getAllStudents() {
        return $this->studentRepository->fetchAll();
    }

    // Fetch student by ID
    public function getStudentById($id) {
        return $this->studentRepository->fetchById($id);
    }

    // Add new student
    public function createStudent($studentModel) {
        return $this->studentRepository->save($studentModel);
    }

    // Update student
    public function updateStudent($studentModel, $id) {
        return $this->studentRepository->update($studentModel, $id);
    }

    // Delete student
    public function deleteStudent($id) {
        return $this->studentRepository->delete($id);
    }
}
?>
