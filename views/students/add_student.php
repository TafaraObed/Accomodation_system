<!-- app/views/students/add_student.php -->
<h1>Add New Student</h1>
<form method="POST">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" required>
    <br>
    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" required>
    <br>
    <label for="regNumber">Registration Number:</label>
    <input type="text" name="regNumber" required>
    <br>
    <label for="program">Program:</label>
    <input type="text" name="program" required>
    <br>
    <label for="phoneNumber">Phone Number:</label>
    <input type="text" name="phoneNumber" required>
    <br>
    <label for="emailAddress">Email Address:</label>
    <input type="email" name="emailAddress" required>
    <br>
    <label for="physicalAddress">Physical Address:</label>
    <input type="text" name="physicalAddress" required>
    <br>
    <label for="assessorId">Assessor ID:</label>
    <input type="text" name="assessorId" required>
    <br>
    <label for="supervisorId">Supervisor ID:</label>
    <input type="text" name="supervisorId" required>
    <br>
    <input type="submit" value="Add Student">
</form>
<a href="/students">Back to List</a>
