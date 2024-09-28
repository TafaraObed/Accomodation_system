<!-- app/views/students/list_students.php -->
<h1>Students List</h1>

<?php if (empty($students)): ?>
    <p>No students found.</p>
<?php else: ?>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Reg Number</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= htmlspecialchars($student->firstName); ?></td>
                <td><?= htmlspecialchars($student->lastName); ?></td>
                <td><?= htmlspecialchars($student->regNumber); ?></td>
                <td><?= htmlspecialchars($student->phoneNumber); ?></td>
                <td><?= htmlspecialchars($student->emailAddress); ?></td>
                <td>
                    <a href="<?=route('student/showStudent',$student->id) ?>">View</a> | 
                    <a href="<?=route('student/updateStudent',$student->id) ?>">Edit</a> | 
                    <a href="<?=route('student/deleteStudent',$student->id) ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<a href="<?=route('student/createStudent')?>">Add New Student</a>
