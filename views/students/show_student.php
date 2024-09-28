<!-- app/views/students/show_student.php -->
<h1>Student Details</h1>
<p><strong>DB Id:</strong> <?= htmlspecialchars($student->id); ?></p>
<p><strong>First Name:</strong> <?= htmlspecialchars($student->firstName); ?></p>
<p><strong>Last Name:</strong> <?= htmlspecialchars($student->lastName); ?></p>
<p><strong>Reg Number:</strong> <?= htmlspecialchars($student->regNumber); ?></p>
<p><strong>Phone Number:</strong> <?= htmlspecialchars($student->phoneNumber); ?></p>
<p><strong>Email Address:</strong> <?= htmlspecialchars($student->emailAddress); ?></p>
<a href="<?=route('student/showStudent',$student->id) ?>">Edit</a>
<a href="<?=route('student')?>">Back to List</a>
