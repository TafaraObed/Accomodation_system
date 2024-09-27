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
            <th>Program</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= htmlspecialchars($student->firstName); ?></td>
                <td><?= htmlspecialchars($student->lastName); ?></td>
                <td><?= htmlspecialchars($student->regNumber); ?></td>
                <td><?= htmlspecialchars($student->program); ?></td>
                <td>
                    <a href="/students/show?id=<?= $student->id; ?>">View</a> | 
                    <a href="/students/edit?id=<?= $student->id; ?>">Edit</a> | 
                    <a href="/students/delete?id=<?= $student->id; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<a href="/students/create">Add New Student</a>
