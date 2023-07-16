
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="card mx-auto col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <h3 class="card-header">Employee Update Form</h3>
                    <div class="card-body">
                        <form action="<?= base_url();?>employees/update_employee" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                            <div class="form-row">

                                <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" name="first_name" id="firstName" value="<?= $employee['first_name']; ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('first_name'); ?>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="lastName" value="<?= $employee['last_name']; ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('last_name'); ?>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?= $employee['email']; ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="contact">Contact</label>
                                    <input type="number" class="form-control" name="contact" id="contact" value="<?= $employee['contact']; ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('contact'); ?>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="input-select">Role</label>
                                    <select class="form-control" id="input-select" name="role">
                                        <option value="0">Employee</option>
                                        <option value="1">Administrator</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('role'); ?>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button class="btn btn-primary" type="submit">Update Employee</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>