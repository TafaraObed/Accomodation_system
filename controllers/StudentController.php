<?php
require_once 'services/StudentServices.php';
require_once 'controllers/BaseController.php'; // Include the BaseController

class StudentController extends BaseController {
    private $studentService;

    public function __construct() {
        $this->studentService = new StudentService();
    }

    // List all students
    public function listStudents() {
        $students = $this->studentService->getAllStudents();
        $this->render('students/index', ['students' => $students], 'Student List');
    }

    // Show a student by ID
    public function showStudent($id) {
        $student = $this->studentService->getStudentById($id);
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
            $this->studentService->createStudent($student);
            $this->listStudents();
            exit;  // Add exit after redirect
        }
        $this->render('students/add_student', [], 'Add Student');
    }

    // Handle student update
    public function updateStudent($id) {
        $student = $this->studentService->getStudentById($id);
        
        // Check if the student was found
        if ($student === null) {
            $this->redirect("student");
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student->firstName = $_POST['firstName'];
            $student->lastName = $_POST['lastName'];
            $student->regNumber = $_POST['regNumber'];
            $student->phoneNumber = $_POST['phoneNumber'];
            $student->emailAddress = $_POST['emailAddress'];
    
            $this->studentService->updateStudent($student, $id); // Update the student
            $this->redirect("student");
        }
    
        $this->render('students/edit_student', ['student' => $student], 'Edit Student');
    }
    

    // Handle student deletion
    public function deleteStudent($id) {
        $this->studentService->deleteStudent($id);
        $this->redirect("student"); 
    }
}
?>
