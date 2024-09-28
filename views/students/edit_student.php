<!-- app/views/students/edit_student.php -->
<h1>Edit Student</h1>
<form method="POST" action="<?=route('student/updateStudent', $student->id)?>">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" value="<?= htmlspecialchars($student->firstName); ?>" required>
    <br>
    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" value="<?= htmlspecialchars($student->lastName); ?>" required>
    <br>
    <label for="regNumber">Registration Number:</label>
    <input type="text" name="regNumber" value="<?= htmlspecialchars($student->regNumber); ?>" required>
    <br>
    <label for="phoneNumber">Phone Number:</label>
    <input type="text" name="phoneNumber" value="<?= htmlspecialchars($student->phoneNumber); ?>" required>
    <br>
    <label for="emailAddress">Email Address:</label>
    <input type="email" name="emailAddress" value="<?= htmlspecialchars($student->emailAddress); ?>" required>
    <br>
    <input type="submit" value="Update Student">
</form>
<a href="<?=route('student')?>">Back to List</a>
