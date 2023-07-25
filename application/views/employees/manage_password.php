<div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h3 class="card-header">Password Manager</h3>
                            <div class="card-body">
                            <?php echo validation_errors(); ?>
                                <form action="<?= base_url();?>employees/update_password" method="post" class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-4">
                                            <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
                                            <label for="New_Password">New Password</label>
                                            <input type="password" class="form-control" id="New_Password" name="new_pass" required>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('new_pass'); ?>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <button class="btn btn-primary" type="submit">Change Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>