<!-- app/views/students/add_student.php -->
<!-- partial -->
<div class="row ">
<div class="col-lg-9 grid-margin stretch-card mx-auto">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Add a Student</h4>
        <p class="card-description"> You can add any new student </p>

        <form class="forms-sample" method="POST" action="<?=route('student/createStudent')?>">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" class="form-control" id="firstName" required>
            </div>

            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" class="form-control" id="lastName" required>
            </div>

            <div class="form-group">
                <label for="regNumber">Reg Number</label>
                <input type="text" name="regNumber" class="form-control" id="regNumber" required>
            </div>

            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" required>
            </div>

            <div class="form-group">
                <label for="emailAddress">Email Address</label>
                <input type="email" name="emailAddress" class="form-control" id="emailAddress" required>
            </div>

            <button type="submit" class="btn btn-success me-2">Add</button>
            <a class="btn btn-light" href="<?=route('student')?>">Back to List</a>
        </form>

        </div>
    </div>
</div>

