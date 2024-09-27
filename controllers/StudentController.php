<?php
require_once 'services/StudentService.php';
require_once 'controllers/BaseController.php'; // Include the BaseController

class StudentController extends BaseController {
    private $studentService;

    public function __construct() {
        $this->studentService = new StudentService();
    }

    // List all students
    public function listStudents() {
        $students = $this->studentService->getAllStudents();
        $this->render('students/list_students', ['students' => $students], 'Student List');
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
                $_POST['firstName'],
                $_POST['lastName'],
                $_POST['regNumber'],
                $_POST['program'],
                $_POST['phoneNumber'],
                $_POST['emailAddress'],
                $_POST['physicalAddress'],
                $_POST['assessorId'],
                $_POST['supervisorId']
            );
            $this->studentService->createStudent($student);
            header("Location: /students");
            exit;  // Add exit after redirect
        }
        $this->render('students/add_student', [], 'Add Student');
    }

    // Handle student update
    public function updateStudent($id) {
        $student = $this->studentService->getStudentById($id);
        
        // Check if the student was found
        if ($student === null) {
            // Handle the case where the student is not found
            // For example, redirect to the students list with an error message
            header("Location: /students?error=Student not found");
            exit;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student->firstName = $_POST['firstName'];
            $student->lastName = $_POST['lastName'];
            $student->regNumber = $_POST['regNumber'];
            $student->program = $_POST['program'];
            $student->phoneNumber = $_POST['phoneNumber'];
            $student->emailAddress = $_POST['emailAddress'];
            $student->physicalAddress = $_POST['physicalAddress'];
            $student->assessorId = $_POST['assessorId'];
            $student->supervisorId = $_POST['supervisorId'];
    
            $this->studentService->updateStudent($student, $id); // Update the student
            header("Location: /students");
            exit;  // Add exit after redirect
        }
    
        $this->render('students/edit_student', ['student' => $student], 'Edit Student');
    }
    

    // Handle student deletion
    public function deleteStudent($id) {
        $this->studentService->deleteStudent($id);
        header("Location: /students");
        exit;  // Add exit after redirect
    }
}
?>
