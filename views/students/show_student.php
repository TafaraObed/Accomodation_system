<!-- app/views/students/show_student.php -->
<h1>Student Details</h1>
<p><strong>First Name:</strong> <?= htmlspecialchars($student->firstName); ?></p>
<p><strong>Last Name:</strong> <?= htmlspecialchars($student->lastName); ?></p>
<p><strong>Reg Number:</strong> <?= htmlspecialchars($student->regNumber); ?></p>
<p><strong>Program:</strong> <?= htmlspecialchars($student->program); ?></p>
<p><strong>Phone Number:</strong> <?= htmlspecialchars($student->phoneNumber); ?></p>
<p><strong>Email Address:</strong> <?= htmlspecialchars($student->emailAddress); ?></p>
<p><strong>Physical Address:</strong> <?= htmlspecialchars($student->physicalAddress); ?></p>
<p><strong>Assessor ID:</strong> <?= htmlspecialchars($student->assessorId); ?></p>
<p><strong>Supervisor ID:</strong> <?= htmlspecialchars($student->supervisorId); ?></p>
<a href="/students/edit?id=<?= $student->id; ?>">Edit</a>
<a href="/students">Back to List</a>
