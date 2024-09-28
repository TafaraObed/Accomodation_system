
<!-- app/views/students/list_students.php -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title row justify-content-end mb-2">
                    <span class="mr-3 col-10">Students</span>
                    <a class="btn btn-sm btn-outline-primary col-2 " href="<?=route('student/createStudent')?>">Add New Student</a>
                <hr class="mt-3">
                </h4>
                <?php if (empty($students)): ?>
                    <p class="card-description"> Table is empty, no students found</code>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Reg Number</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student): ?>
                                <tr>
                                    <td><?= htmlspecialchars($student->firstName); ?></td>
                                    <td><?= htmlspecialchars($student->lastName); ?></td>
                                    <td><?= htmlspecialchars($student->regNumber); ?></td>
                                    <td><?= htmlspecialchars($student->phoneNumber); ?></td>
                                    <td><?= htmlspecialchars($student->emailAddress); ?></td>
                                    <td>
                                        <a class="btn btn-sm bg-light text-black" href="<?=route('student/showStudent',$student->id) ?>">View</a> 
                                        <a class="btn btn-sm badge-danger" href="<?=route('student/deleteStudent',$student->id) ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
