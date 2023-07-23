
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="card mx-auto col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <h3 class="card-header">Employee Registration Form</h3>
                    <div class="card-body">
					<?php echo validation_errors(); ?>
                        <form action="register" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" name="first_name" id="firstName" placeholder="First Name" value="<?= set_value('first_name'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('first_name'); ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="lastName" placeholder="Last Name" value="<?= set_value('last_name'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('last_name'); ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="contact">Contact</label>
                                    <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact" value="<?= set_value('contact'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('contact'); ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= set_value('password'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('password'); ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="confpassword">Confirm Password</label>
                                    <input type="password" class="form-control" name="confpassword" id="confpassword" placeholder="Confirm Password" value="<?= set_value('conf_password'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('confpassword'); ?>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                    <label for="employee_image">Upload Image</label>
                                    <input type="file" class="form-control" id="employee_image" name="userfile" size="20">
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button class="btn btn-primary" type="submit">Register Employee</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>