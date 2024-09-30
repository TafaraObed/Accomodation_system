<?php
require_once 'services/StudentServices.php';
require_once 'controllers/BaseController.php'; 

class StudentController extends BaseController {
    private $studentService;

    public function __construct() {
        $this->studentService = new StudentService(); // Dependency injection can be used here in real apps
    }

    // List all students
    public function listStudents() {
        $students = $this->studentService->getAllStudents();
        $this->render('students/index', ['students' => $students], 'Student List');
    }

    // Show a student by ID
    public function showStudent($id) {
        $student = $this->studentService->getStudentById($id);

        // Handle invalid student ID
        if ($student === null) {
            $this->redirect('student/listStudents', null, 'Student not found.');
        }

        $this->render('students/show_student', ['student' => $student], 'Student Details');
    }

    // Handle student creation
    public function createStudent() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new Student(
                null,
                $_POST['firstName'],
                $_POST['lastName'],
                $_POST['regNumber'],
                $_POST['phoneNumber'],
                $_POST['emailAddress'],
            );
            
            // Attempt to create student
            if ($this->studentService->createStudent($student)) {
                $this->redirect('student/listStudents', null, 'Student created successfully.');
            } else {
                $this->render('students/add_student', [], 'Add Student', 'Failed to create student.');
            }
        } else {
            $this->render('students/add_student', [], 'Add Student');
        }
    }

    // Handle student update
    public function updateStudent($id) {
        $student = $this->studentService->getStudentById($id);

        // Handle missing student
        if ($student === null) {
            $this->redirect('student/listStudents', null, 'Student not found.');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student->firstName = $_POST['firstName'];
            $student->lastName = $_POST['lastName'];
            $student->regNumber = $_POST['regNumber'];
            $student->phoneNumber = $_POST['phoneNumber'];
            $student->emailAddress = $_POST['emailAddress'];

            // Attempt to update the student
            if ($this->studentService->updateStudent($student, $id)) {
                $this->redirect('student/listStudents', null, 'Student updated successfully.');
            } else {
                $this->render('students/edit_student', ['student' => $student], 'Edit Student', 'Failed to update student.');
            }
        } else {
            $this->render('students/edit_student', ['student' => $student], 'Edit Student');
        }
    }

    // Handle student deletion
    public function deleteStudent($id) {
        if ($this->studentService->deleteStudent($id)) {
            $this->redirect('student/listStudents', null, 'Student deleted successfully.');
        } else {
            $this->redirect('student/listStudents', null, 'Failed to delete student.');
        }
    }
}
?>
