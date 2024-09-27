<!-- app/views/students/edit_student.php -->
<h1>Edit Student</h1>
<form method="POST">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" value="<?= htmlspecialchars($student->firstName); ?>" required>
    <br>
    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" value="<?= htmlspecialchars($student->lastName); ?>" required>
    <br>
    <label for="regNumber">Registration Number:</label>
    <input type="text" name="regNumber" value="<?= htmlspecialchars($student->regNumber); ?>" required>
    <br>
    <label for="program">Program:</label>
    <input type="text" name="program" value="<?= htmlspecialchars($student->program); ?>" required>
    <br>
    <label for="phoneNumber">Phone Number:</label>
    <input type="text" name="phoneNumber" value="<?= htmlspecialchars($student->phoneNumber); ?>" required>
    <br>
    <label for="emailAddress">Email Address:</label>
    <input type="email" name="emailAddress" value="<?= htmlspecialchars($student->emailAddress); ?>" required>
    <br>
    <label for="physicalAddress">Physical Address:</label>
    <input type="text" name="physicalAddress" value="<?= htmlspecialchars($student->physicalAddress); ?>" required>
    <br>
    <label for="assessorId">Assessor ID:</label>
    <input type="text" name="assessorId" value="<?= htmlspecialchars($student->assessorId); ?>" required>
    <br>
    <label for="supervisorId">Supervisor ID:</label>
    <input type="text" name="supervisorId" value="<?= htmlspecialchars($student->supervisorId); ?>" required>
    <br>
    <input type="submit" value="Update Student">
</form>
<a href="/students">Back to List</a>
