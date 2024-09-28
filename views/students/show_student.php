<!-- app/views/students/show_student.php -->

<!-- partial -->

        <div class="row ">
            <div class="col-lg-9 grid-margin stretch-card mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><span>Recod for DB Id : </span> <?= htmlspecialchars($student->id); ?></h4>
                    <p class="card-description"> Basic form layout </p>

                    <form class="forms-sample" method="POST" action="<?=route('student/updateStudent', $student->id)?>">
                      <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" class="form-control" id="firstName" value="<?= htmlspecialchars($student->firstName); ?>">
                      </div>
                      <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lastName" class="form-control" id="lastName" value="<?= htmlspecialchars($student->lastName); ?>">
                      </div>
                      <div class="form-group">
                        <label for="regNumber">Reg Number</label>
                        <input type="text" name="regNumber" class="form-control" id="regNumber" value="<?= htmlspecialchars($student->regNumber); ?>">
                      </div>
                      <div class="form-group">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" value="<?= htmlspecialchars($student->phoneNumber); ?>">
                      </div>
                      <div class="form-group">
                        <label for="emailAddress">Email Address</label>
                        <input type="email" name="emailAddress" class="form-control" id="emailAddress" value="<?= htmlspecialchars($student->emailAddress); ?>">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Update</button>
                      <a class="btn btn-light" href="<?=route('student')?>">Back to List</a>
                    </form>

                  </div>
                </div>
            </div>

